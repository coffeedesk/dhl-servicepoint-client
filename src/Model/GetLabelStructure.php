<?php

namespace DHLServicePointClient\Model;

class GetLabelStructure
{

    /**
     * @var AuthdataStructure $authData
     */
    protected $authData = null;

    /**
     * @var string $shipment
     */
    protected $shipment = null;

    /**
     * @var string $type
     */
    protected $type = null;

    
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
     * @return \DHLServicePointClient\Model\GetLabelStructure
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
     * @return \DHLServicePointClient\Model\GetLabelStructure
     */
    public function setShipment($shipment)
    {
      $this->shipment = $shipment;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \DHLServicePointClient\Model\GetLabelStructure
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
