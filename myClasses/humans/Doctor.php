<?php
namespace myClasses\humans;

class Doctor
{
    protected $doctor_name;

    public function __construct($doctor_name="")
    {
        $this->doctor_name=$doctor_name;
    }
    public function get_doctorname()
    {
        return $this->doctor_name;
    }
}