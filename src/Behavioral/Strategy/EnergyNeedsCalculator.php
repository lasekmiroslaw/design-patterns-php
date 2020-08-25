<?php


namespace App\Behavioral\Strategy;


interface EnergyNeedsCalculator
{
    public function calculate(BodyMeasurement $bodyMeasurement): EnergyNeeds;
}