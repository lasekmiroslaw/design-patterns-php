<?php


namespace App\Behavioral\Strategy;


class BodyMeasurement
{
    private float $weight;
    private float $height;
    private int $age;

    public function __construct(float $weight, float $height, int $age)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->age = $age;
    }

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}