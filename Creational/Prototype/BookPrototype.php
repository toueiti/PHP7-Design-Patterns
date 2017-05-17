<?php

namespace DP\Creational\Prototype;

abstract class BookPrototype {
    
    protected $title;
    protected $subject;
    
    function getTitle() {
        return $this->title;
    }
    
    function setTitle($title) {
        $this->title = $title;
    }
    
    function getSubject() {
        return $this->subject;
    }
    
    abstract function __clone();
}
