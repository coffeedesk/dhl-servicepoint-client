<?php

namespace DHLServicePointClient\Model;

class getNearestTerminalServicepoints
{

    /**
     * @var GetNearestTerminalServicepointsStructure $structure
     */
    protected $structure = null;

    /**
     * @param GetNearestTerminalServicepointsStructure $structure
     */
    public function __construct($structure)
    {
      $this->structure = $structure;
    }

    /**
     * @return GetNearestTerminalServicepointsStructure
     */
    public function getStructure()
    {
      return $this->structure;
    }

    /**
     * @param GetNearestTerminalServicepointsStructure $structure
     * @return \DHLServicePointClient\Model\getNearestTerminalServicepoints
     */
    public function setStructure($structure)
    {
      $this->structure = $structure;
      return $this;
    }

}
