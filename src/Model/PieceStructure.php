<?php

namespace DHLServicePointClient\Model;

class PieceStructure
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $width
     */
    protected $width = null;

    /**
     * @var int $height
     */
    protected $height = null;

    /**
     * @var int $lenght
     */
    protected $lenght = null;

    /**
     * @var int $weight
     */
    protected $weight = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var boolean $nonStandard
     */
    protected $nonStandard = null;

    /**
     * @var string $blpPieceId
     */
    protected $blpPieceId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \DHLServicePointClient\Model\PieceStructure
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->width;
    }

    /**
     * @param int $width
     * @return \DHLServicePointClient\Model\PieceStructure
     */
    public function setWidth($width)
    {
      $this->width = $width;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->height;
    }

    /**
     * @param int $height
     * @return \DHLServicePointClient\Model\PieceStructure
     */
    public function setHeight($height)
    {
      $this->height = $height;
      return $this;
    }

    /**
     * @return int
     */
    public function getLenght()
    {
      return $this->lenght;
    }

    /**
     * @param int $lenght
     * @return \DHLServicePointClient\Model\PieceStructure
     */
    public function setLenght($lenght)
    {
      $this->lenght = $lenght;
      return $this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
      return $this->weight;
    }

    /**
     * @param int $weight
     * @return \DHLServicePointClient\Model\PieceStructure
     */
    public function setWeight($weight)
    {
      $this->weight = $weight;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \DHLServicePointClient\Model\PieceStructure
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNonStandard()
    {
      return $this->nonStandard;
    }

    /**
     * @param boolean $nonStandard
     * @return \DHLServicePointClient\Model\PieceStructure
     */
    public function setNonStandard($nonStandard)
    {
      $this->nonStandard = $nonStandard;
      return $this;
    }

    /**
     * @return string
     */
    public function getBlpPieceId()
    {
      return $this->blpPieceId;
    }

    /**
     * @param string $blpPieceId
     * @return \DHLServicePointClient\Model\PieceStructure
     */
    public function setBlpPieceId($blpPieceId)
    {
      $this->blpPieceId = $blpPieceId;
      return $this;
    }

}
