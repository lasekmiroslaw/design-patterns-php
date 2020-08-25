<?php


namespace App\Behavioral\Strategy;


class EnergyNeeds
{
    public const KCAL_UNIT = 'kcal';

    private int $calories;

    private function __construct()
    {
    }

    public static function fromCalories(int $calories): self
    {
        $self = new self();
        $self->calories = $calories;

        return $self;
    }

    public function getKcal(): string
    {
        return $this->calories . self::KCAL_UNIT;
    }
}