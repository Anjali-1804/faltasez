<?php
include("ClientSettings.php");

$clientSettings = new ClientSettings();

class Eazypay
{
    public $merchant_id;
    public $encryption_key;
    public $sub_merchant_id;
    public $reference_no;
    public $paymode;
    public $return_url;
    public $isRentEnabled;


    const DEFAULT_BASE_URL = 'https://eazypayuat.icicibank.com/EazyPG?';
    const DEFAULT_PROD_URL = 'https://eazypay.icicibank.com/EazyPG?';

    public function __construct($clientSettings)
    {
        $this->isRentEnabled            =    $clientSettings->isRentPaymentEnabled;
        $this->merchant_id              =    ($this->isRentEnabled == '0' ? '600145' : '373895');
        $this->encryption_key           =    ($this->isRentEnabled == '0' ? '6000042701405012' : '3721982738901000');
        $this->sub_merchant_id          =    ($this->isRentEnabled == '0' ? '45' : '45');
        $this->paymode                  =    ($this->isRentEnabled == '0' ? '3' : '9');
        $this->return_url               =    ($this->isRentEnabled == '0' ? 'https://openbraces.in/test_fsez/payment-processor.php' : 'https://fsez.gov.in/payment-processor.php');
    }

    public function getPaymentUrl($amount, $reference_no, $payer_email, $payment_year, $payment_quarter,  $optionalField)
    {
        $mandatoryField   =    $this->getMandatoryField($amount, $reference_no, $payer_email, $payment_year, $payment_quarter);
        $optionalField    =    $this->getOptionalField($optionalField);
        $amount           =    $this->getAmount($amount);
        $reference_no     =    $this->getReferenceNo($reference_no);
        /* Additional Mandatory Fields */
        $payer_email      =    $this->getPayerEmail($payer_email);
        $payment_year     =    $this->getPaymentYear($payment_year);
        $payment_quarter  =    $this->getPaymentQuarter($payment_quarter);

        $paymentUrl = $this->generatePaymentUrl($mandatoryField, $optionalField, $amount, $reference_no);
        return $paymentUrl;
    }

    protected function generatePaymentUrl($mandatoryField, $optionalField, $amount, $reference_no)
    {
        if ($this->isRentEnabled == '0') {
            $encryptedUrl = self::DEFAULT_BASE_URL . "merchantid=" . $this->merchant_id .
                "&mandatory fields=" . $mandatoryField . "&optional fields=" . $optionalField .
                "&returnurl=" . $this->getReturnUrl() . "&Reference No=" . $reference_no .
                "&submerchantid=" . $this->getSubMerchantId() . "&transaction amount=" .
                $amount . "&paymode=" . $this->getPaymode();
        } else {
            $encryptedUrl = self::DEFAULT_PROD_URL . "merchantid=" . $this->merchant_id .
                "&mandatory fields=" . $mandatoryField . "&optional fields=" . $optionalField .
                "&returnurl=" . $this->getReturnUrl() . "&Reference No=" . $reference_no .
                "&submerchantid=" . $this->getSubMerchantId() . "&transaction amount=" .
                $amount . "&paymode=" . $this->getPaymode();
        }

        return $encryptedUrl;
    }

    protected function getMandatoryField($amount, $reference_no, $payer_email, $payment_year, $payment_quarter)
    {
        return $this->getEncryptValue($reference_no . '|' . $this->sub_merchant_id . '|' . $amount . '|' . $payer_email . '|' . $payment_year . '|' . $payment_quarter);
    }

    // optional field must be seperated with | eg. (20|20|20|20)
    protected function getOptionalField($optionalField)
    {
        if (!is_null($optionalField)) {
            return $this->getEncryptValue($optionalField);
        }
        return null;
    }

    protected function getAmount($amount)
    {
        return $this->getEncryptValue($amount);
    }

    protected function getPayerEmail($payer_email)
    {
        return $this->getEncryptValue($payer_email);
    }

    protected function getPaymentQuarter($payment_quarter)
    {
        return $this->getEncryptValue($payment_quarter);
    }

    protected function getPaymentYear($payment_year)
    {
        return $this->getEncryptValue($payment_year);
    }

    protected function getReturnUrl()
    {
        return $this->getEncryptValue($this->return_url);
    }

    protected function getReferenceNo($reference_no)
    {
        return $this->getEncryptValue($reference_no);
    }

    protected function getSubMerchantId()
    {
        return $this->getEncryptValue($this->sub_merchant_id);
    }

    protected function getPaymode()
    {
        return $this->getEncryptValue($this->paymode);
    }

    // use @ to avoid php warning php 

    protected function getEncryptValue($data)
    {
        // Generate an initialization vector
        // $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
        // Encrypt the data using AES 128 encryption in ecb mode using our encryption key and initialization vector.
        $encrypted = openssl_encrypt($data, 'aes-128-ecb', $this->encryption_key, OPENSSL_RAW_DATA);
        // The $iv is just as important as the key for decrypting, so save it with our encrypted data using a unique separator (::)
        return base64_encode($encrypted);
    }
}
