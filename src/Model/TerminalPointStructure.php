<?php

namespace DHLServicePointClient\Model;

class TerminalPointStructure
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var SearchAddressStructure $address
     */
    protected $address = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $longitude
     */
    protected $longitude = null;

    /**
     * @var string $latitude
     */
    protected $latitude = null;

    /**
     * @var string $sap
     */
    protected $sap = null;

    /**
     * @var string $monOpen
     */
    protected $monOpen = null;

    /**
     * @var string $monClose
     */
    protected $monClose = null;

    /**
     * @var string $tueOpen
     */
    protected $tueOpen = null;

    /**
     * @var string $tueClose
     */
    protected $tueClose = null;

    /**
     * @var string $wedOpen
     */
    protected $wedOpen = null;

    /**
     * @var string $wedClose
     */
    protected $wedClose = null;

    /**
     * @var string $thuOpen
     */
    protected $thuOpen = null;

    /**
     * @var string $thuClose
     */
    protected $thuClose = null;

    /**
     * @var string $friOpen
     */
    protected $friOpen = null;

    /**
     * @var string $friClose
     */
    protected $friClose = null;

    /**
     * @var string $satOpen
     */
    protected $satOpen = null;

    /**
     * @var string $satClose
     */
    protected $satClose = null;

    /**
     * @var string $sunOpen
     */
    protected $sunOpen = null;

    /**
     * @var string $sunClose
     */
    protected $sunClose = null;

    /**
     * @var boolean $workInHoliday
     */
    protected $workInHoliday = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $saturdayDelivery
     */
    protected $saturdayDelivery = null;

    /**
     * @var boolean $isLm
     */
    protected $isLm = null;

    /**
     * @var boolean $isFm
     */
    protected $isFm = null;

    
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
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchAddressStructure
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param SearchAddressStructure $address
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
      return $this->longitude;
    }

    /**
     * @param string $longitude
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setLongitude($longitude)
    {
      $this->longitude = $longitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
      return $this->latitude;
    }

    /**
     * @param string $latitude
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setLatitude($latitude)
    {
      $this->latitude = $latitude;
      return $this;
    }

    /**
     * @return string
     */
    public function getSap()
    {
      return $this->sap;
    }

    /**
     * @param string $sap
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setSap($sap)
    {
      $this->sap = $sap;
      return $this;
    }

    /**
     * @return string
     */
    public function getMonOpen()
    {
      return $this->monOpen;
    }

    /**
     * @param string $monOpen
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setMonOpen($monOpen)
    {
      $this->monOpen = $monOpen;
      return $this;
    }

    /**
     * @return string
     */
    public function getMonClose()
    {
      return $this->monClose;
    }

    /**
     * @param string $monClose
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setMonClose($monClose)
    {
      $this->monClose = $monClose;
      return $this;
    }

    /**
     * @return string
     */
    public function getTueOpen()
    {
      return $this->tueOpen;
    }

    /**
     * @param string $tueOpen
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setTueOpen($tueOpen)
    {
      $this->tueOpen = $tueOpen;
      return $this;
    }

    /**
     * @return string
     */
    public function getTueClose()
    {
      return $this->tueClose;
    }

    /**
     * @param string $tueClose
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setTueClose($tueClose)
    {
      $this->tueClose = $tueClose;
      return $this;
    }

    /**
     * @return string
     */
    public function getWedOpen()
    {
      return $this->wedOpen;
    }

    /**
     * @param string $wedOpen
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setWedOpen($wedOpen)
    {
      $this->wedOpen = $wedOpen;
      return $this;
    }

    /**
     * @return string
     */
    public function getWedClose()
    {
      return $this->wedClose;
    }

    /**
     * @param string $wedClose
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setWedClose($wedClose)
    {
      $this->wedClose = $wedClose;
      return $this;
    }

    /**
     * @return string
     */
    public function getThuOpen()
    {
      return $this->thuOpen;
    }

    /**
     * @param string $thuOpen
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setThuOpen($thuOpen)
    {
      $this->thuOpen = $thuOpen;
      return $this;
    }

    /**
     * @return string
     */
    public function getThuClose()
    {
      return $this->thuClose;
    }

    /**
     * @param string $thuClose
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setThuClose($thuClose)
    {
      $this->thuClose = $thuClose;
      return $this;
    }

    /**
     * @return string
     */
    public function getFriOpen()
    {
      return $this->friOpen;
    }

    /**
     * @param string $friOpen
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setFriOpen($friOpen)
    {
      $this->friOpen = $friOpen;
      return $this;
    }

    /**
     * @return string
     */
    public function getFriClose()
    {
      return $this->friClose;
    }

    /**
     * @param string $friClose
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setFriClose($friClose)
    {
      $this->friClose = $friClose;
      return $this;
    }

    /**
     * @return string
     */
    public function getSatOpen()
    {
      return $this->satOpen;
    }

    /**
     * @param string $satOpen
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setSatOpen($satOpen)
    {
      $this->satOpen = $satOpen;
      return $this;
    }

    /**
     * @return string
     */
    public function getSatClose()
    {
      return $this->satClose;
    }

    /**
     * @param string $satClose
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setSatClose($satClose)
    {
      $this->satClose = $satClose;
      return $this;
    }

    /**
     * @return string
     */
    public function getSunOpen()
    {
      return $this->sunOpen;
    }

    /**
     * @param string $sunOpen
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setSunOpen($sunOpen)
    {
      $this->sunOpen = $sunOpen;
      return $this;
    }

    /**
     * @return string
     */
    public function getSunClose()
    {
      return $this->sunClose;
    }

    /**
     * @param string $sunClose
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setSunClose($sunClose)
    {
      $this->sunClose = $sunClose;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWorkInHoliday()
    {
      return $this->workInHoliday;
    }

    /**
     * @param boolean $workInHoliday
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setWorkInHoliday($workInHoliday)
    {
      $this->workInHoliday = $workInHoliday;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSaturdayDelivery()
    {
      return $this->saturdayDelivery;
    }

    /**
     * @param boolean $saturdayDelivery
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setSaturdayDelivery($saturdayDelivery)
    {
      $this->saturdayDelivery = $saturdayDelivery;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLm()
    {
      return $this->isLm;
    }

    /**
     * @param boolean $isLm
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setIsLm($isLm)
    {
      $this->isLm = $isLm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFm()
    {
      return $this->isFm;
    }

    /**
     * @param boolean $isFm
     * @return \DHLServicePointClient\Model\TerminalPointStructure
     */
    public function setIsFm($isFm)
    {
      $this->isFm = $isFm;
      return $this;
    }

}
