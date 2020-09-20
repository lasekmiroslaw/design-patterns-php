<?php


namespace App\Creational\AbstractFactory;


interface WidgetFactory
{
    public function createWindow(): Window;
    public function createScrollBar(): ScrollBar;
}