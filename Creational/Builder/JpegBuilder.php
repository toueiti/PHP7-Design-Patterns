<?php

namespace DP\Creational\Builder;

class JpegBuilder implements BuilderInterface{
    
    /**
     *
     * @var JpegImage 
     */
    private $jpegimage;
    
    public function createImage()
    {
        $this->jpegimage = new JpegImage();
    }
    
    public function addLine()
    {
        $this->jpegimage->addShape(new Shapes\Line());
    }
    
    public function addCircle() 
    {
        $this->jpegimage->addShape(new Shapes\Circle());
    }
    
    public function addRectangle()
    {
        $this->jpegimage->addShape(new Shapes\Rectangle());
    }
    
    public function getImage() : Image
    {
        return $this->jpegimage;
    }
}
