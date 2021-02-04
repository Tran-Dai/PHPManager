<div class="login">
    <div class="header">
        <h1>ĐĂNG KÍ</h1>
    </div>
    <div class="main">
        <form method="POST" action="./account.php?page=signup" method="POST">
            <input type="text" id="username" placeholder="Tài khoản" name="username">
            <input type="password" id="password" placeholder="Mật khẩu" name="password">
            <input type="text" id="fullname" placeholder="Họ tên" name="fullname">
            <input type="text" placeholder="Tuổi" name="age">
            <input type="text" placeholder="Địa chỉ" name="address">
            <button type="submit">Đăng kí</button>
            <p>có tài khoản rồi? <a href="./account.php?page=login">đăng nhập ngay</a></p>
        </form>
    </div>
</div>