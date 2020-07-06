<?php

namespace DHLServicePointClient\Model;

class BillingStructure
{

    /**
     * @var string $shippingPaymentType
     */
    protected $shippingPaymentType = null;

    /**
     * @var string $billingAccountNumber
     */
    protected $billingAccountNumber = null;

    /**
     * @var string $paymentType
     */
    protected $paymentType = null;

    /**
     * @var string $costsCenter
     */
    protected $costsCenter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShippingPaymentType()
    {
      return $this->shippingPaymentType;
    }

    /**
     * @param string $shippingPaymentType
     * @return \DHLServicePointClient\Model\BillingStructure
     */
    public function setShippingPaymentType($shippingPaymentType)
    {
      $this->shippingPaymentType = $shippingPaymentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingAccountNumber()
    {
      return $this->billingAccountNumber;
    }

    /**
     * @param string $billingAccountNumber
     * @return \DHLServicePointClient\Model\BillingStructure
     */
    public function setBillingAccountNumber($billingAccountNumber)
    {
      $this->billingAccountNumber = $billingAccountNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
      return $this->paymentType;
    }

    /**
     * @param string $paymentType
     * @return \DHLServicePointClient\Model\BillingStructure
     */
    public function setPaymentType($paymentType)
    {
      $this->paymentType = $paymentType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostsCenter()
    {
      return $this->costsCenter;
    }

    /**
     * @param string $costsCenter
     * @return \DHLServicePointClient\Model\BillingStructure
     */
    public function setCostsCenter($costsCenter)
    {
      $this->costsCenter = $costsCenter;
      return $this;
    }

}
