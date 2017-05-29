<?php

namespace DP\Creational\Builder;
use DP\Creational\Builder\Shapes\Shape;

abstract class Image {
    
    /**
     * @var object[]
     */
    private $shapes = [];
    
    /**
     * 
     * @param Shape $shape
     */
    public function addShape(Shape $shape)
    {
        $this->shapes [] = $shape;
    }
}
