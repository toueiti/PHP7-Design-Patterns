<?php

namespace DP\Behavioral\Observer;

class Product implements \SplSubject {    
    /**
     *
     * @var string 
     */
    private $name;
    
    /**
     * @var \SplObjectStorage
     */
    private $observers;
    
    public function __construct($name) {
        $this->observers = new \SplObjectStorage();
        $this->name = $name;
    }
    
    /**
     * 
     * @param string $name
     */
    public function updateName($name) {
        $this->name = $name;
        $this->notify();
    }
    
    /**
     * 
     * @param \SplObserver $observer
     */
    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }
    
    /**
     * 
     * @param \SplObserver $observer
     */
    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
