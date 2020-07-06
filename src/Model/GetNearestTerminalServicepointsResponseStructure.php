<?php

namespace DHLServicePointClient\Model;

class GetNearestTerminalServicepointsResponseStructure
{

    /**
     * @var ArrayOfTerminalpointstructure $points
     */
    protected $points = null;

    /**
     * @var int $count
     */
    protected $count = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfTerminalpointstructure
     */
    public function getPoints()
    {
      return $this->points;
    }

    /**
     * @param ArrayOfTerminalpointstructure $points
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsResponseStructure
     */
    public function setPoints($points)
    {
      $this->points = $points;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->count;
    }

    /**
     * @param int $count
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsResponseStructure
     */
    public function setCount($count)
    {
      $this->count = $count;
      return $this;
    }

}
