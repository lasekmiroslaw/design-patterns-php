<?php


namespace App\Structural\Decorator;


class SmsService extends ShipmentDecorator
{
    private const PRICE = 5;

    public function getPrice(): int
    {
        return $this->shipment->getPrice() + self::PRICE;
    }
}