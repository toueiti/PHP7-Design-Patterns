<?php

namespace DP\Creational\StaticFactory\Test;

use DP\Creational\StaticFactory\StaticFactory;
use DP\Creational\StaticFactory\RgbColor;
use DP\Creational\StaticFactory\HexColor;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase {
    
    public function testRgbColorFactory() {
        $color = StaticFactory::factory('rgb');
        $this->assertInstanceOf(RgbColor::class, $color);        
    }
    
    public function testHexColorFactory() {
        $color = StaticFactory::factory('hex');
        $this->assertInstanceOf(HexColor::class, $color);        
    }
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsExceptionWhenTryingToGetInvalidKey()
    {
        $color = StaticFactory::factory('color');
    }
}
