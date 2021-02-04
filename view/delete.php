<h1>Bạn chắc chắn muỗn xóa khách hàng <?php echo $customer->name; ?> ?</h1>

<form action="./admin.php?page=delete" method="post">
    <input type="hidden" name="id" value="<?php echo $customer->id; ?>"/>
    <div class="form-group">
        <input type="submit" value="Delete" class="btn btn-danger"/>
        <a class="btn btn-default" href="admin.php">Hủy</a>
    </div>
</form>