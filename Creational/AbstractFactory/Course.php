<?php

namespace DP\Creational\AbstractFactory;

/**
 * class of Immovable
 */
abstract class Course {
    
    // params
    private $title;
    private $description;
    
    public function __construct(string $title, string $description){
        $this->title = $title;
        $this->description = $description;
    }
}
