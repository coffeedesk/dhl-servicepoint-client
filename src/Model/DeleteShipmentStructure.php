<?php

namespace DHLServicePointClient\Model;

class DeleteShipmentStructure
{

    /**
     * @var AuthdataStructure $authData
     */
    protected $authData = null;

    /**
     * @var string $shipment
     */
    protected $shipment = null;

    
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
     * @return \DHLServicePointClient\Model\DeleteShipmentStructure
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipment()
    {
      return $this->shipment;
    }

    /**
     * @param string $shipment
     * @return \DHLServicePointClient\Model\DeleteShipmentStructure
     */
    public function setShipment($shipment)
    {
      $this->shipment = $shipment;
      return $this;
    }

}
