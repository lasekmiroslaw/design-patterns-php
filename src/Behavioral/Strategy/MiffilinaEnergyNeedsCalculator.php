<?php


namespace App\Behavioral\Strategy;


class MiffilinaEnergyNeedsCalculator implements EnergyNeedsCalculator
{
    private const EXTRA_FACTOR = 5;
    private const WEIGHT_FACTOR = 10;
    private const HEIGHT_FACTOR = 6.25;
    private const AGE_FACTOR = 5;

    public function calculate(BodyMeasurement $body): EnergyNeeds
    {
        $calories = (int) (self::EXTRA_FACTOR + (self::WEIGHT_FACTOR * $body->getWeight()) + (self::HEIGHT_FACTOR * $body->getHeight()) - (self::AGE_FACTOR * $body->getAge()));

        return EnergyNeeds::fromCalories($calories);
    }
}