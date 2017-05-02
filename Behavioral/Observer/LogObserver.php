<?php

namespace DP\Behavioral\Observer;

/**
 * cette classe permet d'écrire dans le fichier log toute 
 * tentative de connexion sans succès
 */
class LogObserver implements \SplObserver {
    public $log = array();
    
    public function update(\SplSubject $subject) {
        $row = array();
        $status = $subject->getStatus();
        switch ($status [0])  {
            case 1:
                $row [] = (new \DateTime())->format('d-m-Y H:i:s');
                $row [] = $status [2];
                $row [] = $status[1];
                $row [] = 'Utilisateur inconnu';
                $this->log [] = $row;
                break;
            case 2:
                $row [] = (new \DateTime())->format('d-m-Y H:i:s');
                $row [] = $status [2];
                $row [] = $status[1];
                $row [] = 'Utilisateur inconnu';
                $this->log [] = $row;
                break;
            case 3:
                $row [] = (new \DateTime())->format('d-m-Y H:i:s');
                $row [] = $status [2];
                $row [] = $status[1];
                $row [] = 'Utilisateur inconnu';
                $this->log [] = $row;
                break;  
        }
    }
    
    public function getLog() {
        return $this->log;
    }
}
