<?php

namespace DP\Creational\Singleton;

class Singleton {
    
    private static $instance = null;

    /**
     * la fonction __construct est privée
     * pour ne pas autorier l'instanciation avec code externe.
     */
    private function __construct()
    {
        // Ici on mettra le code .
    }

    /**
     * seule la fonction statique getInstance qui retourne la seule instance
     * @return Singleton
     */
    public static function getInstance()
    {
          if (self::$instance == null)
          {
            self::$instance = new self();
          }

          return self::$instance;
    }
}
