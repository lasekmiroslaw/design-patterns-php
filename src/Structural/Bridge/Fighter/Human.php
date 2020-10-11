<?php


namespace App\Structural\Bridge\Fighter;


use App\Structural\Bridge\AbstractFighter;
use App\Structural\Bridge\WeaponInterface;

class Human extends AbstractFighter
{
    public function __construct(string $name, WeaponInterface $weapon)
    {
        parent::__construct($name, $weapon);
        $this->force = 100.0;
    }

    public function move(): string
    {
        return 'Running...';
    }
}