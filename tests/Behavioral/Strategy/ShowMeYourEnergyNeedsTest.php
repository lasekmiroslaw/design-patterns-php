<?php

namespace App\Tests\Behavioral\Strategy;

use App\Behavioral\Strategy\BodyMeasurement;
use App\Behavioral\Strategy\HarrisEnergyNeedsCalculator;
use App\Behavioral\Strategy\MiffilinaEnergyNeedsCalculator;
use App\Behavioral\Strategy\ShowMeYourEnergyNeeds;
use PHPUnit\Framework\TestCase;

class ShowMeYourEnergyNeedsTest extends TestCase
{
    public function testKcalNeeds()
    {
        $bodyMeasurement = new BodyMeasurement(75, 182, 29);

        $harisMethodCalculated = new ShowMeYourEnergyNeeds(new HarrisEnergyNeedsCalculator());
        $miffilinaCalculated = new ShowMeYourEnergyNeeds(new MiffilinaEnergyNeedsCalculator());

        $this->assertEquals('1517kcal', $harisMethodCalculated->getKcalNeeds($bodyMeasurement));
        $this->assertEquals('1747kcal', $miffilinaCalculated->getKcalNeeds($bodyMeasurement));
    }
}
