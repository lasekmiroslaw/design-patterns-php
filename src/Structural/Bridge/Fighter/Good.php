<?php


namespace App\Structural\Bridge\Fighter;


use App\Structural\Bridge\AbstractFighter;
use App\Structural\Bridge\WeaponInterface;

class Good extends AbstractFighter
{
    public function __construct(string $name, WeaponInterface $weapon)
    {
        parent::__construct($name, $weapon);
        $this->force = 250.0;
        $this->life = 1000.0;
    }

    public function move(): string
    {
        return 'Moving by teleportation...';
    }
}