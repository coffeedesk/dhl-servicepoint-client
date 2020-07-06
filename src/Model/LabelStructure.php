<?php

namespace DHLServicePointClient\Model;

class LabelStructure
{

    /**
     * @var string $labelType
     */
    protected $labelType = null;

    /**
     * @var string $labelFormat
     */
    protected $labelFormat = null;

    /**
     * @var string $labelContent
     */
    protected $labelContent = null;

    /**
     * @var string $labelName
     */
    protected $labelName = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getLabelType()
    {
      return $this->labelType;
    }

    /**
     * @param string $labelType
     * @return \DHLServicePointClient\Model\LabelStructure
     */
    public function setLabelType($labelType)
    {
      $this->labelType = $labelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelFormat()
    {
      return $this->labelFormat;
    }

    /**
     * @param string $labelFormat
     * @return \DHLServicePointClient\Model\LabelStructure
     */
    public function setLabelFormat($labelFormat)
    {
      $this->labelFormat = $labelFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelContent()
    {
      return $this->labelContent;
    }

    /**
     * @param string $labelContent
     * @return \DHLServicePointClient\Model\LabelStructure
     */
    public function setLabelContent($labelContent)
    {
      $this->labelContent = $labelContent;
      return $this;
    }

    /**
     * @return string
     */
    public function getLabelName()
    {
      return $this->labelName;
    }

    /**
     * @param string $labelName
     * @return \DHLServicePointClient\Model\LabelStructure
     */
    public function setLabelName($labelName)
    {
      $this->labelName = $labelName;
      return $this;
    }

}
