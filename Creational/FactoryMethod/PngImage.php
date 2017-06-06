<?php

namespace DP\Creational\FactoryMethod;

class PngImage implements ImageInterface
{
    /**
     *
     * @var int 
     */
    private $length;
    
    /**
     *
     * @var int 
     */
    private $width;
    
    /**
     *
     * @var int [][] 
     */
    private $transparent = [];

    /**
     * 
     * @param int $length
     * @param int $width
     */
    public function setArea(int $length, int $width) 
    {
        $this->length = $length;
        $this->width = $width;
    }
    
    /**
     * 
     * @param int $_x
     * @param int $_y
     */
    public function addTransparent(int $_x, int $_y) {
        $this->transparent [] = [$_x, $_y];
    }
}
