<?php

namespace DHLServicePointClient\Model;

class getLabel
{

    /**
     * @var GetLabelStructure $structure
     */
    protected $structure = null;

    /**
     * @param GetLabelStructure $structure
     */
    public function __construct($structure)
    {
      $this->structure = $structure;
    }

    /**
     * @return GetLabelStructure
     */
    public function getStructure()
    {
      return $this->structure;
    }

    /**
     * @param GetLabelStructure $structure
     * @return \DHLServicePointClient\Model\getLabel
     */
    public function setStructure($structure)
    {
      $this->structure = $structure;
      return $this;
    }

}
