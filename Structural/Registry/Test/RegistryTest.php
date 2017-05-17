<?php

namespace DP\Structural\Registry\Test;

use DP\Structural\Registry\Registry;
use PHPUnit\Framework\TestCase;

class RegistryTest extends  TestCase{
    
    public function testRegistry() {
        $obj = new \stdClass();
        Registry::set('OBJ', $obj);
        $this->assertSame(Registry::get('OBJ'), $obj);              
    }
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsExceptionWhenTryingToGetInvalidKey()
    {
        Registry::get('NOKEY');
    }

}
