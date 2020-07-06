<?php

namespace DHLServicePointClient\Model;

class GetPnpStructure
{

    /**
     * @var AuthdataStructure $authData
     */
    protected $authData = null;

    /**
     * @var string $shipmentDate
     */
    protected $shipmentDate = null;

    
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
     * @return \DHLServicePointClient\Model\GetPnpStructure
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
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
     * @return \DHLServicePointClient\Model\GetPnpStructure
     */
    public function setShipmentDate($shipmentDate)
    {
      $this->shipmentDate = $shipmentDate;
      return $this;
    }

}
