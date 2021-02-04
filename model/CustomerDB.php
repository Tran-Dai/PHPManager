<?php

namespace Model;

class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer)
    {
        $sql = "INSERT INTO customer(name, age, email, address, phoneNumber, score) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->age);
        $statement->bindParam(3, $customer->email);
        $statement->bindParam(4, $customer->address);
        $statement->bindParam(5, $customer->phoneNumber);
        $statement->bindParam(6, $customer->score);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM customer";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['age'], $row['email'], $row['address'], $row['phoneNumber'], $row['score']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }

    public function get($id){
        $sql = "SELECT * FROM customer WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $customer = new Customer($row['name'], $row['age'], $row['email'], $row['address'], $row['phoneNumber'], $row['score']);
        $customer->id = $row['id'];
        return $customer;
    }


    public function delete($id){
        $sql = "DELETE FROM customer WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $customer)
    {
        $sql = "UPDATE customer SET name = ?, age = ?, email = ?, address = ?, phoneNumber = ?, score = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->age);
        $statement->bindParam(3, $customer->email);
        $statement->bindParam(4, $customer->address);
        $statement->bindParam(5, $customer->phoneNumber);
        $statement->bindParam(6, $customer->score);
        $statement->bindParam(7, $id);
        return $statement->execute();
    }

    public function search($search){
        $sql = "select * from customer where name like '%$search%' or age like '%$search%' or address like '%$search%' or email like '%$search%' or phoneNumber like '%$search%' or score like '%$search%' ";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['age'], $row['email'], $row['address'], $row['phoneNumber'], $row['score']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }

    public function topCustomer(){
        $sql = "select * from customer where score > 50;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['age'], $row['email'], $row['address'], $row['phoneNumber'], $row['score']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }

    public function sortScore(){
        $sql = "SELECT * FROM customer ORDER BY score;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['age'], $row['email'], $row['address'], $row['phoneNumber'], $row['score']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }
    
    public function sortScoreDESC(){
        $sql = "SELECT * FROM customer ORDER BY score DESC;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['age'], $row['email'], $row['address'], $row['phoneNumber'], $row['score']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }

    public function sortName(){
        $sql = "SELECT * FROM customer ORDER BY name;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['age'], $row['email'], $row['address'], $row['phoneNumber'], $row['score']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }

    public function sortNameDESC(){
        $sql = "SELECT * FROM customer ORDER BY name DESC;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['age'], $row['email'], $row['address'], $row['phoneNumber'], $row['score']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }
}