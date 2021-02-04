<h1>Cập nhật thông tin khách hàng <?php echo $customer->name; ?></h1>
<form method="post" action="./admin.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
    <div class="form-group">
        <label>Tên</label>
        <input type="text" name="name"  class="form-control" value="<?php echo $customer->name; ?>"/>
    </div>
    <div class="form-group">
        <label>Tuổi</label>
        <input type="text" name="age" class="form-control" value="<?php echo $customer->age; ?>"/>
    </div>
    <div class="form-group">
        <label>Email</label>
        <textarea name="email" class="form-control"><?php echo $customer->email; ?></textarea>
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <textarea name="address" class="form-control"><?php echo $customer->address; ?></textarea>
    </div>
    <div class="form-group">
        <label>Số điện thoại</label>
        <input type="text" name="phoneNumber" class="form-control" value="<?php echo $customer->phoneNumber; ?>"/>
    </div>
    <div class="form-group">
        <label>Điểm khách hàng</label>
        <textarea name="score" class="form-control"><?php echo $customer->score; ?></textarea>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="admin.php" class="btn btn-default">Hủy</a>
    </div>
</form>