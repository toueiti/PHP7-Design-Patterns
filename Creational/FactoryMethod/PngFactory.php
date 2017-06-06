<?php

namespace DP\Creational\FactoryMethod;

class PngFactory extends FactoryMethod
{
    /**
     * 
     * @return \DP\Creational\FactoryMethod\ImageInterface
     */
    protected function createImage() : ImageInterface
    {
        $image = new PngImage();
        return $image;        
    }
}
