<?php

namespace DP\Creational\Pool\test;

use DP\Creational\Pool\Job;
use DP\Creational\Pool\JobPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase{
    
    public function testPool() {
        $pool = new JobPool();
        $job1 = new Job();
        $job2 = new Job();
        $pool->addJob($job1);
        $pool->addJob($job2); 
        
        $this->assertNotSame($job2, $job1);
        
        $job3 = $pool->get($job1->getId());    
        $job4 = $pool->get($job1->getId()); 
        
        $this->assertSame($job3, $job4);
    }
}
