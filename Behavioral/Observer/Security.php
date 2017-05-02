<?php


namespace DP\Behavioral\Observer;

/**
 * Cette classe permet de vérifier si l'user peut se connecté
 *
 */
class Security implements \SplSubject {
    
    const UNKNOWN_USER = 1;
    const INCORRECT_PWD = 2;
    const UNAUTHORIZED = 3;
    const ALLOW = 4;
    private $ips = ['127.0.0.1', '10.0.0.1', '172.16.1.1', '192.168.1.1'];
    
    private $users = array( // on peut remplacer cette tableau par une table users dans la BD
        'username1'=>array(
            'password'=>'pass1'
        ),
        'username2'=>array(
            'password'=>'pass2'
        )
    );
    
    private $storage;
    private $status = [];
            
    function __construct() {
        $this->storage = new \SplObjectStorage();
    }
    
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * 
     * @param string $username
     * @param string $password
     * @param string $ip
     * @return $this
     */
    public function check($username, $password, $ip)
    {
        if(!in_array($ip, $this->ips)){
            $this->status = [self::UNAUTHORIZED, $username, $ip];
        }
 
        elseif(!key_exists($username, $this->users)){
            $this->status = [self::UNKNOWN_USER, $username, $ip];
        }
        
        elseif($this->users[$username]['password'] != $password){
            $this->status = [self::INCORRECT_PWD, $username, $ip];
        }
        
        else {
            $this->status = [self::ALLOW, $username, $ip];
        }
        $this->notify();
        return $this;
    }
    
    function attach( \SplObserver $observer ) {
        $this->storage->attach( $observer );
    }
 
    function detach( \SplObserver $observer ) {
        $this->storage->detach( $observer );
    }
 
    function notify() {
 
        foreach ( $this->storage as $observer ) {
            $observer->update( $this );
        }
 
    }
}
