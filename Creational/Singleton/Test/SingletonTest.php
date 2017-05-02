<?php

namespace DP\Creational\Singleton\Tests;

use DP\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase {
    
    public function testUniqueness()
    {
        $instance1 = Singleton::getInstance();
        $instance2 = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class, $instance1);
        $this->assertSame($instance1, $instance2);
        $this->assertEquals($instance2->getId(), $instance1->getId());
    }
}
