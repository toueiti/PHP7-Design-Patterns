<?php

namespace DP\Creational\AbstractFactory;

/**
 * Description of TutorialFactory
 */
class TutorialFactory extends AbstractFactory{
    
    public function createCourse(string $title, string $description) : Course {
        return new TutorialCourse($title, $description);
    }
}
