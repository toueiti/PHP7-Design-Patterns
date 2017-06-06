<?php

namespace DP\Creational\FactoryMethod;

class JpegFactory extends FactoryMethod
{
    
    protected function createImage() : ImageInterface
    {
        $image = new JpegImage();
        return $image;        
    }
}
