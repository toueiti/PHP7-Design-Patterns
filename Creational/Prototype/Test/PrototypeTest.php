<?php

namespace DP\Structural\Prototype\Test;

use DP\Structural\Prototype\BookPrototype;
use DP\Creational\Prototype\CloudBookPrototype;
use DP\Creational\Prototype\BigDataBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase{
    public function testPrototype(){
        $cloudProto = new CloudBookPrototype();
        $book = clone $cloudProto;
        $book->setTitle('Cloud computing IaaS');
        $this->assertInstanceOf(CloudBookPrototype::class, $book);
        
        $bigdataProto = new BigDataBookPrototype();
        $book = clone $bigdataProto;
        $book->setTitle('Cloud computing IaaS');
        $this->assertInstanceOf(BigDataBookPrototype::class, $book);
    }
}
