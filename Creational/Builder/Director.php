<?php

namespace DP\Creational\Builder;

class Director {
    
    public function build(BuilderInterface $builer) : Image
    {
        $builer->createImage();
        $builer->addLine();
        $builer->addCircle();
        $builer->addRectangle();
        
        return $builer->getImage();
    }
}
