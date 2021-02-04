<?php

namespace Model;

class Account
{
    public $usename;
    public $password;
    public $fullName;
    public $age;
    public $address;

    public function __construct($usename,$password, $fullName, $age, $address){
        $this->usename = $usename;
        $this->password = $password;
        $this->fullName = $fullName;
        $this->age = $age;
        $this->address = $address;
    }

}