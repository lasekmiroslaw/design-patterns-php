<?php


namespace App\Tests\Structural\Bridge;


use App\Structural\Bridge\AbstractFighter;
use App\Structural\Bridge\Fighter\Good;
use App\Structural\Bridge\Fighter\Human;
use App\Structural\Bridge\Weapon\Gun;
use App\Structural\Bridge\Weapon\Knife;
use PHPUnit\Framework\TestCase;

class BridgeTest extends TestCase
{
    private AbstractFighter $human;

    private AbstractFighter $god;

    protected function setUp()
    {
        $this->human = new Human(
            'Jet Li',
            new Knife()
        );

        $this->god = new Good(
            'Super Gun Man',
            new Gun()
        );
    }

    public function testHumanAttack()
    {
        $this->assertSame('Attacking Super Gun Man with a knife!', $this->human->attack($this->god));
    }

    public function testGodAttack()
    {
        $this->assertSame('Attacking Jet Li with a gun!', $this->god->attack($this->human));
    }

    public function testHumanMove()
    {
        $this->assertSame('Running...', $this->human->move());
    }

    public function testGodMove()
    {
        $this->assertSame('Moving by teleportation...', $this->god->move());
    }
}