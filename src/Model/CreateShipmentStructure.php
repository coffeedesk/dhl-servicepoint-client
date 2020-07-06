<?php

namespace DHLServicePointClient\Model;

class CreateShipmentStructure
{

    /**
     * @var AuthdataStructure $authData
     */
    protected $authData = null;

    /**
     * @var ShipmentStructure $shipmentData
     */
    protected $shipmentData = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AuthdataStructure
     */
    public function getAuthData()
    {
      return $this->authData;
    }

    /**
     * @param AuthdataStructure $authData
     * @return \DHLServicePointClient\Model\CreateShipmentStructure
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return ShipmentStructure
     */
    public function getShipmentData()
    {
      return $this->shipmentData;
    }

    /**
     * @param ShipmentStructure $shipmentData
     * @return \DHLServicePointClient\Model\CreateShipmentStructure
     */
    public function setShipmentData($shipmentData)
    {
      $this->shipmentData = $shipmentData;
      return $this;
    }

}
