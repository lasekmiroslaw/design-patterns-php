<?php


namespace App\Behavioral\Strategy;


class ShowMeYourEnergyNeeds
{
    private $calculator;

    public function __construct(EnergyNeedsCalculator $calculator)
    {
        $this->calculator = $calculator;
    }

    public function getKcalNeeds(BodyMeasurement $bodyMeasurement): string
    {
        return $this->calculator->calculate($bodyMeasurement)->getKcal();
    }
}