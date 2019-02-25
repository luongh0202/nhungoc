<?php

	if (isset($_FILES['productimage']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
                move_uploaded_file($_FILES['productimage']['tmp_name'], '../uploads/'.$_FILES['productimage']['name']);
        }
	if (isset($_POST['addproduct']))
	{
		$catid = $_POST['catid'];
		$productname = $_POST['productname'];
		$productdescription = $_POST['productdescription'];
		$productprice = $_POST['productprice'];
		$productsale = $_POST['productsale'];
		$producttotal = $_POST['producttotal'];
		$productimage = $_FILES['productimage']['name'];
		$productstatus = $_POST['productstatus'];

		$sql = "INSERT INTO `products`(`catid`, `productname`, `productimage`, `productdescription`, `productprice`, `productsale`, `producttotal`, `productstatus`) VALUES ('".$catid."','".$productname."','".$productimage."','".$productdescription."','".$productprice."','".$productsale."','".$producttotal."','".$productstatus."')";
		// var_dump($sql);
	$conn->exec($sql);
    echo "<script>alert('Thêm mới sản phẩm thành công');window.location.href='index.php?controller=san-pham';</script>";
	}
?>
<div class="row">
    <div class="col-md-12">
      <div class="panel panel-default panel-border-color panel-border-color-primary">
        <div class="panel-heading panel-heading-divider">Thêm mới sản phẩm</div>
        <div class="panel-body">
          <form method="POST" enctype="multipart/form-data" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
		<div class="form-group">
			<div class="col-sm-2">
				<label>Tên sản phẩm</label>
			</div>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="productname" placeholder="Nhập tên sản phẩm ..."/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-2">
				<label>Tên danh mục</label>
			</div>
			<div class="col-sm-10">
				<select name="catid" class="form-control">
					<option value="">--Chọn danh mục--</option>
				<?php 	
				$stmt = $conn->prepare("SELECT * FROM Categorys"); 
			    $stmt->execute();
			    $categorys =  $stmt->fetchAll(PDO::FETCH_OBJ); 
			    ?>
			    <?php foreach ($categorys as $category) {?>
					<option value="<?php echo $category->categoryid; ?>"><?php echo $category->categoryname; ?></option>
				<?php } ?>
				</select>
			</div>
		</div>	
		<div class="form-group">
			<div class="col-sm-2">
				<label>Ảnh sản phẩm</label>
			</div>
			<div class="col-sm-10">
				<input type="file" name="productimage" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-2">
				<label>Mô tả sản phẩm</label>
			</div>
			<div class="col-sm-10">
				<textarea name="productdescription" id="mytextarea" class="form-control" rows="3"></textarea>
			</div>
		</div>	

		<div class="form-group">
			<div class="col-sm-2">
				<label>Giá sản phẩm</label>
			</div>
			<div class="col-sm-10">
				<input name="productprice" class="form-control" type="number" minlength="0"/>
			</div>
		</div>	
		<div class="form-group">
			<div class="col-sm-2">
				<label>Giá khuyến mãi</label>
			</div>
			<div class="col-sm-10">
				<input name="productsale" class="form-control" type="number" minlength="0"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-2">
				<label>Tổng số sản phẩm</label>
			</div>
			<div class="col-sm-10">
				<input name="producttotal" class="form-control" type="number" minlength="0"/>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-2">
				<label>Trạng thái</label>
			</div>
			<div class="col-sm-10">
				<select name="productstatus" class="form-control">
					<option value="0">Không kích hoạt</option>
					<option value="1">Kích hoạt</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<button type="submit" name="addproduct" class="btn btn-primary">Thêm mới</button>
				<button type="reset" class="btn btn-danger">Xóa</button>
			</div>
		</div>
		</form>
        </div>
      </div>
    </div>
  </div>