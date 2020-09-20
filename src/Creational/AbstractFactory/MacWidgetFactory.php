<?php


namespace App\Creational\AbstractFactory;


class MacWidgetFactory implements WidgetFactory
{
    public function createWindow(): Window
    {
        return new MacWindow();
    }

    public function createScrollBar(): ScrollBar
    {
        return new MacScrollBar();
    }
}