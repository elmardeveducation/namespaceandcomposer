<?php

namespace myClasses\actions;

class Drive
{
    protected $can_drive=false;

    public function __construct($can_drive=false)
    {
        $this->can_drive=$can_drive;
    }
    public function __toString()
    {
        return $this->can_drive ? "Yes, can drive" : "No, can not drive!";
    }
}