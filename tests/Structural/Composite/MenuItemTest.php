<?php

namespace App\Tests\Structural\Composite;

use App\Structural\Composite\CompositeItem;
use App\Structural\Composite\SingleItem;
use PHPUnit\Framework\TestCase;

class MenuItemTest extends TestCase
{
    public function testCanCreateMenu()
    {
        $leaf1 = new SingleItem('leaf1');
        $leaf2 = new SingleItem('leaf2');
        $compositeItem = new CompositeItem('composite');

        $compositeItem->addItem($leaf1);
        $compositeItem->addItem($leaf2);

        $this->assertEquals('<a>composite</a><ul><a>leaf1</a><a>leaf2</a></ul>', $compositeItem->render());
    }
}
