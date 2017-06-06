<?php
namespace DP\Creational\FactoryMethod;

abstract class FactoryMethod {
    
    abstract protected function createImage() : ImageInterface;
    
    public function create() {
        $image = $this->createImage();
        $image->setArea(250, 400);
        
        return $image;
    }
}
