<?php

namespace DHLServicePointClient\Model;

class getNearestTerminalServicepointsResponse
{

    /**
     * @var GetNearestTerminalServicepointsResponseStructure $getNearestTerminalServicepointsResult
     */
    protected $getNearestTerminalServicepointsResult = null;

    /**
     * @param GetNearestTerminalServicepointsResponseStructure $getNearestTerminalServicepointsResult
     */
    public function __construct($getNearestTerminalServicepointsResult)
    {
      $this->getNearestTerminalServicepointsResult = $getNearestTerminalServicepointsResult;
    }

    /**
     * @return GetNearestTerminalServicepointsResponseStructure
     */
    public function getGetNearestTerminalServicepointsResult()
    {
      return $this->getNearestTerminalServicepointsResult;
    }

    /**
     * @param GetNearestTerminalServicepointsResponseStructure $getNearestTerminalServicepointsResult
     * @return \DHLServicePointClient\Model\getNearestTerminalServicepointsResponse
     */
    public function setGetNearestTerminalServicepointsResult($getNearestTerminalServicepointsResult)
    {
      $this->getNearestTerminalServicepointsResult = $getNearestTerminalServicepointsResult;
      return $this;
    }

}
