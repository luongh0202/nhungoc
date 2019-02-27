<?php
  if (isset($_POST['add']))
  {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $code = $_POST['code'];
    $size = $_POST['size'];
    $quantity = $_POST['quantity'];
    $deposit = $_POST['deposit'];
    $total = $_POST['total'];
    $sale = $_POST['sale'];
    $alltotal = $_POST['alltotal'];
    $note = $_POST['note'];
    $shopee_cod = $_POST['shopee_cod'];
    $status = $_POST['status'];
    $status_monney = $_POST['status_monney'];

    $sql = "INSERT INTO `admin`(`name`, `address`, `code`, `size`, `quantity`, `deposit`, `total`, `sale`, `alltotal`, `note`, `shopee_cod`, `status`, `status_monney`) VALUES ('".$name."','".$address."','".$code."','".$size."','".$quantity."','".$deposit."','".$total."','".$sale."','".$alltotal."','".$note."','".$shopee_cod."','".$status."','".$status_monney."')";
    $conn->exec($sql);
    echo "<script> var cf = confirm('Thêm mới sản phẩm thành công, có thêm tiếp không em ?');
    if (cf == true) {
      window.location.href='index.php?controller=order&view=insert';
    } else {
      window.location.href='index.php?controller=order&view=index';
    }
    </script>";
    }
?>
<div class="col-md-12">
  <div class="panel panel-default panel-border-color panel-border-color-primary">
    <div class="panel-heading panel-heading-divider">Thêm mới</div>
    <div class="panel-body">
      <form method="POST" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
        <div class="form-group">
          <label class="col-sm-1 control-label">Tên</label>
          <div class="col-sm-7">
            <input name="name" type="text" class="form-control">
          </div>
          <div class="col-sm-4">
            <select class="form-control">
              <option>Gợi í tên khách hàng</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Địa chỉ</label>
          <div class="col-sm-7">
            <textarea name="address" class="form-control"></textarea>
          </div>
          <div class="col-sm-4">
            <select class="form-control">
              <option>Gợi í địa chỉ</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Tên Hàng</label>
          <div class="col-sm-3">
            <input name="nameproduct" type="text" class="form-control">
          </div>
          <label class="col-sm-1 control-label">Mã Hàng</label>
          <div class="col-sm-3">
            <input name="code" type="text" class="form-control">
          </div>
          <div class="col-sm-2">
            <select class="form-control">
              <option>Gợi í tên hàng</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
          <div class="col-sm-2">
            <select class="form-control">
              <option>Gợi í mã hàng</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Kích cỡ</label>
          <div class="col-sm-7">
            <input name="size" type="text" class="form-control">
          </div>
          <div class="col-sm-4">
            <select class="form-control">
              <option>Gợi í kích cỡ</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Màu sắc</label>
          <div class="col-sm-7">
            <input name="color" type="text" class="form-control">
          </div>
          <div class="col-sm-4">
            <select class="form-control">
              <option>Gợi í màu sắc</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Số Lượng</label>
          <div class="col-sm-7">
            <input id="soluong_new" name="quantity" type="number" class="form-control" value="1">
          </div>
          <div class="col-sm-4">
            <select class="form-control">
              <option>Gợi í số lượng</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Giá bán</label>
          <div class="col-sm-2">
            <input id="giaban_new" name="total" type="number" class="form-control" value="<?php echo $a;?>">
          </div>
          <div class="col-sm-5">
            <div class="col-sm-3">
              <label class="abc">=</label>
              <input id="giaweb_new" type="number" class="xyz form-control" value="" placeholder="Giá web">
            </div>
            <div class="col-sm-3">
              <label class="abc">X</label>
              <input id="tigia_new" type="number" class="xyz form-control" value="3.5" placeholder="Tỉ giá">
            </div>
            <div class="col-sm-3">
              <label class="abc">+</label>
              <input id="lai_new" type="number" class="xyz form-control" value="" placeholder="Lãi">
            </div>
            <div class="col-sm-3">
              <button id="tinhgiaban_new" class="btn btn-space btn-primary btn-lg">Tính</button>
            </div>
          </div>
          <div class="col-sm-4">
            <select class="form-control">
              <option>Gợi í giá bán</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Giảm</label>
          <div class="col-sm-7">
            <input id="giagiam_new" name="sale" type="number" class="form-control" value="<?php echo $a;?>">
          </div>
          <div class="col-sm-4">
            <select class="form-control">
              <option>Gợi í giá giảm</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Cọc</label>
          <div class="col-sm-7">
            <input id="coc_new" name="deposit" type="number" class="form-control" value="<?php echo $a;?>">
          </div>
          <div class="col-sm-4">
            <select class="form-control">
              <option>Gợi í giá cọc</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Tổng tiền</label>
          <div class="col-sm-5">
            <input id="tongtien_new" name="alltotal" type="number" class="form-control" value="<?php echo $a;?>">
          </div>
          <div class="col-sm-2">
            <button id="tinhtongtien_new" class="btn btn-space btn-primary btn-lg">Tính</button>
          </div>
          <div class="col-sm-4">
              <label style="width: 30%;float: left;text-align: left;" class="control-label">Khách nợ</label>
              <input id="conthieu_new" style="width: 70%;float: left;" type="number" class="form-control" readonly>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Ghi chú</label>
          <div class="col-sm-7">
            <textarea name="note" class="form-control"></textarea>
          </div>
          <div class="col-sm-4">
            <select class="form-control">
              <option>Gợi í ghi chú</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-1 control-label">Vận chuyển</label>
          <div class="col-sm-3">
            <div class="be-radio has-success inline">
              <input type="radio" name="shopee_cod" id="radinsucc" value="0">
              <label for="radinsucc">Shopee</label>
            </div>
            <div class="be-radio has-warning inline">
              <input type="radio" name="shopee_cod" id="radinwarn" value="1">
              <label for="radinwarn">Ship COD</label>
            </div>
          </div>

          <label class="col-sm-1 control-label">Trạng thái đơn</label>
          <div class="col-sm-3">
            <div class="be-radio has-success inline">
              <input type="radio" name="status" id="radinsucc1" value="0">
              <label for="radinsucc1">Đang order</label>
            </div>
            <div class="be-radio has-warning inline">
              <input type="radio" name="status" id="radinwarn1" value="1">
              <label for="radinwarn1">Đang Ship</label>
            </div>
            <div class="be-radio has-danger inline">
              <input type="radio" name="status" id="radindang1" value="2">
              <label for="radindang1">Xong</label>
            </div>
          </div>

          <label class="col-sm-1 control-label">Thanh toán</label>
          <div class="col-sm-3">
            <div class="be-radio has-success inline">
              <input type="radio" name="status_monney" id="radinsucc2" value="0">
              <label for="radinsucc2">Chưa cọc</label>
            </div>
            <div class="be-radio has-warning inline">
              <input type="radio" name="status_monney" id="radinwarn2" value="1">
              <label for="radinwarn2">Đã cọc</label>
            </div>
            <div class="be-radio has-danger inline">
              <input type="radio" name="status_monney" id="radindang2" value="2">
              <label for="radindang2">Đủ</label>
            </div>
          </div>

        </div>
        <div class="col-xs-12">
          <p class="text-center">
            <button name="add" type="submit" class="btn btn-space btn-primary">Gửi</button>
            <button class="btn btn-space btn-default">Làm lại</button>
          </p>
        </div>
      </form>
    </div>
  </div>
</div>