<?php

namespace Model;

class Customer
{
    public $name;
    public $age;
    public $email;
    public $address;
    public $phoneNumber;
    public $score;

    public function __construct($name,$age, $email, $address, $phoneNumber, $score)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->address = $address;
        $this->phoneNumber = $phoneNumber;
        $this->score = $score;
    }
}