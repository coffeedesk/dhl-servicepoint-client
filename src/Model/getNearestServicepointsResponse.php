<?php

namespace DHLServicePointClient\Model;

class getNearestServicepointsResponse
{

    /**
     * @var GetNearestServicepointsResponseStructure $getNearestServicepointsResult
     */
    protected $getNearestServicepointsResult = null;

    /**
     * @param GetNearestServicepointsResponseStructure $getNearestServicepointsResult
     */
    public function __construct($getNearestServicepointsResult)
    {
      $this->getNearestServicepointsResult = $getNearestServicepointsResult;
    }

    /**
     * @return GetNearestServicepointsResponseStructure
     */
    public function getGetNearestServicepointsResult()
    {
      return $this->getNearestServicepointsResult;
    }

    /**
     * @param GetNearestServicepointsResponseStructure $getNearestServicepointsResult
     * @return \DHLServicePointClient\Model\getNearestServicepointsResponse
     */
    public function setGetNearestServicepointsResult($getNearestServicepointsResult)
    {
      $this->getNearestServicepointsResult = $getNearestServicepointsResult;
      return $this;
    }

}
