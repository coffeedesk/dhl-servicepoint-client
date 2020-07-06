<?php

namespace DHLServicePointClient\Model;

class ServicePointMethodsService extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthdataStructure' => 'DHLServicePointClient\\Model\\AuthdataStructure',
      'AddressStructure' => 'DHLServicePointClient\\Model\\AddressStructure',
      'ContactStructure' => 'DHLServicePointClient\\Model\\ContactStructure',
      'PreavisoStructure' => 'DHLServicePointClient\\Model\\PreavisoStructure',
      'FullAddressDataStructure' => 'DHLServicePointClient\\Model\\FullAddressDataStructure',
      'ReceiverAddressStructure' => 'DHLServicePointClient\\Model\\ReceiverAddressStructure',
      'ReceiverDataStructure' => 'DHLServicePointClient\\Model\\ReceiverDataStructure',
      'ShipStructure' => 'DHLServicePointClient\\Model\\ShipStructure',
      'BillingStructure' => 'DHLServicePointClient\\Model\\BillingStructure',
      'ServiceStructure' => 'DHLServicePointClient\\Model\\ServiceStructure',
      'ArrayOfServicestructure' => 'DHLServicePointClient\\Model\\ArrayOfServicestructure',
      'ShipmentInfoStructure' => 'DHLServicePointClient\\Model\\ShipmentInfoStructure',
      'PieceStructure' => 'DHLServicePointClient\\Model\\PieceStructure',
      'ArrayOfPiecestructure' => 'DHLServicePointClient\\Model\\ArrayOfPiecestructure',
      'ShipmentStructure' => 'DHLServicePointClient\\Model\\ShipmentStructure',
      'CreateShipmentStructure' => 'DHLServicePointClient\\Model\\CreateShipmentStructure',
      'createShipment' => 'DHLServicePointClient\\Model\\createShipment',
      'LabelStructure' => 'DHLServicePointClient\\Model\\LabelStructure',
      'CreateShipmentResponseStructure' => 'DHLServicePointClient\\Model\\CreateShipmentResponseStructure',
      'createShipmentResponse' => 'DHLServicePointClient\\Model\\createShipmentResponse',
      'DeleteShipmentStructure' => 'DHLServicePointClient\\Model\\DeleteShipmentStructure',
      'deleteShipment' => 'DHLServicePointClient\\Model\\deleteShipment',
      'DeleteShipmentResponseStructure' => 'DHLServicePointClient\\Model\\DeleteShipmentResponseStructure',
      'deleteShipmentResponse' => 'DHLServicePointClient\\Model\\deleteShipmentResponse',
      'GetLabelStructure' => 'DHLServicePointClient\\Model\\GetLabelStructure',
      'getLabel' => 'DHLServicePointClient\\Model\\getLabel',
      'getLabelResponse' => 'DHLServicePointClient\\Model\\getLabelResponse',
      'GetPnpStructure' => 'DHLServicePointClient\\Model\\GetPnpStructure',
      'getPnp' => 'DHLServicePointClient\\Model\\getPnp',
      'getPnpResponse' => 'DHLServicePointClient\\Model\\getPnpResponse',
      'GetNearestServicepointsStructure' => 'DHLServicePointClient\\Model\\GetNearestServicepointsStructure',
      'getNearestServicepoints' => 'DHLServicePointClient\\Model\\getNearestServicepoints',
      'SearchAddressStructure' => 'DHLServicePointClient\\Model\\SearchAddressStructure',
      'PointStructure' => 'DHLServicePointClient\\Model\\PointStructure',
      'ArrayOfPointstructure' => 'DHLServicePointClient\\Model\\ArrayOfPointstructure',
      'GetNearestServicepointsResponseStructure' => 'DHLServicePointClient\\Model\\GetNearestServicepointsResponseStructure',
      'getNearestServicepointsResponse' => 'DHLServicePointClient\\Model\\getNearestServicepointsResponse',
      'GetNearestTerminalServicepointsStructure' => 'DHLServicePointClient\\Model\\GetNearestTerminalServicepointsStructure',
      'getNearestTerminalServicepoints' => 'DHLServicePointClient\\Model\\getNearestTerminalServicepoints',
      'TerminalPointStructure' => 'DHLServicePointClient\\Model\\TerminalPointStructure',
      'ArrayOfTerminalpointstructure' => 'DHLServicePointClient\\Model\\ArrayOfTerminalpointstructure',
      'GetNearestTerminalServicepointsResponseStructure' => 'DHLServicePointClient\\Model\\GetNearestTerminalServicepointsResponseStructure',
      'getNearestTerminalServicepointsResponse' => 'DHLServicePointClient\\Model\\getNearestTerminalServicepointsResponse',
      'getNearestServicepointsCOD' => 'DHLServicePointClient\\Model\\getNearestServicepointsCOD',
      'getNearestServicepointsCODResponse' => 'DHLServicePointClient\\Model\\getNearestServicepointsCODResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://dhl24.com.pl/servicepoint.html';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Tworzenie przesylki
     *
     * @param createShipment $parameters
     * @return createShipmentResponse
     */
    public function createShipment(createShipment $parameters)
    {
      return $this->__soapCall('createShipment', array($parameters));
    }

    /**
     * Usuwanie przesyłki
     *
     * @param deleteShipment $parameters
     * @return deleteShipmentResponse
     */
    public function deleteShipment(deleteShipment $parameters)
    {
      return $this->__soapCall('deleteShipment', array($parameters));
    }

    /**
     * Pobieranie etykiety przesyłki
     *
     * @param getLabel $parameters
     * @return getLabelResponse
     */
    public function getLabel(getLabel $parameters)
    {
      return $this->__soapCall('getLabel', array($parameters));
    }

    /**
     * Pobieranie raportu PNP danego dnia
     *
     * @param getPnp $parameters
     * @return getPnpResponse
     */
    public function getPnp(getPnp $parameters)
    {
      return $this->__soapCall('getPnp', array($parameters));
    }

    /**
     * Pobieranie najbliższych punktów serwisowych typu Last Mile bez COD
     *
     * @param getNearestServicepoints $parameters
     * @return getNearestServicepointsResponse
     */
    public function getNearestServicepoints(getNearestServicepoints $parameters)
    {
      return $this->__soapCall('getNearestServicepoints', array($parameters));
    }

    /**
     * Pobieranie najbliższych punktów serwisowych typu Last Mile bez COD z uwzględnieniem najbliższego terminala
     *
     * @param getNearestTerminalServicepoints $parameters
     * @return getNearestTerminalServicepointsResponse
     */
    public function getNearestTerminalServicepoints(getNearestTerminalServicepoints $parameters)
    {
      return $this->__soapCall('getNearestTerminalServicepoints', array($parameters));
    }

    /**
     * Pobieranie najbliższych punktów serwisowych typu Last Mile z COD
     *
     * @param getNearestServicepointsCOD $parameters
     * @return getNearestServicepointsCODResponse
     */
    public function getNearestServicepointsCOD(getNearestServicepointsCOD $parameters)
    {
      return $this->__soapCall('getNearestServicepointsCOD', array($parameters));
    }

}
