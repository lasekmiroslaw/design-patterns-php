<?php

namespace App\Tests\Structural\Decorator;

use App\Structural\Decorator\CourierShipment;
use App\Structural\Decorator\Insurance;
use App\Structural\Decorator\SmsService;
use PHPUnit\Framework\TestCase;

class ShipmentDecoratorTest extends TestCase
{
    public function testGetPriceForCourierShipment()
    {
        $shipment = new CourierShipment();

        $this->assertEquals(100, $shipment->getPrice());
    }

    public function testGetPriceForCourierShipmentWithInsurance()
    {
        $shipment = new CourierShipment();
        $decoratedShipment = new Insurance($shipment);

        $this->assertEquals(120, $decoratedShipment->getPrice());
    }

    public function testGetPriceForCourierShipmentWithSmsService()
    {
        $shipment = new CourierShipment();
        $decoratedShipment = new SmsService($shipment);

        $this->assertEquals(105, $decoratedShipment->getPrice());
    }

    public function testGetPriceForCourierShipmenWithInsuranceAnd()
    {
        $shipment = new CourierShipment();
        $decoratedShipment = new SmsService(new Insurance($shipment));

        $this->assertEquals(125, $decoratedShipment->getPrice());
    }
}
