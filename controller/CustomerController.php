<?php

namespace Controller;

use Model\Customer;
use Model\CustomerDB;
use Model\DBConnection;

class CustomerController
{

    public $customerDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=sql113.ihostfull.com;dbname=uoolo_27654846_manager", "uoolo_27654846", "Tranquangdai1*");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $name = $_POST['name'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            $phoneNumber = $_POST['phoneNumber'];
            $scrore = $_POST['score'];
            $customer = new Customer($name, $age, $email, $address, $phoneNumber, $scrore);
            $this->customerDB->create($customer);
            $message = 'đã thêm khách hàng thành công';
            include 'view/add.php';
        }
    }

    public function index()
    {
        $customers = $this->customerDB->getAll();
        include 'view/list.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->customerDB->delete($id);
            header('Location: admin.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $customer = new Customer(
                $_POST['name'],
                $_POST['age'],
                $_POST['email'],
                $_POST['address'],
                $_POST['phoneNumber'],
                $_POST['score']
            );
            $this->customerDB->update($id, $customer);
            header('Location: admin.php');
        }
    }
    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $search = $_POST['search'];
            $customers = $this->customerDB->search($search);
            include 'view/search.php';
        } else header('Location: admin.php');
    }

    public function sortScore()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $customers = $this->customerDB->sortScore();
            include 'view/list.php';
        }
    }

    public function sortScoreDESC()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $customers = $this->customerDB->sortScoreDESC();
            include 'view/list.php';
        }
    }

    public function sortName()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $customers = $this->customerDB->sortName();
            include 'view/list.php';
        }
    }

    public function sortNameDESC()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $customers = $this->customerDB->sortNameDESC();
            include 'view/list.php';
        }
    }

    public function topCustomer()
    {
        $customers = $this->customerDB->topCustomer();
        include 'view/topCustomer.php';
    }
}
