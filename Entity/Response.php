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

namespace Mayeco\NotificationsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Mayeco\NotificationsBundle\Entity\ResponseRepository")
 * @ORM\Table(name="notification_response")
 */
class Response
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_id", type="string", length=255)
     */
    private $invoice_id;

    /**
     * @var string
     *
     * @ORM\Column(name="order_number", type="string", length=255)
     */
    private $order_number;

    /**
     * @var string
     *
     * @ORM\Column(name="sid", type="string", length=255)
     */
    private $sid;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="float", nullable=true)
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="md5_hash", type="string", length=255)
     */
    private $md5_hash;

    /**
     * @var string
     *
     * @ORM\Column(name="merchant_order_id", type="string", length=255, nullable=true)
     */
    private $merchant_order_id;

    /**
     * @var string
     *
     * @ORM\Column(name="currency_code", type="string", length=255, nullable=true)
     */
    private $currency_code;

    /**
     * @var string
     *
     * @ORM\Column(name="credit_card_processed", type="string", length=255, nullable=true)
     */
    private $credit_card_processed;

    /**
     * @var string
     *
     * @ORM\Column(name="fixed", type="string", length=255, nullable=true)
     */
    private $fixed;

    /**
     * @var string
     *
     * @ORM\Column(name="pay_method", type="string", length=255, nullable=true)
     */
    private $pay_method;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="street_address", type="string", length=255, nullable=true)
     */
    private $street_address;

    /**
     * @var string
     *
     * @ORM\Column(name="street_address2", type="string", length=255, nullable=true)
     */
    private $street_address2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=255, nullable=true)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="card_holder_name", type="string", length=255, nullable=true)
     */
    private $card_holder_name;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $first_name;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255, nullable=true)
     */
    private $last_name;

    /**
     * @var string
     *
     * @ORM\Column(name="middle_initial", type="string", length=255, nullable=true)
     */
    private $middle_initial;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="ip_country", type="string", length=255, nullable=true)
     */
    private $ip_country;

    /**
     * @var string
     *
     * @ORM\Column(name="li_0_description", type="string", length=255, nullable=true)
     */
    private $li_0_description;

    /**
     * @var string
     *
     * @ORM\Column(name="li_0_duration", type="string", length=255, nullable=true)
     */
    private $li_0_duration;

    /**
     * @var string
     *
     * @ORM\Column(name="li_0_name", type="string", length=255, nullable=true)
     */
    private $li_0_name;

    /**
     * @var string
     *
     * @ORM\Column(name="li_0_price", type="string", length=255, nullable=true)
     */
    private $li_0_price;

    /**
     * @var string
     *
     * @ORM\Column(name="li_0_product_id", type="string", length=255, nullable=true)
     */
    private $li_0_product_id;

    /**
     * @var string
     *
     * @ORM\Column(name="item_recurrence", type="string", length=255, nullable=true)
     */
    private $li_0_recurrence;

    /**
     * @var string
     *
     * @ORM\Column(name="li_0_quantity", type="string", length=255, nullable=true)
     */
    private $li_0_quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="li_0_type", type="string", length=255, nullable=true)
     */
    private $li_0_type;

    /**
     * @var string
     *
     * @ORM\Column(name="raw_data", type="text", nullable=true)
     */
    private $raw_data;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMd5Hash()
    {
        return $this->md5_hash;
    }

    /**
     * @param string $md5_hash
     */
    public function setMd5Hash($md5_hash)
    {
        $this->md5_hash = $md5_hash;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoice_id;
    }

    /**
     * @param string $invoice_id
     */
    public function setInvoiceId($invoice_id)
    {
        $this->invoice_id = $invoice_id;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->order_number;
    }

    /**
     * @param string $order_number
     */
    public function setOrderNumber($order_number)
    {
        $this->order_number = $order_number;
    }

    /**
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param string $sid
     */
    public function setSid($sid)
    {
        $this->sid = $sid;
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param string $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return string
     */
    public function getMerchantOrderId()
    {
        return $this->merchant_order_id;
    }

    /**
     * @param string $merchant_order_id
     */
    public function setMerchantOrderId($merchant_order_id)
    {
        $this->merchant_order_id = $merchant_order_id;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * @param string $currency_code
     */
    public function setCurrencyCode($currency_code)
    {
        $this->currency_code = $currency_code;
    }

    /**
     * @return string
     */
    public function getCreditCardProcessed()
    {
        return $this->credit_card_processed;
    }

    /**
     * @param string $credit_card_processed
     */
    public function setCreditCardProcessed($credit_card_processed)
    {
        $this->credit_card_processed = $credit_card_processed;
    }

    /**
     * @return string
     */
    public function getFixed()
    {
        return $this->fixed;
    }

    /**
     * @param string $fixed
     */
    public function setFixed($fixed)
    {
        $this->fixed = $fixed;
    }

    /**
     * @return string
     */
    public function getPayMethod()
    {
        return $this->pay_method;
    }

    /**
     * @param string $pay_method
     */
    public function setPayMethod($pay_method)
    {
        $this->pay_method = $pay_method;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->street_address;
    }

    /**
     * @param string $street_address
     */
    public function setStreetAddress($street_address)
    {
        $this->street_address = $street_address;
    }

    /**
     * @return string
     */
    public function getStreetAddress2()
    {
        return $this->street_address2;
    }

    /**
     * @param string $street_address2
     */
    public function setStreetAddress2($street_address2)
    {
        $this->street_address2 = $street_address2;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @param string $zip
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
    }

    /**
     * @return string
     */
    public function getCardHolderName()
    {
        return $this->card_holder_name;
    }

    /**
     * @param string $card_holder_name
     */
    public function setCardHolderName($card_holder_name)
    {
        $this->card_holder_name = $card_holder_name;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * @return string
     */
    public function getMiddleInitial()
    {
        return $this->middle_initial;
    }

    /**
     * @param string $middle_initial
     */
    public function setMiddleInitial($middle_initial)
    {
        $this->middle_initial = $middle_initial;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return string
     */
    public function getIpCountry()
    {
        return $this->ip_country;
    }

    /**
     * @param string $ip_country
     */
    public function setIpCountry($ip_country)
    {
        $this->ip_country = $ip_country;
    }

    /**
     * @return string
     */
    public function getLi0Description()
    {
        return $this->li_0_description;
    }

    /**
     * @param string $li_0_description
     */
    public function setLi0Description($li_0_description)
    {
        $this->li_0_description = $li_0_description;
    }

    /**
     * @return string
     */
    public function getLi0Duration()
    {
        return $this->li_0_duration;
    }

    /**
     * @param string $li_0_duration
     */
    public function setLi0Duration($li_0_duration)
    {
        $this->li_0_duration = $li_0_duration;
    }

    /**
     * @return string
     */
    public function getLi0Name()
    {
        return $this->li_0_name;
    }

    /**
     * @param string $li_0_name
     */
    public function setLi0Name($li_0_name)
    {
        $this->li_0_name = $li_0_name;
    }

    /**
     * @return string
     */
    public function getLi0Price()
    {
        return $this->li_0_price;
    }

    /**
     * @param string $li_0_price
     */
    public function setLi0Price($li_0_price)
    {
        $this->li_0_price = $li_0_price;
    }

    /**
     * @return string
     */
    public function getLi0ProductId()
    {
        return $this->li_0_product_id;
    }

    /**
     * @param string $li_0_product_id
     */
    public function setLi0ProductId($li_0_product_id)
    {
        $this->li_0_product_id = $li_0_product_id;
    }

    /**
     * @return string
     */
    public function getLi0Recurrence()
    {
        return $this->li_0_recurrence;
    }

    /**
     * @param string $li_0_recurrence
     */
    public function setLi0Recurrence($li_0_recurrence)
    {
        $this->li_0_recurrence = $li_0_recurrence;
    }

    /**
     * @return string
     */
    public function getLi0Quantity()
    {
        return $this->li_0_quantity;
    }

    /**
     * @param string $li_0_quantity
     */
    public function setLi0Quantity($li_0_quantity)
    {
        $this->li_0_quantity = $li_0_quantity;
    }

    /**
     * @return string
     */
    public function getLi0Type()
    {
        return $this->li_0_type;
    }

    /**
     * @param string $li_0_type
     */
    public function setLi0Type($li_0_type)
    {
        $this->li_0_type = $li_0_type;
    }

    /**
     * @return string
     */
    public function getRawData()
    {
        return $this->raw_data;
    }

    /**
     * @param string $item_recurrence_1
     */
    public function setRawData($raw)
    {
        $this->raw_data = $raw;
    }

}
