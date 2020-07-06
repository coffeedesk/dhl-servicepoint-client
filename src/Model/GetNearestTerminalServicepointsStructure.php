<?php

namespace DHLServicePointClient\Model;

class GetNearestTerminalServicepointsStructure
{

    /**
     * @var AuthdataStructure $authData
     */
    protected $authData = null;

    /**
     * @var string $postcode
     */
    protected $postcode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var int $radius
     */
    protected $radius = null;

    /**
     * @var boolean $toForeignPs
     */
    protected $toForeignPs = null;

    /**
     * @var boolean $toPm
     */
    protected $toPm = null;

    /**
     * @var boolean $withCOD
     */
    protected $withCOD = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AuthdataStructure
     */
    public function getAuthData()
    {
      return $this->authData;
    }

    /**
     * @param AuthdataStructure $authData
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsStructure
     */
    public function setAuthData($authData)
    {
      $this->authData = $authData;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
      return $this->postcode;
    }

    /**
     * @param string $postcode
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsStructure
     */
    public function setPostcode($postcode)
    {
      $this->postcode = $postcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsStructure
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return int
     */
    public function getRadius()
    {
      return $this->radius;
    }

    /**
     * @param int $radius
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsStructure
     */
    public function setRadius($radius)
    {
      $this->radius = $radius;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getToForeignPs()
    {
      return $this->toForeignPs;
    }

    /**
     * @param boolean $toForeignPs
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsStructure
     */
    public function setToForeignPs($toForeignPs)
    {
      $this->toForeignPs = $toForeignPs;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getToPm()
    {
      return $this->toPm;
    }

    /**
     * @param boolean $toPm
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsStructure
     */
    public function setToPm($toPm)
    {
      $this->toPm = $toPm;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWithCOD()
    {
      return $this->withCOD;
    }

    /**
     * @param boolean $withCOD
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsStructure
     */
    public function setWithCOD($withCOD)
    {
      $this->withCOD = $withCOD;
      return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
      return $this->limit;
    }

    /**
     * @param int $limit
     * @return \DHLServicePointClient\Model\GetNearestTerminalServicepointsStructure
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
      return $this;
    }

}
