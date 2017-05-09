<?php

namespace DP\Creational\AbstractFactory;

/**
 * classe FactoryAbstract
 *
 */
abstract class AbstractFactory {
    
    abstract public function createCourse(string $title, string $description): Course;
    
}
