<?php
require "model/DBConnection.php";
require "model/CustomerDB.php";
require "model/Customer.php";
require "controller/CustomerController.php";

use \Controller\CustomerController;

session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
    header('Location: account.php');
}
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới khách hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <style>
        .container-fluid {
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .top-container {
            background-color: #f1f1f1;
            padding: 30px;
            text-align: center;
        }

        .header {
            padding: 10px 16px;
            background: #555;
            color: #f1f1f1;
            z-index: 1;
        }

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #EEEEEE;
        }

        .sticky+.content {
            padding-top: 102px;
        }

        .account {
            width: 20%;
            float: right;
        }

        .nav1 {
            width: 100%;
        }

        .brand {
            text-align: center;
        }

        .footer {
            padding: 50px;
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="top-container" style="background-image: linear-gradient(#F1F1F1, white);">
            <a href="./admin.php"><img src="./image/logoFull.png" alt="logo"></a>
        </div>

        <nav class="header navbar navbar-expand-sm bg-success navbar-dark nav1" id="myHeader">
            <a href="./index.php"><img src="./icon/home.png" style="width: 30px;height: 30px; margin-right:20px"></a>
            <form class="form-inline nav1" action="./admin.php?page=search" method="post">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="bạn muốn tìm gì ? ...">
                <button class="btn btn-info" type="submit">Tìm</button>
            </form>
            <div class="account">
                quản lý: <?php echo $_SESSION["username"]; ?>
                <a href="./account.php?page=logout"><img src="./icon/logout.png" style="width: 30px;height: 30px; float:right"></a>
            </div>
        </nav>

        <div class="content">
            <?php
            $controller = new CustomerController();
            //query parameters
            $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
            switch ($page) {
                case 'add':
                    $controller->add();
                    break;
                case 'delete':
                    $controller->delete();
                    break;
                case 'edit':
                    $controller->edit();
                    break;
                case 'search':
                    $controller->search();
                    break;
                case 'sortScore':
                    $controller->sortScore();
                    break;
                case 'sortScoreDESC':
                    $controller->sortScoreDESC();
                    break;
                case 'sortName':
                    $controller->sortName();
                    break;
                case 'sortNameDESC':
                    $controller->sortNameDESC();
                    break;
                default:
                    $controller->index();
                    break;
            }
            ?>
        </div>
    </div>
</body>
<hr>
<footer>
    <div class="container-fluid footer">
        <div class="contact">
            <p>
                <h4>mọi góp ý gửi về:</h4>
            </p>
            <p>tên: Trần Quang Đại</p>
            <p>số điện thoại: 0353608535</p>
            <p>email: tranquangdai1219@gmail.com</p>
        </div>
        <div class="brand">
            trandaiPTIT
        </div>
    </div>
</footer>
<script>
    window.onscroll = function() {
        myFunction()
    };

    var header = document.getElementById("myHeader");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</html>