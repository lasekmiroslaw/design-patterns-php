<?php


namespace App\Creational\AbstractFactory;


class MacScrollBar implements ScrollBar
{
    private const SCROLL_FACTOR = 3;

    public function scroll(int $height): int
    {
        return $height + self::SCROLL_FACTOR;
    }
}