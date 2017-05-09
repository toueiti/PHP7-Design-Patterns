<?php

namespace DP\Creational\Registry\Test;

use DP\Creational\Registry\Registry;
use PHPUnit\Framework\TestCase;
/**
 * class of RegistryTest
 *
 */
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
