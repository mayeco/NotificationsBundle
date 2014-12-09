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

namespace Mayeco\NotificationsBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NotificationType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('message_type')
            ->add('item_count')
            ->add('vendor_id')
            ->add('key_count')
            ->add('payment_type')
            ->add('recurring')
            ->add('vendor_order_id')
            ->add('message_id')
            ->add('invoice_id')
            ->add('fraud_status')
            ->add('invoice_usd_amount')
            ->add('list_currency')
            ->add('sale_date_placed', 'datetime', array(
                'widget' => 'single_text',
            ))
            ->add('timestamp', 'datetime', array(
                'widget' => 'single_text',
            ))
            ->add('md5_hash')
            ->add('auth_exp', 'datetime', array(
                'widget' => 'single_text',
            ))
            ->add('invoice_status')
            ->add('cust_currency')
            ->add('sale_id')

            ->add('bill_country')
            ->add('bill_street_address')
            ->add('bill_street_address2')
            ->add('bill_postal_code')
            ->add('bill_state')
            ->add('bill_city')

            ->add('customer_last_name')
            ->add('customer_first_name')
            ->add('customer_name')
            ->add('customer_email')
            ->add('customer_phone')
            ->add('customer_ip')
            ->add('customer_ip_country')

            ->add('item_id_1')
            ->add('item_name_1')
            ->add('item_rec_status_1')
            ->add('item_rec_install_billed_1')
            ->add('item_usd_amount_1')
            ->add('item_duration_1')
            ->add('item_rec_date_next_1', 'datetime', array(
                'widget' => 'single_text',
            ))
            ->add('item_type_1')
            ->add('item_recurrence_1')
            ->add('item_rec_list_amount_1')
            ->add('item_cust_amount_1')
        ;

    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mayeco\NotificationsBundle\Entity\Notification',
            'csrf_protection' => false,
            'allow_extra_fields' => true,
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return '';
    }
}
