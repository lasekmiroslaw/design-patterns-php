<?php


namespace App\Structural\Decorator;


class CourierShipment implements Shipment
{
    public function getPrice(): int
    {
        return 100;
    }
}