<?php

namespace DHLServicePointClient\Model;

class ShipmentStructure
{

    /**
     * @var ShipStructure $ship
     */
    protected $ship = null;

    /**
     * @var ShipmentInfoStructure $shipmentInfo
     */
    protected $shipmentInfo = null;

    /**
     * @var ArrayOfPiecestructure $pieceList
     */
    protected $pieceList = null;

    /**
     * @var string $content
     */
    protected $content = null;

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ShipStructure
     */
    public function getShip()
    {
      return $this->ship;
    }

    /**
     * @param ShipStructure $ship
     * @return \DHLServicePointClient\Model\ShipmentStructure
     */
    public function setShip($ship)
    {
      $this->ship = $ship;
      return $this;
    }

    /**
     * @return ShipmentInfoStructure
     */
    public function getShipmentInfo()
    {
      return $this->shipmentInfo;
    }

    /**
     * @param ShipmentInfoStructure $shipmentInfo
     * @return \DHLServicePointClient\Model\ShipmentStructure
     */
    public function setShipmentInfo($shipmentInfo)
    {
      $this->shipmentInfo = $shipmentInfo;
      return $this;
    }

    /**
     * @return ArrayOfPiecestructure
     */
    public function getPieceList()
    {
      return $this->pieceList;
    }

    /**
     * @param ArrayOfPiecestructure $pieceList
     * @return \DHLServicePointClient\Model\ShipmentStructure
     */
    public function setPieceList($pieceList)
    {
      $this->pieceList = $pieceList;
      return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
      return $this->content;
    }

    /**
     * @param string $content
     * @return \DHLServicePointClient\Model\ShipmentStructure
     */
    public function setContent($content)
    {
      $this->content = $content;
      return $this;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \DHLServicePointClient\Model\ShipmentStructure
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \DHLServicePointClient\Model\ShipmentStructure
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

}
