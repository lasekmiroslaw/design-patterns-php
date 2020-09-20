<?php

namespace App\Tests\Creational\AbstractFactory;

use App\Creational\AbstractFactory\LinuxScrollBar;
use App\Creational\AbstractFactory\LinuxWidgetFactory;
use App\Creational\AbstractFactory\LinuxWindow;
use App\Creational\AbstractFactory\MacScrollBar;
use App\Creational\AbstractFactory\MacWidgetFactory;
use App\Creational\AbstractFactory\MacWindow;
use PHPUnit\Framework\TestCase;

class WidgetFactoryTest extends TestCase
{
    public function testCreateLinuxWidgets()
    {
        $linuxFactory = new LinuxWidgetFactory();
        $linuxScrollBar = $linuxFactory->createScrollBar();
        $linuxWindow = $linuxFactory->createWindow();

        $this->assertInstanceOf(LinuxScrollBar::class, $linuxScrollBar);
        $this->assertInstanceOf(LinuxWindow::class, $linuxWindow);
    }

    public function testCreateMacWidgets()
    {
        $macFactory = new MacWidgetFactory();
        $macScrollBar = $macFactory->createScrollBar();
        $macWindow = $macFactory->createWindow();

        $this->assertInstanceOf(MacScrollBar::class, $macScrollBar);
        $this->assertInstanceOf(MacWindow::class, $macWindow);
    }
}
