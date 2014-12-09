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

namespace Mayeco\NotificationsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResponseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('invoice_id')
            ->add('order_number')
            ->add('sid')
            ->add('total')
            ->add('merchant_order_id')
            ->add('currency_code')
            ->add('credit_card_processed')
            ->add('fixed')
            ->add('pay_method')
            ->add('md5_hash')

            ->add('country')
            ->add('street_address')
            ->add('street_address2')
            ->add('city')
            ->add('state')
            ->add('zip')

            ->add('card_holder_name')
            ->add('first_name')
            ->add('last_name')
            ->add('middle_initial')
            ->add('email')
            ->add('phone')
            ->add('ip_country')

            ->add('li_0_description')
            ->add('li_0_duration')
            ->add('li_0_name')
            ->add('li_0_price')
            ->add('li_0_product_id')
            ->add('li_0_recurrence')
            ->add('li_0_quantity')
            ->add('li_0_type')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mayeco\NotificationsBundle\Entity\Response',
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
