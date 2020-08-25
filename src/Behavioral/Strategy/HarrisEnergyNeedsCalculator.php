<?php


namespace App\Behavioral\Strategy;


class HarrisEnergyNeedsCalculator implements EnergyNeedsCalculator
{
    private const EXTRA_FACTOR = 66.47;
    private const WEIGHT_FACTOR = 13.7;
    private const HEIGHT_FACTOR = 5;
    private const AGE_FACTOR = 16.76;

    public function calculate(BodyMeasurement $body): EnergyNeeds
    {
        $calories = (int) (self::EXTRA_FACTOR + (self::WEIGHT_FACTOR * $body->getWeight()) + (self::HEIGHT_FACTOR * $body->getHeight()) - (self::AGE_FACTOR * $body->getAge()));

        return EnergyNeeds::fromCalories($calories);
    }
}