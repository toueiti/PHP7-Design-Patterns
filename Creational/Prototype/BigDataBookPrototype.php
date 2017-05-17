<?php

namespace DP\Creational\Prototype;


class BigDataBookPrototype extends BookPrototype {
    
    public function __construct() {
        $this->subject = 'Big Data';
    }
    
    public function __clone() {
        
    }
}
