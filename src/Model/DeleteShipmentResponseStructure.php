<?php

namespace DHLServicePointClient\Model;

class DeleteShipmentResponseStructure
{

    /**
     * @var string $status
     */
    protected $status = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \DHLServicePointClient\Model\DeleteShipmentResponseStructure
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
