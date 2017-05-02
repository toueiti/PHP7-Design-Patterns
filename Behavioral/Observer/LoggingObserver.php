<?php

namespace DP\Behavioral\Observer;

/**
 * Description of LoggingObserver
 *
 */
class LoggingObserver implements \SplObserver {
    
    private $users = [];
    
    public function update(\SplSubject $subject) {
        $status = $subject->getStatus();
        if($status [0] == 4){
            $this->users [] = $status[1]; //on enregistre l'usernameconnecté
        }
        return $this;
    }
    
    public function getUsers() {
        return $this->users;
    }
}
