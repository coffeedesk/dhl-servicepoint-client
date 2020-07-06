<?php

namespace DHLServicePointClient;


use DHLServicePointClient\Model\createShipmentResponse;
use DHLServicePointClient\Model\deleteShipmentResponse;
use DHLServicePointClient\Model\ShipmentStructure;

interface ClientInterface {

    public function __construct($username = null, $password = null, $wsdl = null);

    /**
     * @param ShipmentStructure $shipmentStructure
     * @return createShipmentResponse
     */
    public function createShipment(ShipmentStructure $shipmentStructure);

    /**
     * @param $shipmentNumber
     * @return deleteShipmentResponse
     */
    public function deleteShipment($shipmentNumber);
}
