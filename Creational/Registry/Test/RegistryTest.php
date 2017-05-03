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
        Registry::set('obj', $obj);
        $this->assertSame(Registry::get('obj'), $obj);              
    }
    
    /**
     * @expectedException \InvalidArgumentException
     */
    public function testThrowsExceptionWhenTryingToGetInvalidKey()
    {
        Registry::get('nokey');
    }

}
