<?php

namespace DHLServicePointClient;

use DHLServicePointClient\Model\AuthdataStructure;
use DHLServicePointClient\Model\createShipment;
use DHLServicePointClient\Model\CreateShipmentStructure;
use DHLServicePointClient\Model\deleteShipment;
use DHLServicePointClient\Model\DeleteShipmentStructure;
use DHLServicePointClient\Model\ServicePointMethodsService;
use DHLServicePointClient\Model\ShipmentStructure;

class Client implements ClientInterface {

    /** @var string|null */
    private $username;

    /** @var string|null */
    private $password;

    /** @var AuthdataStructure */
    private $authData;

    /** @var ServicePointMethodsService */
    private $service;

    const WSDL_URL = 'https://dhl24.com.pl/servicepoint.html';

    public function __construct($username = null, $password = null, $wsdl = null) {
        $this->username = $username;
        $this->password = $password;

        if (!$wsdl) {
            $wsdl = self::WSDL_URL;
        }

        $this->authData = new AuthdataStructure();
        $this->authData->setUsername($username);
        $this->authData->setPassword($password);

        $this->service = new ServicePointMethodsService([], $wsdl);
    }

    /**
     * @param ShipmentStructure $shipmentStructure
     * @return Model\createShipmentResponse
     */
    public function createShipment(ShipmentStructure $shipmentStructure) {
        $createShipmentStructure = new CreateShipmentStructure();
        $createShipmentStructure->setAuthData($this->authData);
        $createShipmentStructure->setShipmentData($shipmentStructure);

        $createShipment = new createShipment($createShipmentStructure);

        return $this->service->createShipment($createShipment);
    }

    /**
     * @param $shipmentNumber
     * @return Model\deleteShipmentResponse
     */
    public function deleteShipment($shipmentNumber) {
        $deleteShipmentStructure = new DeleteShipmentStructure();
        $deleteShipmentStructure->setAuthData($this->authData);
        $deleteShipmentStructure->setShipment($shipmentNumber);

        $deleteShipment = new deleteShipment($deleteShipmentStructure);

        return $this->service->deleteShipment($deleteShipment);
    }
}
