<h1>Thêm mới khách hàng</h1>
<a href="./admin.php?"><img src="./icon/back.png" alt="logo" style=" width: 30px; height: 30px;">xem danh sách</a>
<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Tên khách hàng</label>
                    <input type="text" class="form-control" name="name" placeholder="Nhập tên" required>
                </div>
                <div class="form-group">
                    <label>Tuổi</label>
                    <input type="text" class="form-control" name="age" placeholder="Nhập tuổi" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Nhập mail" required>
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <input type="text" class="form-control" name="address" placeholder="Nhập địa chỉ" required>
                </div>
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <input type="text" class="form-control" name="phoneNumber" placeholder="Nhập số điện thoại" required>
                </div>
                <div class="form-group">
                    <label>Điểm khách hàng</label>
                    <input type="text" class="form-control" name="score" placeholder="Nhập điểm khách hàng" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>