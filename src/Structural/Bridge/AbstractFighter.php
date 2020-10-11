<?php


namespace App\Structural\Bridge;


abstract class AbstractFighter
{
    protected float $life = 100.0;

    protected float $force = 50.0;

    private string $name;

    private WeaponInterface $weapon;

    public function __construct(string $name, WeaponInterface $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
    }

    public function attack(AbstractFighter $opponent): string
    {
        return $this->weapon->attack($opponent);
    }

    abstract public function move(): string;

    public function getName(): string
    {
        return $this->name;
    }
}