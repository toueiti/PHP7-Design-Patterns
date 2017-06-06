<?php

namespace DP\Creational\Pool;

class Job {
    /**
     *
     * @var int 
     */
    private $id;
    
    public function __construct() {
        $this->id = uniqid();
    }
    
    public function getId() {
        return $this->id;
    }
}
