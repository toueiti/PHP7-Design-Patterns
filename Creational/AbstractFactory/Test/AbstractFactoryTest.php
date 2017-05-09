<?php

namespace DP\Creational\AbstractFactory\Test;

use DP\Creational\AbstractFactory\TutorialFactory;
use DP\Creational\AbstractFactory\WorkshopFactory;
use DP\Creational\AbstractFactory\TutorialCourse;
use DP\Creational\AbstractFactory\WorkshopCourse;
use PHPUnit\Framework\TestCase;
/**
 * Description of AbstractFactoryTest
 */
class AbstractFactoryTest extends TestCase{
    
    public function testCreateTutorial() {
        $factory = new TutorialFactory();
        $course = $factory->createCourse('Protocole TCP/IP', 'Présentation de la suite de protocole tcp/ip');
        $this->assertInstanceOf(TutorialCourse::class, $course);
    }
    
    public function testCreateWorkshop() {
        $factory = new WorkshopFactory();
        $course = $factory->createCourse('Configuration DNS', "Etapes d'installation d'un serveur DNS");
        $this->assertInstanceOf(WorkshopCourse::class, $course);
    }
}
