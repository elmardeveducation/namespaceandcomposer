<?php


class Walk
{
    protected $can_walk=false;

    public function __construct($can_walk=false)
    {
        $this->can_walk=$can_walk;
    }
    public function __toString()
    {
    return $this->can_walk ? "Yes, can walk" : "No, can not walk!";
    }
}