<?php

class Dog
{
    protected $dog_name;

    public function __construct($dog_name="")
    {
        $this->dog_name=$dog_name;
    }
    public function get_dogname()
    {
        return $this->dog_name;
    }
}