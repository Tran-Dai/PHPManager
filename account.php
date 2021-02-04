<?php
require "model/DBConnection.php";
require "model/AccountDB.php";
require "model/Account.php";
require "controller/AccountController.php";

use \Controller\AccountController;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACCOUNT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        html,
        body {
            width: 100%;
            height: 100%;
            display: flex;
            background: linear-gradient(#FF0066, #3300FF);
            background-size: cover;
            background-position: center;
        }

        .container {
            display: flex;
            margin: auto;
            width: 80%;
            height: 450px;
        }

        .login {
            order: 2;
            flex-grow: 1;
            width: 300px;
            background-color: white;
            text-align: center;
        }

        .header h1 {
            margin-top: 30px;
            font-size: 35px;
        }

        .main input,
        button {
            width: 80%;
            height: 35px;
            margin-top: 15px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #014670;
            color: #014670;
            padding-left: 10px;
        }

        .main button {
            padding: 0;
            font-size: 15px;
            background-color: white;
        }

        .main button:hover {
            background-color: #014670;
            color: white;
            transition: 0.2s;
        }

        .main a {
            display: block;
            font-size: 20px;
            text-align: center;
            margin-top: 5px;
            color: #014670;
        }

        .img {
            display: flex;
            order: 1;
            flex-grow: 2;
            background-image: url('./image/login.jpg');
            background-position: center;
            background-size: cover;
            text-align: center;
            color: #014670;
        }

        .img span {
            /* can giua tieu de trong img */
            margin: auto;
        }

        .img span h1 {
            font-size: 40px;
        }

        .img span p {
            font-size: 20px;
            margin-top: 50px;
        }

        .error {
            color: red;
        }

        @media screen and (max-width: 800px) {
            .img {
                display: none;
            }

            .container {
                width: 100%;
            }

            .login {
                background-color: transparent;
            }

            .main a,
            .header h1 {
                color: white;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $controller = new AccountController();
        $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
        switch ($page) {
            case 'forgot':
                $controller->forgot();
                break;
            case 'signup':
                $controller->signup();
                break;
            case 'logout':
                $controller->logout();
                break;
            default:
                $controller->login();
                break;
        }
        ?>
        <div class="img">
            <span>
            </span>
        </div>
    </div>
</body>

</html>