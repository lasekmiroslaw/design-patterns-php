<?php


namespace App\Creational\AbstractFactory;


interface ScrollBar
{
    public function scroll(int $height): int;
}