<?php

namespace DHLServicePointClient\Model;

class createShipmentResponse
{

    /**
     * @var CreateShipmentResponseStructure $createShipmentResult
     */
    protected $createShipmentResult = null;

    /**
     * @param CreateShipmentResponseStructure $createShipmentResult
     */
    public function __construct($createShipmentResult)
    {
      $this->createShipmentResult = $createShipmentResult;
    }

    /**
     * @return CreateShipmentResponseStructure
     */
    public function getCreateShipmentResult()
    {
      return $this->createShipmentResult;
    }

    /**
     * @param CreateShipmentResponseStructure $createShipmentResult
     * @return \DHLServicePointClient\Model\createShipmentResponse
     */
    public function setCreateShipmentResult($createShipmentResult)
    {
      $this->createShipmentResult = $createShipmentResult;
      return $this;
    }

}
