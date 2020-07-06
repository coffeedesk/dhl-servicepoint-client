<?php

namespace DHLServicePointClient\Model;

class getPnp
{

    /**
     * @var GetPnpStructure $structure
     */
    protected $structure = null;

    /**
     * @param GetPnpStructure $structure
     */
    public function __construct($structure)
    {
      $this->structure = $structure;
    }

    /**
     * @return GetPnpStructure
     */
    public function getStructure()
    {
      return $this->structure;
    }

    /**
     * @param GetPnpStructure $structure
     * @return \DHLServicePointClient\Model\getPnp
     */
    public function setStructure($structure)
    {
      $this->structure = $structure;
      return $this;
    }

}
