<?php

namespace DHLServicePointClient\Model;

class FullAddressDataStructure
{

    /**
     * @var AddressStructure $address
     */
    protected $address = null;

    /**
     * @var ContactStructure $contact
     */
    protected $contact = null;

    /**
     * @var PreavisoStructure $preaviso
     */
    protected $preaviso = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AddressStructure
     */
    public function getAddress()
    {
      return $this->address;
    }

    /**
     * @param AddressStructure $address
     * @return \DHLServicePointClient\Model\FullAddressDataStructure
     */
    public function setAddress($address)
    {
      $this->address = $address;
      return $this;
    }

    /**
     * @return ContactStructure
     */
    public function getContact()
    {
      return $this->contact;
    }

    /**
     * @param ContactStructure $contact
     * @return \DHLServicePointClient\Model\FullAddressDataStructure
     */
    public function setContact($contact)
    {
      $this->contact = $contact;
      return $this;
    }

    /**
     * @return PreavisoStructure
     */
    public function getPreaviso()
    {
      return $this->preaviso;
    }

    /**
     * @param PreavisoStructure $preaviso
     * @return \DHLServicePointClient\Model\FullAddressDataStructure
     */
    public function setPreaviso($preaviso)
    {
      $this->preaviso = $preaviso;
      return $this;
    }

}
