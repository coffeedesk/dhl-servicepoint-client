<?php

namespace DHLServicePointClient\Model;

class getPnpResponse
{

    /**
     * @var LabelStructure $getPnpResult
     */
    protected $getPnpResult = null;

    /**
     * @param LabelStructure $getPnpResult
     */
    public function __construct($getPnpResult)
    {
      $this->getPnpResult = $getPnpResult;
    }

    /**
     * @return LabelStructure
     */
    public function getGetPnpResult()
    {
      return $this->getPnpResult;
    }

    /**
     * @param LabelStructure $getPnpResult
     * @return \DHLServicePointClient\Model\getPnpResponse
     */
    public function setGetPnpResult($getPnpResult)
    {
      $this->getPnpResult = $getPnpResult;
      return $this;
    }

}
