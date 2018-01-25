<?php

namespace DP\Behavioral\Iterator\Test;
use DP\Behavioral\Iterator\Car;
use DP\Behavioral\Iterator\CarList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testIteratorList()
    {
        $carList = new CarList();
        $carList->addCar(new Car('000001', 'white'));
        $carList->addCar(new Car('000002', 'black'));
        $carList->addCar(new Car('000003', 'red'));
    }
}