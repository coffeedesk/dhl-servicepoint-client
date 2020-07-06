<?php

namespace DHLServicePointClient\Model;

class getNearestServicepointsCOD
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
     * @return \DHLServicePointClient\Model\getNearestServicepointsCOD
     */
    public function setStructure($structure)
    {
      $this->structure = $structure;
      return $this;
    }

}
