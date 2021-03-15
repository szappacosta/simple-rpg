<?php

namespace App\Tests\Integration\Fight;

use App\Entity\Character;
use App\Fight\FightSimulator;
use PHPUnit\Framework\TestCase;

class FightSimulatorTest extends TestCase
{
    private ?FightSimulator $fightSimulator = null;

    protected function setUp(): void
    {
        parent::setUp();
        $this->fightSimulator = new FightSimulator();
    }

    protected function tearDown(): void
    {
        $this->fightSimulator = null;
        parent::tearDown();
    }

    public function testDraw(): void
    {
        $character1 = new Character(100, 10);
        $character2 = new Character(100, 10);
        $fightResult = $this->fightSimulator->simulate($character1, $character2);
        $this->assertTrue($fightResult->isDraw());
    }

    public function testFirstWinner(): void
    {
        $character1 = new Character(100, 10);
        $character2 = new Character(20, 10);
        $fightResult = $this->fightSimulator->simulate($character1, $character2);
        $this->assertFalse($fightResult->isDraw());
        $this->assertSame($character1, $fightResult->winner);
    }

    public function testSecondWinner(): void
    {
        $character2 = new Character(100, 10);
        $character1 = new Character(20, 10);
        $fightResult = $this->fightSimulator->simulate($character1, $character2);
        $this->assertFalse($fightResult->isDraw());
        $this->assertSame($character2, $fightResult->winner);
    }
}
