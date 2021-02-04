<?php

namespace Controller;

use Model\Account;
use Model\AccountDB;
use Model\DBConnection;

session_start();

class AccountController
{
    public $AccountDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=sql113.ihostfull.com;dbname=uoolo_27654846_manager", "uoolo_27654846", "Tranquangdai1*");
        $this->AccountDB = new AccountDB($connection->connect());
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/login.php';
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $checkLogin = $this->AccountDB->checkAccount($username, $password);
            if ($checkLogin) {
                $_SESSION["username"] = $username;
                header('Location: admin.php');
            } else {
                include 'view/login.php';
                echo '<script language="javascript">';
                echo 'alert("tài khoản/ mật khẩu không chính xác")';
                echo '</script>';
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['username']);
        echo '<script language="javascript">';
        echo 'alert("đã đăng xuất")';
        echo '</script>';
        include 'view/login.php';
    }

    public function forgot()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/forgot.php';
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $checkForgot = $this->AccountDB->forgot($username, $password);
            if ($checkForgot) {
                include 'view/login.php';
                echo '<script language="javascript">';
                echo 'alert("đặt mật khẩu mới thành công")';
                echo '</script>';
            } else {
                include 'view/forgot.php';
                echo '<script language="javascript">';
                echo 'alert("không tìm thấy tài khoản")';
                echo '</script>';
            }
        }
    }

    public function signup()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/signup.php';
        } else {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $fullname = $_POST['fullname'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $checkSignup = $this->AccountDB->signup($username, $password, $fullname, $age, $address);
            if ($checkSignup) {
                include 'view/login.php';
                echo '<script language="javascript">';
                echo 'alert("đăng kí thành công")';
                echo '</script>';
            } else {
                include 'view/signup.php';
                echo '<script language="javascript">';
                echo 'alert("tài khoản đã tồn tại")';
                echo '</script>';
            }
        }
    }
}
