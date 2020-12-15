<?php

namespace DHLServicePointClient;


use DHLServicePointClient\Model\createShipmentResponse;
use DHLServicePointClient\Model\deleteShipmentResponse;
use DHLServicePointClient\Model\getLabelResponse;
use DHLServicePointClient\Model\getNearestServicepointsCODResponse;
use DHLServicePointClient\Model\getNearestServicepointsResponse;
use DHLServicePointClient\Model\getPnpResponse;
use DHLServicePointClient\Model\ServicePointMethodsService;
use DHLServicePointClient\Model\ShipmentStructure;

interface ClientInterface {

    public function __construct($username = null, $password = null, $wsdl = null, $options = []);

    /**
     * @param ShipmentStructure $shipmentStructure
     * @return createShipmentResponse
     */
    public function createShipment(ShipmentStructure $shipmentStructure);

    /**
     * @param string $shipmentNumber
     * @return deleteShipmentResponse
     */
    public function deleteShipment($shipmentNumber);

    /**
     * @param string $shipmentNumber
     * @param string $labelType
     * @return getLabelResponse
     */
    public function getLabel($shipmentNumber, $labelType);

    /**
     * @param string $postcode
     * @param string $city
     * @param int $radius
     * @return getNearestServicepointsResponse
     */
    public function getNearestServicepoints($postcode, $city, $radius);

    /**
     * @param string $postcode
     * @param string $city
     * @param int $radius
     * @return getNearestServicepointsCODResponse
     */
    public function getNearestServicepointsCOD($postcode, $city, $radius);

    /**
     * @param string $shipmentDate
     * @return getPnpResponse
     */
    public function getPnp($shipmentDate);

    /**
     * @return ServicePointMethodsService
     */
    public function getService();
}
