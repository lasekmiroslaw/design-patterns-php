<?php


namespace App\Structural\Decorator;


class Insurance extends ShipmentDecorator
{
    private const PRICE = 20;

    public function getPrice(): int
    {
        return $this->shipment->getPrice() + self::PRICE;
    }
}