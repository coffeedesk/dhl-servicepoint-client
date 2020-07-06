<?php

namespace DHLServicePointClient\Model;

class getLabelResponse
{

    /**
     * @var LabelStructure $getLabelResult
     */
    protected $getLabelResult = null;

    /**
     * @param LabelStructure $getLabelResult
     */
    public function __construct($getLabelResult)
    {
      $this->getLabelResult = $getLabelResult;
    }

    /**
     * @return LabelStructure
     */
    public function getGetLabelResult()
    {
      return $this->getLabelResult;
    }

    /**
     * @param LabelStructure $getLabelResult
     * @return \DHLServicePointClient\Model\getLabelResponse
     */
    public function setGetLabelResult($getLabelResult)
    {
      $this->getLabelResult = $getLabelResult;
      return $this;
    }

}
