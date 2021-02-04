<?php

namespace Model;

class AccountDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function checkAccount($username, $password){
        $sql = "SELECT * FROM admin where username = '$username' and password = '$password'";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $count = $statement->rowCount();
        if($count) return true;
        else return false;
    }

    public function signup($username, $password, $fullname, $age, $address){
        $sql = "INSERT INTO admin VALUE('$username', '$password', '$fullname', $age, '$address')";
        $statement = $this->connection->prepare($sql);
        return $statement->execute();
    }

    public function forgot($username, $password){
        $sql = "SELECT * FROM admin WHERE username = '$username';";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        if($statement->rowCount()){
            $sql = "UPDATE admin SET password = '$password' WHERE username = '$username';";
            $statement = $this->connection->prepare($sql);
            $statement->execute();
            return true;
        }
        else return false;
    }
}