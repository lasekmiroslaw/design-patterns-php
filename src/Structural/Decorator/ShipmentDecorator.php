<?php


namespace App\Structural\Decorator;


abstract class ShipmentDecorator implements Shipment
{
    protected Shipment $shipment;

    public function __construct(Shipment $shipment)
    {
        $this->shipment = $shipment;
    }
}