<?php

namespace DP\Creational\Multiton\Tests;

use DP\Creational\Multiton\Multiton;
use PHPUnit\Framework\TestCase;

class MultitonTest extends TestCase{
    public function testUniqueInstance() {
        $multiton1 = Multiton::getInstance('FirstKey');
        $multiton2 = Multiton::getInstance('FirstKey');
        $this->assertInstanceOf(Multiton::class, $multiton1);
        $this->assertInstanceOf(Multiton::class, $multiton2);
        $this->assertSame($multiton2, $multiton1);
    }
    
    public function testNotUniqueInstance() {
        $multiton1 = Multiton::getInstance('FirstKey');
        $multiton2 = Multiton::getInstance('SecondKey');
        $this->assertInstanceOf(Multiton::class, $multiton1);
        $this->assertInstanceOf(Multiton::class, $multiton2);
        $this->assertNotSame($multiton2, $multiton1);
    }
}
