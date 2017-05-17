<?php

namespace DP\Creational\Prototype;

class CloudBookPrototype  extends BookPrototype {
    
    public function __construct() {
        $this->subject = 'Cloud compution';
    }
    
    public function __clone() {
        
    }
}
