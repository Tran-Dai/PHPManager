<h1>Danh sách khách hàng</h1>
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="./admin.php?">Bảng khách hàng</a>
  </li> 
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Sắp xếp theo điểm</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="./admin.php?page=sortScore">Thấp đến cao</a>
      <a class="dropdown-item" href="./admin.php?page=sortScoreDESC">Cao đến thấp</a>
    </div>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Sắp xếp theo tên</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="./admin.php?page=sortName">A->Z</a>
      <a class="dropdown-item" href="./admin.php?page=sortNameDESC">Z->A</a>
    </div>
  </li>
</ul>

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