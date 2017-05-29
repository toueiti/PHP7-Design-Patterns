<?php

namespace DP\Creational\Builder;

class PngBuilder implements BuilderInterface {
    
    /**
     *
     * @var PngImage 
     */
    private $pngimage;
    
    public function createImage()
    {
        $this->pngimage = new PngImage();
        $this->pngimage->setTransparent(TRUE);
    }
    
    public function addLine()
    {
        $this->pngimage->addShape(new Shapes\Line());
    }
    
    public function addCircle() 
    {
        $this->pngimage->addShape(new Shapes\Circle());
    }
    
    public function addRectangle()
    {
        $this->pngimage->addShape(new Shapes\Rectangle());
    }
    
    public function getImage() : Image
    {
        return $this->pngimage;
    }
}
