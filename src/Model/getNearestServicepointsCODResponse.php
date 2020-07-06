<?php

namespace DHLServicePointClient\Model;

class getNearestServicepointsCODResponse
{

    /**
     * @var GetNearestServicepointsResponseStructure $getNearestServicepointsCODResult
     */
    protected $getNearestServicepointsCODResult = null;

    /**
     * @param GetNearestServicepointsResponseStructure $getNearestServicepointsCODResult
     */
    public function __construct($getNearestServicepointsCODResult)
    {
      $this->getNearestServicepointsCODResult = $getNearestServicepointsCODResult;
    }

    /**
     * @return GetNearestServicepointsResponseStructure
     */
    public function getGetNearestServicepointsCODResult()
    {
      return $this->getNearestServicepointsCODResult;
    }

    /**
     * @param GetNearestServicepointsResponseStructure $getNearestServicepointsCODResult
     * @return \DHLServicePointClient\Model\getNearestServicepointsCODResponse
     */
    public function setGetNearestServicepointsCODResult($getNearestServicepointsCODResult)
    {
      $this->getNearestServicepointsCODResult = $getNearestServicepointsCODResult;
      return $this;
    }

}
