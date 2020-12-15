<?php

namespace DHLServicePointClient;

use DHLServicePointClient\Model\AuthdataStructure;
use DHLServicePointClient\Model\createShipment;
use DHLServicePointClient\Model\CreateShipmentStructure;
use DHLServicePointClient\Model\deleteShipment;
use DHLServicePointClient\Model\DeleteShipmentStructure;
use DHLServicePointClient\Model\getLabel;
use DHLServicePointClient\Model\GetLabelStructure;
use DHLServicePointClient\Model\getNearestServicepoints;
use DHLServicePointClient\Model\getNearestServicepointsCOD;
use DHLServicePointClient\Model\getNearestServicepointsResponse;
use DHLServicePointClient\Model\GetNearestServicepointsStructure;
use DHLServicePointClient\Model\getPnp;
use DHLServicePointClient\Model\GetPnpStructure;
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

    public function __construct($username = null, $password = null, $wsdl = null, $options = []) {
        $this->username = $username;
        $this->password = $password;

        if (!$wsdl) {
            $wsdl = self::WSDL_URL;
        }

        $this->authData = new AuthdataStructure();
        $this->authData->setUsername($username);
        $this->authData->setPassword($password);

        $this->service = new ServicePointMethodsService($options, $wsdl);
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

    /**
     * @param string $shipmentNumber
     * @param string $labelType
     * @return Model\getLabelResponse
     */
    public function getLabel($shipmentNumber, $labelType) {
        $getLabelStructure = new GetLabelStructure();
        $getLabelStructure->setAuthData($this->authData);
        $getLabelStructure->setShipment($shipmentNumber);
        $getLabelStructure->setType($labelType);

        $getLabel = new getLabel($getLabelStructure);

        return $this->service->getLabel($getLabel);
    }

    /**
     * @param string $postcode
     * @param string $city
     * @param int    $radius
     * @return getNearestServicepointsResponse
     */
    public function getNearestServicepoints($postcode, $city, $radius) {
        $getNearestServicepointsStructure = $this->getNearestServicepointsStructure($postcode, $city, $radius);
        $getNearestServicepoints = new getNearestServicepoints($getNearestServicepointsStructure);

        return $this->service->getNearestServicepoints($getNearestServicepoints);
    }

    /**
     * @param string $postcode
     * @param string $city
     * @param int    $radius
     * @return Model\getNearestServicepointsCODResponse
     */
    public function getNearestServicepointsCOD($postcode, $city, $radius) {
        $getNearestServicepointsStructure = $this->getNearestServicepointsStructure($postcode, $city, $radius);
        $getNearestServicepointsCOD = new getNearestServicepointsCOD($getNearestServicepointsStructure);

        return $this->service->getNearestServicepointsCOD($getNearestServicepointsCOD);
    }

    /**
     * @param string $shipmentDate
     * @return Model\getPnpResponse
     */
    public function getPnp($shipmentDate) {
        $getPnpStructure = new GetPnpStructure();
        $getPnpStructure->setAuthData($this->authData);
        $getPnpStructure->setShipmentDate($shipmentDate);

        $getPnp = new getPnp($getPnpStructure);

        return $this->service->getPnp($getPnp);
    }

    /**
     * @return ServicePointMethodsService
     */
    public function getService() {
        return $this->service;
    }

    /**
     * @param string $postcode
     * @param string $city
     * @param int $radius
     * @return GetNearestServicepointsStructure
     */
    private function getNearestServicepointsStructure($postcode, $city, $radius) {
        $getNearestServicepointsStructure = new GetNearestServicepointsStructure();
        $getNearestServicepointsStructure->setAuthData($this->authData);
        $getNearestServicepointsStructure->setPostcode($postcode);
        $getNearestServicepointsStructure->setCity($city);
        $getNearestServicepointsStructure->setRadius($radius);

        return $getNearestServicepointsStructure;
    }
}
