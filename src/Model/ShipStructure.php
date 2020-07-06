<?php

namespace DHLServicePointClient\Model;

class ShipStructure
{

    /**
     * @var FullAddressDataStructure $shipper
     */
    protected $shipper = null;

    /**
     * @var ReceiverDataStructure $receiver
     */
    protected $receiver = null;

    /**
     * @var string $servicePointAccountNumber
     */
    protected $servicePointAccountNumber = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FullAddressDataStructure
     */
    public function getShipper()
    {
      return $this->shipper;
    }

    /**
     * @param FullAddressDataStructure $shipper
     * @return \DHLServicePointClient\Model\ShipStructure
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return ReceiverDataStructure
     */
    public function getReceiver()
    {
      return $this->receiver;
    }

    /**
     * @param ReceiverDataStructure $receiver
     * @return \DHLServicePointClient\Model\ShipStructure
     */
    public function setReceiver($receiver)
    {
      $this->receiver = $receiver;
      return $this;
    }

    /**
     * @return string
     */
    public function getServicePointAccountNumber()
    {
      return $this->servicePointAccountNumber;
    }

    /**
     * @param string $servicePointAccountNumber
     * @return \DHLServicePointClient\Model\ShipStructure
     */
    public function setServicePointAccountNumber($servicePointAccountNumber)
    {
      $this->servicePointAccountNumber = $servicePointAccountNumber;
      return $this;
    }

}
