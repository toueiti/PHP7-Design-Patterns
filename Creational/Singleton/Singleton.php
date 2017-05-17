<?php

namespace DP\Creational\Singleton;

class Singleton {
    
    private static $instance = null;
    private $id;

    /**
     * la fonction __construct est privée
     * pour ne pas autorier l'instanciation avec code externe.
     */
    private function __construct()
    {
        $this->id = uniqid();
    }

    /**
     * seule la fonction statique getInstance qui retourne la seule instance
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
          if (self::$instance == null)
          {
            self::$instance = new self();
          }

          return self::$instance;
    }
    
    /**
     * un identifiant pour le test
     * @return integer
     */
    public function getId() {
        return $this->id;
    }
    
    /**
     * Clonage interdit
     */
    private function __clone (){
        
    }
}