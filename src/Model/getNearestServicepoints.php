<?php

namespace DHLServicePointClient\Model;

class getNearestServicepoints
{

    /**
     * @var GetNearestServicepointsStructure $structure
     */
    protected $structure = null;

    /**
     * @param GetNearestServicepointsStructure $structure
     */
    public function __construct($structure)
    {
      $this->structure = $structure;
    }

    /**
     * @return GetNearestServicepointsStructure
     */
    public function getStructure()
    {
      return $this->structure;
    }

    /**
     * @param GetNearestServicepointsStructure $structure
     * @return \DHLServicePointClient\Model\getNearestServicepoints
     */
    public function setStructure($structure)
    {
      $this->structure = $structure;
      return $this;
    }

}
