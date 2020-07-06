<?php

namespace DHLServicePointClient\Model;

class ServiceStructure
{

    /**
     * @var string $serviceType
     */
    protected $serviceType = null;

    /**
     * @var string $serviceValue
     */
    protected $serviceValue = null;

    /**
     * @var string $textInstruction
     */
    protected $textInstruction = null;

    /**
     * @var string $collectOnDeliveryForm
     */
    protected $collectOnDeliveryForm = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
      return $this->serviceType;
    }

    /**
     * @param string $serviceType
     * @return \DHLServicePointClient\Model\ServiceStructure
     */
    public function setServiceType($serviceType)
    {
      $this->serviceType = $serviceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getServiceValue()
    {
      return $this->serviceValue;
    }

    /**
     * @param string $serviceValue
     * @return \DHLServicePointClient\Model\ServiceStructure
     */
    public function setServiceValue($serviceValue)
    {
      $this->serviceValue = $serviceValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextInstruction()
    {
      return $this->textInstruction;
    }

    /**
     * @param string $textInstruction
     * @return \DHLServicePointClient\Model\ServiceStructure
     */
    public function setTextInstruction($textInstruction)
    {
      $this->textInstruction = $textInstruction;
      return $this;
    }

    /**
     * @return string
     */
    public function getCollectOnDeliveryForm()
    {
      return $this->collectOnDeliveryForm;
    }

    /**
     * @param string $collectOnDeliveryForm
     * @return \DHLServicePointClient\Model\ServiceStructure
     */
    public function setCollectOnDeliveryForm($collectOnDeliveryForm)
    {
      $this->collectOnDeliveryForm = $collectOnDeliveryForm;
      return $this;
    }

}
