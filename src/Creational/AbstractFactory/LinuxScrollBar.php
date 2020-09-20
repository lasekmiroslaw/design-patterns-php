<?php


namespace App\Creational\AbstractFactory;


class LinuxScrollBar implements ScrollBar
{
    public function scroll(int $height): int
    {
        return $height;
    }
}