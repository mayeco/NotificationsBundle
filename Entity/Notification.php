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
 * @ORM\Entity(repositoryClass="Mayeco\NotificationsBundle\Entity\NotificationRepository")
 * @ORM\Table(name="notification_notifications")
 */
class Notification
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
     * @ORM\Column(name="message_type", type="string", length=255)
     */
    private $message_type;

    /**
     * @var string
     *
     * @ORM\Column(name="item_count", type="integer")
     */
    private $item_count;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor_id", type="string", length=255)
     */
    private $vendor_id;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_id", type="string", length=255)
     */
    private $sale_id;

    /**
     * @var string
     *
     * @ORM\Column(name="key_count", type="integer")
     */
    private $key_count;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_type", type="string", length=255, nullable=true)
     */
    private $payment_type;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_id", type="string", length=255)
     */
    private $invoice_id;

    /**
     * @var string
     *
     * @ORM\Column(name="recurring", type="boolean", options={"default" = "0"})
     */
    private $recurring;

    /**
     * @var string
     *
     * @ORM\Column(name="vendor_order_id", type="string", length=255, nullable=true)
     */
    private $vendor_order_id;

    /**
     * @var string
     *
     * @ORM\Column(name="fraud_status", type="string", length=255, nullable=true)
     */
    private $fraud_status;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_status", type="string", length=255, nullable=true)
     */
    private $invoice_status;

    /**
     * @var string
     *
     * @ORM\Column(name="auth_exp", type="date", nullable=true)
     */
    private $auth_exp;

    /**
     * @var string
     *
     * @ORM\Column(name="message_id", type="integer")
     */
    private $message_id;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_usd_amount", type="float", nullable=true)
     */
    private $invoice_usd_amount;

    /**
     * @var string
     *
     * @ORM\Column(name="list_currency", type="string", length=255, nullable=true)
     */
    private $list_currency;

    /**
     * @var string
     *
     * @ORM\Column(name="cust_currency", type="string", length=255, nullable=true)
     */
    private $cust_currency;

    /**
     * @var string
     *
     * @ORM\Column(name="sale_date_placed", type="datetime", nullable=true)
     */
    private $sale_date_placed;

    /**
     * @var string
     *
     * @ORM\Column(name="timestamp", type="datetime", nullable=true)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="md5_hash", type="string", length=255, nullable=true)
     */
    private $md5_hash;

    /**
     * @var string
     *
     * @ORM\Column(name="bill_country", type="string", length=255, nullable=true)
     */
    private $bill_country;

    /**
     * @var string
     *
     * @ORM\Column(name="bill_street_address", type="string", length=255, nullable=true)
     */
    private $bill_street_address;

    /**
     * @var string
     *
     * @ORM\Column(name="bill_street_address2", type="string", length=255, nullable=true)
     */
    private $bill_street_address2;

    /**
     * @var string
     *
     * @ORM\Column(name="bill_postal_code", type="string", length=255, nullable=true)
     */
    private $bill_postal_code;

    /**
     * @var string
     *
     * @ORM\Column(name="bill_state", type="string", length=255, nullable=true)
     */
    private $bill_state;

    /**
     * @var string
     *
     * @ORM\Column(name="bill_city", type="string", length=255, nullable=true)
     */
    private $bill_city;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_last_name", type="string", length=255, nullable=true)
     */
    private $customer_last_name;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_first_name", type="string", length=255, nullable=true)
     */
    private $customer_first_name;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=255, nullable=true)
     */
    private $customer_name;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_email", type="string", length=255, nullable=true)
     */
    private $customer_email;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone", type="string", length=255, nullable=true)
     */
    private $customer_phone;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ip", type="string", length=255, nullable=true)
     */
    private $customer_ip;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_ip_country", type="string", length=255, nullable=true)
     */
    private $customer_ip_country;

    /**
     * @var string
     *
     * @ORM\Column(name="item_id", type="string", length=255, nullable=true)
     */
    private $item_id_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_name", type="string", length=255, nullable=true)
     */
    private $item_name_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_rec_status", type="string", length=255, nullable=true)
     */
    private $item_rec_status_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_rec_install_billed", type="integer", nullable=true)
     */
    private $item_rec_install_billed_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_usd_amount", type="float", nullable=true)
     */
    private $item_usd_amount_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_cust_amount", type="float", nullable=true)
     */
    private $item_cust_amount_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_rec_list_amount", type="float", nullable=true)
     */
    private $item_rec_list_amount_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_duration", type="string", length=255, nullable=true)
     */
    private $item_duration_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_rec_date_next", type="date", nullable=true)
     */
    private $item_rec_date_next_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_type", type="string", length=255, nullable=true)
     */
    private $item_type_1;

    /**
     * @var string
     *
     * @ORM\Column(name="item_recurrence", type="string", length=255, nullable=true)
     */
    private $item_recurrence_1;

    /**
     * @var string
     *
     * @ORM\Column(name="raw_data", type="text", nullable=true)
     */
    private $raw_data;

    public function __construct()
    {
        $this->sale_date_placed = new \DateTime();
        $this->timestamp = new \DateTime();
        $this->item_rec_date_next_1 = new \DateTime();
    }

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
    public function getMessageType()
    {
        return $this->message_type;
    }

    /**
     * @param string $message_type
     */
    public function setMessageType($message_type)
    {
        $this->message_type = $message_type;
    }

    /**
     * @return string
     */
    public function getItemCount()
    {
        return $this->item_count;
    }

    /**
     * @param string $item_count
     */
    public function setItemCount($item_count)
    {
        $this->item_count = $item_count;
    }

    /**
     * @return string
     */
    public function getVendorId()
    {
        return $this->vendor_id;
    }

    /**
     * @param string $vendor_id
     */
    public function setVendorId($vendor_id)
    {
        $this->vendor_id = $vendor_id;
    }

    /**
     * @return string
     */
    public function getSaleId()
    {
        return $this->sale_id;
    }

    /**
     * @param string $sale_id
     */
    public function setSaleId($sale_id)
    {
        $this->sale_id = $sale_id;
    }

    /**
     * @return string
     */
    public function getFraudStatus()
    {
        return $this->fraud_status;
    }

    /**
     * @param string $fraud_status
     */
    public function setFraudStatus($fraud_status)
    {
        $this->fraud_status = $fraud_status;
    }

    /**
     * @return string
     */
    public function getInvoiceStatus()
    {
        return $this->invoice_status;
    }

    /**
     * @param string $invoice_status
     */
    public function setInvoiceStatus($invoice_status)
    {
        $this->invoice_status = $invoice_status;
    }

    /**
     * @return string
     */
    public function getAuthExp()
    {
        return $this->auth_exp;
    }

    /**
     * @param string $auth_exp
     */
    public function setAuthExp($auth_exp)
    {
        $this->auth_exp = $auth_exp;
    }

    /**
     * @return string
     */
    public function getKeyCount()
    {
        return $this->key_count;
    }

    /**
     * @param string $key_count
     */
    public function setKeyCount($key_count)
    {
        $this->key_count = $key_count;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->payment_type;
    }

    /**
     * @param string $payment_type
     */
    public function setPaymentType($payment_type)
    {
        $this->payment_type = $payment_type;
    }

    /**
     * @return string
     */
    public function getRecurring()
    {
        return $this->recurring;
    }

    /**
     * @param string $recurring
     */
    public function setRecurring($recurring)
    {
        $this->recurring = $recurring;
    }

    /**
     * @return string
     */
    public function getVendorOrderId()
    {
        return $this->vendor_order_id;
    }

    /**
     * @param string $vendor_order_id
     */
    public function setVendorOrderId($vendor_order_id)
    {
        $this->vendor_order_id = $vendor_order_id;
    }

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->message_id;
    }

    /**
     * @param string $message_id
     */
    public function setMessageId($message_id)
    {
        $this->message_id = $message_id;
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
    public function getInvoiceUsdAmount()
    {
        return $this->invoice_usd_amount;
    }

    /**
     * @param string $invoice_usd_amount
     */
    public function setInvoiceUsdAmount($invoice_usd_amount)
    {
        $this->invoice_usd_amount = $invoice_usd_amount;
    }

    /**
     * @return string
     */
    public function getListCurrency()
    {
        return $this->list_currency;
    }

    /**
     * @param string $list_currency
     */
    public function setListCurrency($list_currency)
    {
        $this->list_currency = $list_currency;
    }

    /**
     * @return string
     */
    public function getCustCurrency()
    {
        return $this->cust_currency;
    }

    /**
     * @param string $cust_currency
     */
    public function setCustCurrency($cust_currency)
    {
        $this->cust_currency = $cust_currency;
    }

    /**
     * @return string
     */
    public function getSaleDatePlaced()
    {
        return $this->sale_date_placed;
    }

    /**
     * @param string $sale_date_placed
     */
    public function setSaleDatePlaced($sale_date_placed)
    {
        $this->sale_date_placed = $sale_date_placed;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
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
    public function getBillCountry()
    {
        return $this->bill_country;
    }

    /**
     * @param string $bill_country
     */
    public function setBillCountry($bill_country)
    {
        $this->bill_country = $bill_country;
    }

    /**
     * @return string
     */
    public function getBillStreetAddress()
    {
        return $this->bill_street_address;
    }

    /**
     * @param string $bill_street_address
     */
    public function setBillStreetAddress($bill_street_address)
    {
        $this->bill_street_address = $bill_street_address;
    }

    /**
     * @return string
     */
    public function getBillStreetAddress2()
    {
        return $this->bill_street_address2;
    }

    /**
     * @param string $bill_street_address2
     */
    public function setBillStreetAddress2($bill_street_address2)
    {
        $this->bill_street_address2 = $bill_street_address2;
    }

    /**
     * @return string
     */
    public function getBillPostalCode()
    {
        return $this->bill_postal_code;
    }

    /**
     * @param string $bill_postal_code
     */
    public function setBillPostalCode($bill_postal_code)
    {
        $this->bill_postal_code = $bill_postal_code;
    }

    /**
     * @return string
     */
    public function getBillState()
    {
        return $this->bill_state;
    }

    /**
     * @param string $bill_state
     */
    public function setBillState($bill_state)
    {
        $this->bill_state = $bill_state;
    }

    /**
     * @return string
     */
    public function getBillCity()
    {
        return $this->bill_city;
    }

    /**
     * @param string $bill_city
     */
    public function setBillCity($bill_city)
    {
        $this->bill_city = $bill_city;
    }

    /**
     * @return string
     */
    public function getCustomerLastName()
    {
        return $this->customer_last_name;
    }

    /**
     * @param string $customer_last_name
     */
    public function setCustomerLastName($customer_last_name)
    {
        $this->customer_last_name = $customer_last_name;
    }

    /**
     * @return string
     */
    public function getCustomerFirstName()
    {
        return $this->customer_first_name;
    }

    /**
     * @param string $customer_first_name
     */
    public function setCustomerFirstName($customer_first_name)
    {
        $this->customer_first_name = $customer_first_name;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * @param string $customer_name
     */
    public function setCustomerName($customer_name)
    {
        $this->customer_name = $customer_name;
    }

    /**
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customer_email;
    }

    /**
     * @param string $customer_email
     */
    public function setCustomerEmail($customer_email)
    {
        $this->customer_email = $customer_email;
    }

    /**
     * @return string
     */
    public function getCustomerPhone()
    {
        return $this->customer_phone;
    }

    /**
     * @param string $customer_phone
     */
    public function setCustomerPhone($customer_phone)
    {
        $this->customer_phone = $customer_phone;
    }

    /**
     * @return string
     */
    public function getCustomerIp()
    {
        return $this->customer_ip;
    }

    /**
     * @param string $customer_ip
     */
    public function setCustomerIp($customer_ip)
    {
        $this->customer_ip = $customer_ip;
    }

    /**
     * @return string
     */
    public function getCustomerIpCountry()
    {
        return $this->customer_ip_country;
    }

    /**
     * @param string $customer_ip_country
     */
    public function setCustomerIpCountry($customer_ip_country)
    {
        $this->customer_ip_country = $customer_ip_country;
    }

    /**
     * @return string
     */
    public function getItemId1()
    {
        return $this->item_id_1;
    }

    /**
     * @param string $item_id
     */
    public function setItemId1($item_id)
    {
        $this->item_id_1 = $item_id;
    }

    /**
     * @return string
     */
    public function getItemName1()
    {
        return $this->item_name_1;
    }

    /**
     * @param string $item_name
     */
    public function setItemName1($item_name)
    {
        $this->item_name_1 = $item_name;
    }

    /**
     * @return string
     */
    public function getItemRecStatus1()
    {
        return $this->item_rec_status_1;
    }

    /**
     * @param string $item_rec_status
     */
    public function setItemRecStatus1($item_rec_status)
    {
        $this->item_rec_status_1 = $item_rec_status;
    }

    /**
     * @return string
     */
    public function getItemRecInstallBilled1()
    {
        return $this->item_rec_install_billed_1;
    }

    /**
     * @param string $item_rec_install_billed
     */
    public function setItemRecInstallBilled1($item_rec_install_billed)
    {
        $this->item_rec_install_billed_1 = $item_rec_install_billed;
    }

    /**
     * @return string
     */
    public function getItemUsdAmount1()
    {
        return $this->item_usd_amount_1;
    }

    /**
     * @param string $item_usd_amount
     */
    public function setItemUsdAmount1($item_usd_amount)
    {
        $this->item_usd_amount_1 = $item_usd_amount;
    }

    /**
     * @return string
     */
    public function getItemCustAmount1()
    {
        return $this->item_cust_amount_1;
    }

    /**
     * @param string $item_cust_amount_1
     */
    public function setItemCustAmount1($item_cust_amount)
    {
        $this->item_cust_amount_1 = $item_cust_amount;
    }

    /**
     * @return string
     */
    public function getItemRecListAmount1()
    {
        return $this->item_rec_list_amount_1;
    }

    /**
     * @param string $item_rec_list_amount_1
     */
    public function setItemRecListAmount1($item_rec_list_amount_1)
    {
        $this->item_rec_list_amount_1 = $item_rec_list_amount_1;
    }

    /**
     * @return string
     */
    public function getItemDuration1()
    {
        return $this->item_duration_1;
    }

    /**
     * @param string $item_duration
     */
    public function setItemDuration1($item_duration)
    {
        $this->item_duration_1 = $item_duration;
    }

    /**
     * @return string
     */
    public function getItemRecDateNext1()
    {
        return $this->item_rec_date_next_1;
    }

    /**
     * @param string $item_rec_date_next
     */
    public function setItemRecDateNext1($item_rec_date_next)
    {
        $this->item_rec_date_next_1 = $item_rec_date_next;
    }

    /**
     * @return string
     */
    public function getItemType1()
    {
        return $this->item_type_1;
    }

    /**
     * @param string $item_type
     */
    public function setItemType1($item_type)
    {
        $this->item_type_1 = $item_type;
    }

    /**
     * @return string
     */
    public function getItemRecurrence1()
    {
        return $this->item_recurrence_1;
    }

    /**
     * @param string $item_recurrence_1
     */
    public function setItemRecurrence1($item_recurrence_1)
    {
        $this->item_recurrence_1 = $item_recurrence_1;
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
