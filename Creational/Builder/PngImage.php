<?php

namespace DP\Creational\Builder;

class PngImage extends Image
{
    /**
     *
     * @var boolean transparent
     */
    private $transparent = true;
    
    public function setTransparent($value) {
        $this->transparent = $value;
    }
}
