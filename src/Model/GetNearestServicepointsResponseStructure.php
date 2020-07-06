<?php

namespace DHLServicePointClient\Model;

class GetNearestServicepointsResponseStructure
{

    /**
     * @var ArrayOfPointstructure $points
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
     * @return ArrayOfPointstructure
     */
    public function getPoints()
    {
      return $this->points;
    }

    /**
     * @param ArrayOfPointstructure $points
     * @return \DHLServicePointClient\Model\GetNearestServicepointsResponseStructure
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
     * @return \DHLServicePointClient\Model\GetNearestServicepointsResponseStructure
     */
    public function setCount($count)
    {
      $this->count = $count;
      return $this;
    }

}
