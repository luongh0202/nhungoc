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
            <th style="width:15%;">Địa Chỉ</th> <!-- 7 -->
            <th style="width:5%;">Mã sản phẩm</th> <!-- 3 -->
            <th style="width:3%;">Kích cỡ</th> <!-- 4 -->
            <th style="width:5%;">Màu sắc</th> <!-- 5 -->
            <th style="width:3%;">Số Lượng</th> <!-- 6 -->
            <th style="width:6%;">Tiền Cọc</th> <!-- 8 -->
            <th style="width:6%;">Tổng Tiền</th> <!-- 9 -->
            <th style="width:6%;">Tiền Khuyến Mại</th> <!-- 10 -->
            <th style="width:6%;">Tiền Chốt Đơn</th> <!-- 11 -->
            <th style="width:6%;">Tiền Còn Thiếu</th> <!-- 12 -->
            <th style="width:10%;">Ghi chú</th> <!-- 13 -->
            <th style="width:7%;">Ngày đặt</th> <!-- 14 -->
            <th style="width:5%;">Phương thức vận chuyển</th> <!-- 15 -->
            <th style="width:5%;">Trạng thái ship</th> <!-- 16 -->
            <th style="width:5%;">Thanh toán</th> <!-- 17 -->
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
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>