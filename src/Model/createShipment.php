<?php

namespace DHLServicePointClient\Model;

class createShipment
{

    /**
     * @var CreateShipmentStructure $shipment
     */
    protected $shipment = null;

    /**
     * @param CreateShipmentStructure $shipment
     */
    public function __construct($shipment)
    {
      $this->shipment = $shipment;
    }

    /**
     * @return CreateShipmentStructure
     */
    public function getShipment()
    {
      return $this->shipment;
    }

    /**
     * @param CreateShipmentStructure $shipment
     * @return \DHLServicePointClient\Model\createShipment
     */
    public function setShipment($shipment)
    {
      $this->shipment = $shipment;
      return $this;
    }

}
