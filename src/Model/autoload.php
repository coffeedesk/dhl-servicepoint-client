<?php


 function autoload_073629d183ebdaf568c6774ce0bf9511($class)
{
    $classes = array(
        'DHLServicePointClient\Model\ServicePointMethodsService' => __DIR__ .'/ServicePointMethodsService.php',
        'DHLServicePointClient\Model\AuthdataStructure' => __DIR__ .'/AuthdataStructure.php',
        'DHLServicePointClient\Model\AddressStructure' => __DIR__ .'/AddressStructure.php',
        'DHLServicePointClient\Model\ContactStructure' => __DIR__ .'/ContactStructure.php',
        'DHLServicePointClient\Model\PreavisoStructure' => __DIR__ .'/PreavisoStructure.php',
        'DHLServicePointClient\Model\FullAddressDataStructure' => __DIR__ .'/FullAddressDataStructure.php',
        'DHLServicePointClient\Model\ReceiverAddressStructure' => __DIR__ .'/ReceiverAddressStructure.php',
        'DHLServicePointClient\Model\ReceiverDataStructure' => __DIR__ .'/ReceiverDataStructure.php',
        'DHLServicePointClient\Model\ShipStructure' => __DIR__ .'/ShipStructure.php',
        'DHLServicePointClient\Model\BillingStructure' => __DIR__ .'/BillingStructure.php',
        'DHLServicePointClient\Model\ServiceStructure' => __DIR__ .'/ServiceStructure.php',
        'DHLServicePointClient\Model\ArrayOfServicestructure' => __DIR__ .'/ArrayOfServicestructure.php',
        'DHLServicePointClient\Model\ShipmentInfoStructure' => __DIR__ .'/ShipmentInfoStructure.php',
        'DHLServicePointClient\Model\PieceStructure' => __DIR__ .'/PieceStructure.php',
        'DHLServicePointClient\Model\ArrayOfPiecestructure' => __DIR__ .'/ArrayOfPiecestructure.php',
        'DHLServicePointClient\Model\ShipmentStructure' => __DIR__ .'/ShipmentStructure.php',
        'DHLServicePointClient\Model\CreateShipmentStructure' => __DIR__ .'/CreateShipmentStructure.php',
        'DHLServicePointClient\Model\createShipment' => __DIR__ .'/createShipment.php',
        'DHLServicePointClient\Model\LabelStructure' => __DIR__ .'/LabelStructure.php',
        'DHLServicePointClient\Model\CreateShipmentResponseStructure' => __DIR__ .'/CreateShipmentResponseStructure.php',
        'DHLServicePointClient\Model\createShipmentResponse' => __DIR__ .'/createShipmentResponse.php',
        'DHLServicePointClient\Model\DeleteShipmentStructure' => __DIR__ .'/DeleteShipmentStructure.php',
        'DHLServicePointClient\Model\deleteShipment' => __DIR__ .'/deleteShipment.php',
        'DHLServicePointClient\Model\DeleteShipmentResponseStructure' => __DIR__ .'/DeleteShipmentResponseStructure.php',
        'DHLServicePointClient\Model\deleteShipmentResponse' => __DIR__ .'/deleteShipmentResponse.php',
        'DHLServicePointClient\Model\GetLabelStructure' => __DIR__ .'/GetLabelStructure.php',
        'DHLServicePointClient\Model\getLabel' => __DIR__ .'/getLabel.php',
        'DHLServicePointClient\Model\getLabelResponse' => __DIR__ .'/getLabelResponse.php',
        'DHLServicePointClient\Model\GetPnpStructure' => __DIR__ .'/GetPnpStructure.php',
        'DHLServicePointClient\Model\getPnp' => __DIR__ .'/getPnp.php',
        'DHLServicePointClient\Model\getPnpResponse' => __DIR__ .'/getPnpResponse.php',
        'DHLServicePointClient\Model\GetNearestServicepointsStructure' => __DIR__ .'/GetNearestServicepointsStructure.php',
        'DHLServicePointClient\Model\getNearestServicepoints' => __DIR__ .'/getNearestServicepoints.php',
        'DHLServicePointClient\Model\SearchAddressStructure' => __DIR__ .'/SearchAddressStructure.php',
        'DHLServicePointClient\Model\PointStructure' => __DIR__ .'/PointStructure.php',
        'DHLServicePointClient\Model\ArrayOfPointstructure' => __DIR__ .'/ArrayOfPointstructure.php',
        'DHLServicePointClient\Model\GetNearestServicepointsResponseStructure' => __DIR__ .'/GetNearestServicepointsResponseStructure.php',
        'DHLServicePointClient\Model\getNearestServicepointsResponse' => __DIR__ .'/getNearestServicepointsResponse.php',
        'DHLServicePointClient\Model\GetNearestTerminalServicepointsStructure' => __DIR__ .'/GetNearestTerminalServicepointsStructure.php',
        'DHLServicePointClient\Model\getNearestTerminalServicepoints' => __DIR__ .'/getNearestTerminalServicepoints.php',
        'DHLServicePointClient\Model\TerminalPointStructure' => __DIR__ .'/TerminalPointStructure.php',
        'DHLServicePointClient\Model\ArrayOfTerminalpointstructure' => __DIR__ .'/ArrayOfTerminalpointstructure.php',
        'DHLServicePointClient\Model\GetNearestTerminalServicepointsResponseStructure' => __DIR__ .'/GetNearestTerminalServicepointsResponseStructure.php',
        'DHLServicePointClient\Model\getNearestTerminalServicepointsResponse' => __DIR__ .'/getNearestTerminalServicepointsResponse.php',
        'DHLServicePointClient\Model\getNearestServicepointsCOD' => __DIR__ .'/getNearestServicepointsCOD.php',
        'DHLServicePointClient\Model\getNearestServicepointsCODResponse' => __DIR__ .'/getNearestServicepointsCODResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_073629d183ebdaf568c6774ce0bf9511');

// Do nothing. The rest is just leftovers from the code generation.
{
}
