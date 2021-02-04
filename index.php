<?php
require "model/DBConnection.php";
require "model/CustomerDB.php";
require "model/Customer.php";
require "controller/CustomerController.php";

use \Controller\CustomerController;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>QUẢN LÝ KHÁCH HÀNG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/home.css">
</head>
<style>
    form.example input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: none;
        float: left;
        width: 80%;
        background-image: linear-gradient(to right, #f1f1f1, #2196F3);
    }

    form.example button {
        float: left;
        width: 20%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    form.example button:hover {
        background: #0b7dda;
    }

    form.example::after {
        content: "";
        clear: both;
        display: table;
    }

    .contact {
        position: fixed;
        float: right;
        z-index: 1000;
        bottom: 5%;
        right: 5%;
    }

    .fb a {
        display: block;
        width: 60px;
        height: 60px;
        background: url(./icon/facebook-icon.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        margin-bottom: 10px;
        border-radius: 50%;
    }

    .phone a {
        display: block;
        width: 60px;
        height: 60px;
        background: url(./icon/call-icon.png);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 50%;
    }

    .fb a:hover {
        transform: scale(1.2, 1.2);
        transition: 100ms;
    }

    .phone a:hover {
        transform: scale(1.2, 1.2);
        transition: 100ms;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

    .row.content {
        height: 550px
    }

    /* Set gray background color and 100% height */

    .sidenav {
        background-color: #f1f1f1;
        height: 100%;
    }

    .img-banner {
        width: 100%;
    }

    /* On small screens, set height to 'auto' for the grid */

    @media screen and (max-width: 767px) {
        .row.content {
            height: auto;
        }

        .test {
            margin-top: 50px;
        }
    }

    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

    .special-form {
        font-family: 'Lobster', cursive;
    }

    .navbar-toggle {
        border: none;
    }

    .icon-svg {
        float: left;
    }

    /* search */
</style>

<body>

    <nav class="navbar navbar-inverse visible-xs navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand special-form" href="#"><img src="./image/logoMobile.png" style="width: 120px; height: 35px;"></a>
                <a href="./admin.php"><i class="glyphicon glyphicon-user" style="color: #f1f1f1;font-size: 25px;margin: 12px 10px 0px 0px;float: right;"></i></a>
                <span class="glyphicon glyphicon-search" style="color: #f1f1f1;font-size: 25px;margin: 12px 10px 0px 0px;float: right;"></span>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">TRANG CHỦ</a></li>
                    <li><a a href="#thongTinKhachHang">KHÁCH HÀNG THÂN THIẾT</a></li>
                    <li><a href="#thongKe">THÔNG TIN ƯU ĐÃI</a></li>
                    <li><a href="#lienHe">LIÊN HỆ</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs" style="position: fixed;float: left;z-index: 1000; background-image: url(./image/bgr.jpg); background:#f1f1f1">
                <h2 class="special-form"><img src="./image/logoFull.png" style="width: 250px; height: 70px;"></h2>
                <ul class="nav nav-pills nav-stacked ">
                    <li class="active" id="nav-1"><a href="#">TRANG CHỦ</a></li>
                    <li id="nav-2"><a href="#thongTinKhachHang">KHÁCH HÀNG THÂN THIẾT</a></li>
                    <li id="nav-3"><a href="#thongKe">THÔNG TIN ƯU ĐÃI</a></li>
                    <li id="nav-4"><a href="#lienHe">LIÊN HỆ</a></li>
                    <li class="active" style="position: relative; bottom: -300px;">
                        <a href="./admin.php">QUẢN LÝ<i class="glyphicon glyphicon-user" style="float: right;"></i></a>
                    </li>
                    </li>
                </ul><br>
            </div>
            <br>

            <div class="col-sm-9 test" style="float:right">
                <!-- search -->
                <form class="example navbar-fixed-top hidden-xs" action="/action_page.php" style="width: 75%; margin-left: 25%;">
                    <input type="text" placeholder="Bạn muốn tìm gì..." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
                <div class="body" style="margin-top: 50px;">
                    <!-- trang chu -->
                    <div id="trangChu">
                        <div class="">
                            <!-- Carousel -->
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="./image/banner1.jpg" alt="Los Angeles" class="img-banner">
                                        <div class="carousel-caption">
                                            <h3>KHÁCH HÀNG THÂN THIẾT</h3>
                                            <p>Nghệ sĩ Xuân Bắc</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="./image/banner2.jpg" alt="Chicago" class="img-banner">
                                        <div class="carousel-caption">
                                            <h3>KHÁCH HÀNG THÂN THIẾT</h3>
                                            <p>Ca sĩ Noo Phước Thịnh</p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <img src="./image/banner3.jpg" alt="New York" class="img-banner">
                                        <div class="carousel-caption">
                                            <h3>KHÁCH HÀNG THÂN THIẾT</h3>
                                            <p>Ca sĩ Du Thiên</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-sm-3">
                                <div class="well" style="background-image: url(./image/bgr1.jpg); background-size: cover; color:#f1f1f1;">
                                    <h4>SỐ KHÁCH HÀNG</h4>
                                    <p>1 triệu</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="well" style="background-image: url(./image/bgr2.jpg); background-size: cover; color:#f1f1f1;">
                                    <h4>DOANH THU TUẦN</h4>
                                    <p>1,2 tỉ</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="well" style="background-image: url(./image/bgr3.jpg); background-size: cover; color:#f1f1f1;">
                                    <h4>LỢI NHUẬN TUẦN</h4>
                                    <p>500 triệu</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="well" style="background-image: url(./image/bgr4.jpg); background-size: cover; color:#f1f1f1;">
                                    <h4>DOANH SỐ TĂNG</h4>
                                    <p>5%</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div id="piechart"></div>
                            </div>
                            <div class="col-sm-4" style="height:300px;">
                                <div class="fb-page" data-href="https://www.facebook.com/Mayanhsohanoi-113914840525567" data-tabs="timeline" data-width="300" data-height="600" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                                    <blockquote cite="https://www.facebook.com/Mayanhsohanoi-113914840525567" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Mayanhsohanoi-113914840525567">Mayanhsohanoi</a>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="aboutMe" style="margin-top: 50px;">
                            <div class="row">
                                <div class="col-sm-4" style="border: none;">
                                    <img src="./icon/service1.svg" class="icon-svg" />
                                    <p>
                                        <p>QUY ĐỊNH ĐỔI TRẢ</p>
                                        <p>Chúng tôi sẵn sàng hỗ trợ đổi sản phẩm cho bạn trong vòng 15 ngày trên toàn hệ
                                            thống.
                                        </p>
                                    </p>
                                </div>
                                <div class="col-sm-4" style="border: none;">
                                    <img src="./icon/service2.svg" class="icon-svg" />
                                    <p>
                                        <p>TUYỂN CỘNG TÁC VIÊN</p>
                                        <p>Chúng tôi đang tuyển thêm cộng tác viên ở các chi nhánh Hà Đông và Thanh Xuân với
                                            các
                                            phúc lợi hấp dẫn.</p>
                                    </p>
                                </div>
                                <div class="col-sm-4" style="border: none;">
                                    <img src="./icon/service3.svg" class="icon-svg" />
                                    <p>
                                        <p>CHIẾT KHẤU</p>
                                        <p>Mua hàng vào ngày sinh nhật sẽ được giảm 50% tổng hóa đơn trên toàn hệ thống.</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- thong tin khach hang -->
                    <div id="thongTinKhachHang">
                        <div class="content">
                            <?php
                            $controller = new CustomerController();
                            $controller->topCustomer();
                            ?>
                        </div>
                    </div>
                    <!-- THONG KE -->
                    <div id="thongKe">
                        <img src="./image/coupon.jpg"/>
                    </div>
                    <!-- LIEN HE -->
                    <div id="lienHe">
                        <div id="contact" class="container-fluid">
                            <h3 class="text-center">Liên hệ</h3>
                            <p class="text-center"><em>Rất vui được phục vụ bạn!</em></p>

                            <div class="row">
                                <div class="col-md-4">
                                    <p>Phản hồi lại cho chúng tôi.</p>
                                    <p><span class="glyphicon glyphicon-map-marker"></span>Địa chỉ: Hà Đông- Hà Nội</p>
                                    <p><span class="glyphicon glyphicon-phone"></span>Phone: +84353608535</p>
                                    <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                                        </div>
                                        <div class="col-sm-6 form-group">
                                            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                                        </div>
                                    </div>
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <button type="button" class="btn btn-success">gửi</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="map" style="margin-top:10px; display: inline;">
                            <h2>vị trí trên bản đồ</h2>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d16725.796492490095!2d105.78050139970465!3d20.98271850055177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sptit!5e0!3m2!1svi!2s!4v1604643235484!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact ">
        <div class="fb ">
            <a href="https://www.facebook.com/profile.php?id=100015381736695&ref=bookmarks "></a>
        </div>
        <div class="phone ">
            <a href="tel:0353608535 "></a>
        </div>
    </div>
    <script type="text/javascript " src="./js/action.js"></script>
</body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v9.0" nonce="XQBTQGB9"></script>
<script type="text/javascript">
    document.getElementById("thongTinKhachHang").style.display = "none";
    document.getElementById("thongKe").style.display = "none";
    document.getElementById("lienHe").style.display = "none";
    document.getElementById("nav-1").onclick = function() {
        document.getElementById("nav-1").classList.add("active");
        document.getElementById("nav-2").classList.remove("active");
        document.getElementById("nav-3").classList.remove("active");
        document.getElementById("nav-4").classList.remove("active");
        document.getElementById("thongTinKhachHang").style.display = "none";
        document.getElementById("trangChu").style.display = "block";
        document.getElementById("thongKe").style.display = "none";
        document.getElementById("lienHe").style.display = "none";
    }
    document.getElementById("nav-2").onclick = function() {
        document.getElementById("nav-1").classList.remove("active");
        document.getElementById("nav-2").classList.add("active");
        document.getElementById("nav-3").classList.remove("active");
        document.getElementById("nav-4").classList.remove("active");
        document.getElementById("trangChu").style.display = "none";
        document.getElementById("thongTinKhachHang").style.display = "block";
        document.getElementById("thongKe").style.display = "none";
        document.getElementById("lienHe").style.display = "none";
    }
    document.getElementById("nav-3").onclick = function() {
        document.getElementById("nav-1").classList.remove("active");
        document.getElementById("nav-2").classList.remove("active");
        document.getElementById("nav-3").classList.add("active");
        document.getElementById("nav-4").classList.remove("active");
        document.getElementById("trangChu").style.display = "none";
        document.getElementById("thongTinKhachHang").style.display = "none";
        document.getElementById("thongKe").style.display = "block";
        document.getElementById("lienHe").style.display = "none";
    }
    document.getElementById("nav-4").onclick = function() {
        document.getElementById("nav-1").classList.remove("active");
        document.getElementById("nav-2").classList.remove("active");
        document.getElementById("nav-3").classList.remove("active");
        document.getElementById("nav-4").classList.add("active");
        document.getElementById("trangChu").style.display = "none";
        document.getElementById("thongTinKhachHang").style.display = "none";
        document.getElementById("thongKe").style.display = "none";
        document.getElementById("lienHe").style.display = "block";
    }
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['mặt hàng', '%'],
            ['Quần áo', 8],
            ['Đồ dùng nhà bếp', 2],
            ['Đồ điện tử', 2],
            ['Máy tính', 3],
            ['Mỹ phẩm', 2],
            ['Trang sức', 7]
        ]);
        var options = {
            'title': 'doanh số các mặt hàng',
            'width': '100%',
            'height': '400px'
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
    }
</script>

</html>