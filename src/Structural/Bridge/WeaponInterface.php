<?php


namespace App\Structural\Bridge;


interface WeaponInterface
{
    public function attack(AbstractFighter $opponent): string;
}