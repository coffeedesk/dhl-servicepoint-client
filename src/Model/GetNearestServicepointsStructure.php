<?php

namespace DHLServicePointClient\Model;

class GetNearestServicepointsStructure
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
     * @return \DHLServicePointClient\Model\GetNearestServicepointsStructure
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
     * @return \DHLServicePointClient\Model\GetNearestServicepointsStructure
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
     * @return \DHLServicePointClient\Model\GetNearestServicepointsStructure
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
     * @return \DHLServicePointClient\Model\GetNearestServicepointsStructure
     */
    public function setRadius($radius)
    {
      $this->radius = $radius;
      return $this;
    }

}
