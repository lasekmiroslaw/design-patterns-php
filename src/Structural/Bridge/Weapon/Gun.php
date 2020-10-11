<?php


namespace App\Structural\Bridge\Weapon;


use App\Structural\Bridge\AbstractFighter;
use App\Structural\Bridge\WeaponInterface;

class Gun implements WeaponInterface
{
    public function attack(AbstractFighter $opponent): string
    {
        return sprintf(
            "Attacking %s with a gun!",
            $opponent->getName()
        );
    }
}