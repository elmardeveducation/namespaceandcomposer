<?php


class Sedan
{
    protected $car_name;

    public function __construct($car_name="")
    {
        $this->dog_name=$car_name;
    }
    public function get_carname()
    {
        return $this->car_name;
    }
}