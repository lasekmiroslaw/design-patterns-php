<?php


namespace App\Creational\AbstractFactory;


class LinuxWidgetFactory implements WidgetFactory
{
    public function createWindow(): Window
    {
        return new LinuxWindow();
    }

    public function createScrollBar(): ScrollBar
    {
        return new LinuxScrollBar();
    }
}