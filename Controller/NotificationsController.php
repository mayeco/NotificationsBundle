<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * MIT license.
 */

namespace Mayeco\NotificationsBundle\Controller;

use Mayeco\NotificationsBundle\Entity\Notification;
use Mayeco\NotificationsBundle\Entity\Response as ResponseEntity;
use Mayeco\NotificationsBundle\Form\Type\NotificationType;
use Mayeco\NotificationsBundle\Form\Type\ResponseType;
use Mayeco\NotificationsBundle\NotificationEvents;
use Mayeco\NotificationsBundle\NotificationEvent;
use Mayeco\NotificationsBundle\ResponseEvent;
use Mayeco\NotificationsBundle\NotificationErrorEvent;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class NotificationsController extends Controller
{

    public function getResponseAction(Request $request)
    {
        if (!$this->validateGetHash($request->query->get('order_number'),
            $request->query->get('total'), $request->query->get('key'))
        ) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Incorrect Hash.');
        }

        $response = new ResponseEntity();
        $form = $this->createResponseCreateForm($response);

        $data = $request->query->all();
        $data['md5_hash'] = $request->query->get('key');
        $form->submit($data);

        if (!$form->isValid()) {
            $this->get('event_dispatcher')->dispatch(NotificationEvents::RESPONSE_ERROR, new NotificationErrorEvent($form->getErrorsAsString()));
            $this->get('logger')->error("Response error: " . $form->getErrorsAsString());
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Not valid request.');
        }

        $response->setRawData(json_encode($request->query->all()));
        $em->persistAndflush($response);

        $event = new ResponseEvent($response);
        $this->get('event_dispatcher')->dispatch(NotificationEvents::RESPONSE_SUCCESS, $event);

        $this->get('logger')->info('New response success', array(
            'OrderNumber_Id' => $response->getOrderNumber(),
        ));

        return $this->redirectToRoute($this->container->getParameter('mayeco_notifications.redirection_route'));
    }

    public function getNotificationAction(Request $request)
    {
        if (!$this->validatePostHash($request->request->get('sale_id'),
            $request->request->get('invoice_id'), $request->request->get('md5_hash'))
        ) {
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Incorrect Hash.');
        }

        $notification = new Notification();
        $form = $this->createNotificationCreateForm($notification);
        $form->submit($request->request->all());

        if (!$form->isValid()) {
            $this->get('event_dispatcher')->dispatch(NotificationEvents::NOTIFICATION_ERROR, new NotificationErrorEvent($form->getErrorsAsString()));
            $this->get('logger')->error("Notification error: " . $form->getErrorsAsString());
            throw new HttpException(Response::HTTP_BAD_REQUEST, 'Not valid request.');
        }

        $notification->setRawData(json_encode($request->request->all()));
        $this->persistAndflush($notification);

        $event = new NotificationEvent($notification);
        $this->get('event_dispatcher')->dispatch("notification." . strtolower($notification->getMessageType()), $event);

        $this->get('logger')->info('New notifcation success', array(
            'NOTIFICATION_ID' => $notification->getMessageId(),
        ));

        return new Response("OK");
    }

    private function createNotificationCreateForm(Notification $notification)
    {
        $form = $this->createForm(new NotificationType(), $notification, array(
            'method' => 'POST'
        ));
        return $form;
    }

    private function createResponseCreateForm(ResponseEntity $response)
    {
        $form = $this->createForm(new ResponseType(), $response, array(
            'method' => 'GET'
        ));
        return $form;
    }

    private function validatePostHash($hashOrder, $hashInvoice, $md5hash)
    {
        $hashSecretWord = $this->container->getParameter('mayeco_notifications.secret_word');
        $hashSid = $this->container->getParameter('mayeco_notifications.user_id');
        $StringToHash = strtoupper(md5($hashOrder . $hashSid . $hashInvoice . $hashSecretWord));

        return $StringToHash == $md5hash;
    }

    private function validateGetHash($hashOrder, $hashTotal, $md5hash)
    {
        $hashSecretWord = $this->container->getParameter('mayeco_notifications.secret_word');
        $hashSid = $this->container->getParameter('mayeco_notifications.user_id');
        $StringToHash = strtoupper(md5($hashSecretWord . $hashSid . $hashOrder . $hashTotal));

        return $StringToHash == $md5hash;
    }

    private function persistAndflush($object)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($object);
        $em->flush();
    }

}
