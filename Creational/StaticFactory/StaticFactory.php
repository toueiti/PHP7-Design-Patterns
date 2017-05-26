<?php

namespace DP\Creational\StaticFactory;

final class StaticFactory {
    
    /**
     * @param string $key 
     * 
     * @return ColorInterface 
     */
    public static function factory(string $key): ColorInterface
    {
        if($key == 'hex'){
            return new HexColor();
        }
        
        if($key == 'rgb'){
            return new RgbColor();
        }
        
        throw new \InvalidArgumentException('Invalid key given');
    }
}
