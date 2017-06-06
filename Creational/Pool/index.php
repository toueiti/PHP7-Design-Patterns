<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require '../../vendor/autoload.php';

$pool = new \DP\Creational\Pool\JobPool();
$job1 = new \DP\Creational\Pool\Job();
$job2 = new \DP\Creational\Pool\Job();
$pool->addJob($job1);
$pool->addJob($job2);

//$this->assertNotSame($job2, $job1);

$job3 = $pool->getJob($job1->getId());

echo $job1->getId().'<br>';
echo $job3->getId().'<br>';

$bool = $job1 == $job3;
echo $bool;


//$this->assertSame($job3, $job1);

