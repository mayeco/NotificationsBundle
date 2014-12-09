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

namespace Mayeco\NotificationsBundle;

final class NotificationEvents
{
    /**
     *
     * @Event
     */
    const ORDER_CREATED = 'notification.order_created';

    /**
     *
     * @Event
     */
    const FRAUD_STATUS_CHANGED = 'notification.fraud_status_changed';

    /**
     *
     * @Event
     */
    const SHIP_STATUS_CHANGED = 'notification.ship_status_changed';

    /**
     *
     * @Event
     */
    const INVOICE_STATUS_CHANGED = 'notification.invoice_status_changed';

    /**
     *
     * @Event
     */
    const REFUND_ISSUED = 'notification.refund_issued';

    /**
     *
     * @Event
     */
    const RECURRING_INSTALLMENT_SUCCESS = 'notification.recurring_installment_success';

    /**
     *
     * @Event
     */
    const RECURRING_INSTALLMENT_FAILED = 'notification.recurring_installment_failed';

    /**
     *
     * @Event
     */
    const RECURRING_STOPPED = 'notification.recurring_stopped';

    /**
     *
     * @Event
     */
    const RECURRING_COMPLETE = 'notification.recurring_complete';

    /**
     *
     * @Event
     */
    const RECURRING_RESTARTED  = 'notification.recurring_restarted';

    /**
     *
     * @Event
     */
    const NOTIFICATION_ERROR  = 'notification.error';


    /**
     *
     * @Event
     */
    const RESPONSE_SUCCESS = 'response.success';

    /**
     *
     * @Event
     */
    const RESPONSE_ERROR  = 'response.error';

}
