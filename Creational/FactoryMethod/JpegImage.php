<?php

namespace DP\Creational\FactoryMethod;

class JpegImage implements ImageInterface
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
     * @param int $length
     * @param int $width
     */
    public function setArea(int $length, int $width) 
    {
        $this->length = $length;
        $this->width = $width;
    }
}
