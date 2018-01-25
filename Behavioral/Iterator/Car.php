<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 23/01/2018
 * Time: 12:15
 */

namespace DP\Behavioral\Iterator;


class Car
{
    /**
     * @var string
     */
    protected $number;

    /**
     * @var string
     */
    private $color;

    /**
     * Car constructor.
     * @param string $number
     * @param string $color
     */
    public function __construct(string $number, string $color)
    {
        $this->number = $number;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}