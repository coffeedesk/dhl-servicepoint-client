<?php

namespace DHLServicePointClient\Model;

class ShipmentInfoStructure
{

    /**
     * @var string $dropOffType
     */
    protected $dropOffType = null;

    /**
     * @var string $serviceType
     */
    protected $serviceType = null;

    /**
     * @var BillingStructure $billing
     */
    protected $billing = null;

    /**
     * @var ArrayOfServicestructure $specialServices
     */
    protected $specialServices = null;

    /**
     * @var string $shipmentDate
     */
    protected $shipmentDate = null;

    /**
     * @var string $shipmentStartHour
     */
    protected $shipmentStartHour = null;

    /**
     * @var string $shipmentEndHour
     */
    protected $shipmentEndHour = null;

    /**
     * @var string $labelType
     */
    protected $labelType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getDropOffType()
    {
      return $this->dropOffType;
    }

    /**
     * @param string $dropOffType
     * @return \DHLServicePointClient\Model\ShipmentInfoStructure
     */
    public function setDropOffType($dropOffType)
    {
      $this->dropOffType = $dropOffType;
      return $this;
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
     * @return \DHLServicePointClient\Model\ShipmentInfoStructure
     */
    public function setServiceType($serviceType)
    {
      $this->serviceType = $serviceType;
      return $this;
    }

    /**
     * @return BillingStructure
     */
    public function getBilling()
    {
      return $this->billing;
    }

    /**
     * @param BillingStructure $billing
     * @return \DHLServicePointClient\Model\ShipmentInfoStructure
     */
    public function setBilling($billing)
    {
      $this->billing = $billing;
      return $this;
    }

    /**
     * @return ArrayOfServicestructure
     */
    public function getSpecialServices()
    {
      return $this->specialServices;
    }

    /**
     * @param ArrayOfServicestructure $specialServices
     * @return \DHLServicePointClient\Model\ShipmentInfoStructure
     */
    public function setSpecialServices($specialServices)
    {
      $this->specialServices = $specialServices;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentDate()
    {
      return $this->shipmentDate;
    }

    /**
     * @param string $shipmentDate
     * @return \DHLServicePointClient\Model\ShipmentInfoStructure
     */
    public function setShipmentDate($shipmentDate)
    {
      $this->shipmentDate = $shipmentDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentStartHour()
    {
      return $this->shipmentStartHour;
    }

    /**
     * @param string $shipmentStartHour
     * @return \DHLServicePointClient\Model\ShipmentInfoStructure
     */
    public function setShipmentStartHour($shipmentStartHour)
    {
      $this->shipmentStartHour = $shipmentStartHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentEndHour()
    {
      return $this->shipmentEndHour;
    }

    /**
     * @param string $shipmentEndHour
     * @return \DHLServicePointClient\Model\ShipmentInfoStructure
     */
    public function setShipmentEndHour($shipmentEndHour)
    {
      $this->shipmentEndHour = $shipmentEndHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelType()
    {
      return $this->labelType;
    }

    /**
     * @param string $labelType
     * @return \DHLServicePointClient\Model\ShipmentInfoStructure
     */
    public function setLabelType($labelType)
    {
      $this->labelType = $labelType;
      return $this;
    }

}
