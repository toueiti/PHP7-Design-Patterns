<?php

namespace DP\Behavioral\Observer\Test;

use DP\Behavioral\Observer\Security;
use DP\Behavioral\Observer\LogObserver;
use DP\Behavioral\Observer\LoggingObserver;
use PHPUnit\Framework\TestCase;

class ObserverTest extends TestCase{
    
    public function testObserver()
    {
        $security = new Security();
        $log = new LogObserver();
        $logging = new LoggingObserver();
        $security->attach($log);
        $security->attach($logging);
        
        $security->check('username1', 'pass1', '127.0.0.1');        
        $this->assertCount(0, $log->getLog());
        $this->assertContains('username1', $logging->getUsers());
        
        $security->check('username2', 'pass2', '92.193.22.11');        
        $this->assertCount(1, $log->getLog());
    }    
}
