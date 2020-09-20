<?php


namespace App\Creational\AbstractFactory;


class MacWindow implements Window
{
    private const WIDTH = 15;
    private const HEIGHT = 10;

    public function getSize(): WindowSize
    {
        return new WindowSize(self::WIDTH, self::HEIGHT);
    }
}