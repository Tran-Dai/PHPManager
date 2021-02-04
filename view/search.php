<h1> tìm kiếm khách hàng </h1>
<h3>kết quả tìm kiếm của: <?php echo $search; ?></h3>
<a href="./admin.php?page=add"><img src="./icon/add.png" id="addIcon"></a>
<style>
  .icon {
    width: 30px;
    height: 30px;
  }

  #addIcon {
    width: 120px;
    height: 120px;
    position: fixed;
    bottom: 20px;
    right: 20px;
  }
</style>
<table class="table table-hover">
  <thead>
    <tr>
      <th>STT</th>
      <th>Tên</th>
      <th>Tuổi</th>
      <th>Email</th>
      <th>Địa chỉ</th>
      <th>Số điện thoại</th>
      <th>Điểm khách hàng</th>
      <th>Xóa</th>
      <th>Sửa</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($customers as $key => $customer) : ?>
      <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $customer->name ?></td>
        <td><?php echo $customer->age ?></td>
        <td><?php echo $customer->email ?></td>
        <td><?php echo $customer->address ?></td>
        <td><?php echo $customer->phoneNumber ?></td>
        <td><?php echo $customer->score ?></td>
        <td> <a href="./admin.php?page=delete&id=<?php echo $customer->id; ?>"><img src="./icon/delete.png" class="icon"></a></td>
        <td> <a href="./admin.php?page=edit&id=<?php echo $customer->id; ?>"><img src="./icon/edit.png" class="icon"></a></td>
      <?php endforeach; ?>
  </tbody>
</table>