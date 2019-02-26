<?php 
    $stmt = $conn->prepare("SELECT * FROM Admin"); 
    $stmt->execute();
    $Admins =  $stmt->fetchAll(PDO::FETCH_OBJ);
?>

<!--Responsive table-->
<div class="col-sm-12">
  <div class="panel panel-default panel-table">
    <div class="panel-heading">Danh sách đơn hàng
      <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
    </div>
    <div class="panel-body">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th style="width:1%;">Thứ tự</th> <!-- 1 -->
            <th style="width:15%;">Tên</th> <!-- 2 -->
            <th style="width:15%;">Tên shopee</th> <!-- 7 -->
            <th style="width:5%;">Mã sản phẩm</th> <!-- 3 -->
            <th style="width:3%;">Kích cỡ</th> <!-- 4 -->
            <th style="width:5%;">Màu sắc</th> <!-- 5 -->
            <th style="width:3%;">Số Lượng</th> <!-- 6 -->
            <th style="width:6%;">Giá sản phẩm</th> <!-- 9 -->
            <th style="width:6%;">Tiền Cọc</th> <!-- 8 -->
            <th style="width:6%;">Tiền Khuyến Mại</th> <!-- 10 -->
            <th style="width:6%;">Tiền Tổng Tiền</th> <!-- 11 -->
            <th style="width:6%;">Tiền Còn Thiếu</th> <!-- 12 -->
            <th style="width:10%;">Ghi chú</th> <!-- 13 -->
            <th style="width:7%;">Ngày đặt</th> <!-- 14 -->
            <th style="width:5%;">Phương thức vận chuyển</th> <!-- 15 -->
            <th style="width:5%;">Trạng thái ship</th> <!-- 16 -->
            <th style="width:5%;">Thanh toán</th> <!-- 17 -->
            <th style="width:5%;">Thao tác</th> <!-- 18 -->
          </tr>
        </thead>
        <tbody>
              <tr>
                <td>1</td> <!-- 1 -->
                <td>Hoàng Lương</td> <!-- 2 -->
                <td>Phú Sơn - Nho Quan - Ninh Bình</td> <!-- 7 -->
                <td>123</td> <!-- 3 -->
                <td>123</td> <!-- 4 -->
                <td>trang</td> <!-- 5 -->
                <td>123</td> <!-- 6 -->
                <td>10000000</td> <!-- 8 -->
                <td>10000000</td> <!-- 9 -->
                <td>10000000</td> <!-- 10 -->
                <td>10000000</td> <!-- 11 -->
                <td>10000000</td> <!-- 12 -->
                <td>123ádfádfádfádfádfádfádfádfád</td> <!-- 13 -->
                <td>12/12/2019</td> <!-- 14 -->
                <td>123</td> <!-- 15 -->
                <td>123</td> <!-- 16 -->
                <td>123</td> <!-- 17 -->
                <td>
                    <div class="btn-group btn-hspace">
                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false">Open <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                        <ul role="menu" class="dropdown-menu pull-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                </td> <!-- 17 -->
              </tr>
            <?php foreach ($Admins as $admin) {?>
              <tr>
                <td><?php echo $admin->id; ?></td> <!-- 1 -->
                <td><?php echo $admin->name; ?></td> <!-- 2 -->
                <td><?php echo $admin->address; ?></td> <!-- 7 -->
                <td><?php echo $admin->code; ?></td> <!-- 3 -->
                <td><?php echo $admin->size; ?></td> <!-- 4 -->
                <td><?php echo $admin->color; ?></td> <!-- 5 -->
                <td><?php echo $admin->quantity; ?></td> <!-- 6 -->
                <td><?php echo $admin->deposit; ?></td> <!-- 8 -->
                <td><?php echo $admin->total; ?></td> <!-- 9 -->
                <td><?php echo $admin->sale; ?></td> <!-- 10 -->
                <td><?php echo $admin->alltotal; ?></td> <!-- 11 -->
                <td><?php echo $admin->alltotal - $admin->deposit - $admin->sale; ?></td> <!-- 12 -->
                <td><?php echo $admin->note; ?></td> <!-- 13 -->
                <td><?php echo $admin->date; ?></td> <!-- 14 -->
                <td><?php echo $admin->shopee_cod; ?></td> <!-- 15 -->
                <td><?php echo $admin->status; ?></td> <!-- 16 -->
                <td><?php echo $admin->status_monney; ?></td> <!-- 17 -->
                <td>
                    <div class="btn-group btn-hspace">
                        <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false">Chỉnh<span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                        <ul role="menu" class="dropdown-menu pull-right">
                          <li><a href="#">Sửa</a></li>
                          <li><a href="#">Tạm dừng</a></li>
                          <li><a href="#">Tiếp tục</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Xoá</a></li>
                        </ul>
                    </div>
                </td> <!-- 17 -->
              </tr>
            <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>