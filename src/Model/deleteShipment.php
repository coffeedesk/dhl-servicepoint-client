<?php

namespace DHLServicePointClient\Model;

class deleteShipment
{

    /**
     * @var DeleteShipmentStructure $shipment
     */
    protected $shipment = null;

    /**
     * @param DeleteShipmentStructure $shipment
     */
    public function __construct($shipment)
    {
      $this->shipment = $shipment;
    }

    /**
     * @return DeleteShipmentStructure
     */
    public function getShipment()
    {
      return $this->shipment;
    }

    /**
     * @param DeleteShipmentStructure $shipment
     * @return \DHLServicePointClient\Model\deleteShipment
     */
    public function setShipment($shipment)
    {
      $this->shipment = $shipment;
      return $this;
    }

}
