<?php

namespace DHLServicePointClient\Model;

class CreateShipmentResponseStructure
{

    /**
     * @var string $shipmentNumber
     */
    protected $shipmentNumber = null;

    /**
     * @var LabelStructure $label
     */
    protected $label = null;

    /**
     * @var string $dispatchNumber
     */
    protected $dispatchNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getShipmentNumber()
    {
      return $this->shipmentNumber;
    }

    /**
     * @param string $shipmentNumber
     * @return \DHLServicePointClient\Model\CreateShipmentResponseStructure
     */
    public function setShipmentNumber($shipmentNumber)
    {
      $this->shipmentNumber = $shipmentNumber;
      return $this;
    }

    /**
     * @return LabelStructure
     */
    public function getLabel()
    {
      return $this->label;
    }

    /**
     * @param LabelStructure $label
     * @return \DHLServicePointClient\Model\CreateShipmentResponseStructure
     */
    public function setLabel($label)
    {
      $this->label = $label;
      return $this;
    }

    /**
     * @return string
     */
    public function getDispatchNumber()
    {
      return $this->dispatchNumber;
    }

    /**
     * @param string $dispatchNumber
     * @return \DHLServicePointClient\Model\CreateShipmentResponseStructure
     */
    public function setDispatchNumber($dispatchNumber)
    {
      $this->dispatchNumber = $dispatchNumber;
      return $this;
    }

}
