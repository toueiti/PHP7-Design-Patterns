<?php

namespace DP\Behavioral\Iterator;


class CarList implements \Countable, \Iterator
{
    /**
     * @var array
     */
    private $cars = array();

    /**
     * @var int
     */
    private $currentIndex = 0;

    /**
     * @param Car $car
     */
    public function addCar(Car $car)
    {
        $this->cars [] = $car;
    }

    /**
     * @param Car $rmvCar
     */
    public function removeCar(Car $rmvCar)
    {
        foreach ($this->cars as $key => $car){
            if($car->getNumber() == $rmvCar->getNumber()){
                unset($this->cars[$key]);
                break;
            }
        }
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->cars);
    }

    /**
     * @return Car
     */
    public function current(): Car
    {
        return$this->cars[$this->currentIndex];
    }

    /**
     *
     */
    public function next()
    {
        $this->currentIndex ++;
    }

    /**
     * @return int
     */
    public function key(): int
    {
        return $this->currentIndex;
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }

    /**
     * @return bool
     */
    public function valid(): bool
    {
        return isset($this->cars[$this->currentIndex]);
    }
}