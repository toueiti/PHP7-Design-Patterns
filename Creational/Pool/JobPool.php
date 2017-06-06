<?php

namespace DP\Creational\Pool;

class JobPool {
    
    /**
     *
     * @var object[]
     */
    private $jobs = [];
    
    /**
     * 
     * @param \DP\Creational\Pool\Job $job
     */
    public function addJob(Job $job)
    {
        $this->jobs [$job->getId()] = $job;
    }
    
    /**
     * 
     * @param type $id
     * @return \DP\Creational\Pool\Job
     * @throws \InvalidArgumentException
     */
    public function get($id) : Job
    {
        if(!array_key_exists($id, $this->jobs)){
            throw new \InvalidArgumentException('Invalid id given');
        }
        return $this->jobs [$id];
    }
    
    /**
     * 
     * @return int
     */
    public function count() : int
    {
        return count($this->jobs);
    }
}
