<?php

namespace DP\Creational\AbstractFactory;

/**
 * Description of WorkshopFactory
 */
class WorkshopFactory extends AbstractFactory{
    
    public function createCourse(string $title, string $description) : Course {
        return new WorkshopCourse($title, $description);
    }
}
