<?php

namespace DP\Creational\Multiton;

/**
 * class of Multiton
 *
 */
class Multiton {
    
    /**
     * Utilisé pour stocker et fournir des instances pour la méthode getInstance ()
     */ 
    private static $instances = array();
    
    /**
     * get instance
     * @param $key the key which the instance should be stored/retrieved
     * @return self
     */
    public static function getInstance($key) : Multiton {
        if(!array_key_exists($key, self::$instances)) {
            self::$instances[$key] = new self();
        } 
        
        return self::$instances[$key];
    }
 
    /**
     * Clonage interdit
     */
    private function __clone (){
        
    }
}
