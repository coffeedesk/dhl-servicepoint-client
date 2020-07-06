<?php

namespace DHLServicePointClient\Model;

class AuthdataStructure
{

    /**
     * @var string $username
     */
    protected $username = null;

    /**
     * @var string $password
     */
    protected $password = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @param string $username
     * @return \DHLServicePointClient\Model\AuthdataStructure
     */
    public function setUsername($username)
    {
      $this->username = $username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @param string $password
     * @return \DHLServicePointClient\Model\AuthdataStructure
     */
    public function setPassword($password)
    {
      $this->password = $password;
      return $this;
    }

}
