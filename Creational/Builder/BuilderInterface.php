<?php

namespace DP\Creational\Builder;

interface BuilderInterface {
    
    public function createImage();
    
    public function addLine();
    
    public function addCircle() ;
    
    public function addRectangle();
    
    public function getImage() : Image;
}
