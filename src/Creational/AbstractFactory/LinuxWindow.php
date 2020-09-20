<?php


namespace App\Creational\AbstractFactory;


class LinuxWindow implements Window
{
    private const WIDTH = 20;
    private const HEIGHT = 15;

    public function getSize(): WindowSize
    {
        return new WindowSize(self::WIDTH, self::HEIGHT);
    }
}