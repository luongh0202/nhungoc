<?php 
$carts = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$tong = 0;
?>
<div class="panel panel-default">
	<!-- Default panel contents -->
	<div class="panel-heading">Thông tin giỏ hàng</div>
	<!-- Table -->
<?php if($carts) : ?>
	<table class="table">
		<thead>
			<tr>
				<th>STT</th>
				<th>Ảnh</th>
				<th>Tên sản phẩm</th>
				<th>Số lượng</th>
				<th>Đơn giá</th>
				<th>Thành tiền</th>
				<th>Hành động</th>
			</tr>
			
		</thead>
		<tbody>
		<?php $n = 1;
		foreach($carts as $cart) : ?>
			<tr>
				<td><?php echo $n; ?></td>
				<td><img src="uploads/<?php echo $cart['productimage']; ?>" width="60"></td>
				<td><?php echo $cart['productname']; ?></td>
				<td>
					<form action="index.php?controller=san-pham&view=cap-nhat&action=cap-nhap-so-luong&ma_sp=<?php echo $cart['productid'] ?>" method="POST" class="form-inline" role="form">
						<div class="form-group">
							<input type="number" value="<?php echo $cart['qtt']; ?>" name="qtt" class="form-control" style="width:80px" />
						</div>
					
						<button type="submit" class="btn btn-primary btn-xs">Cập nhật</button>
					</form>
				</td>
				<td>
				<?php 
					if($cart['productprice'] > 0){
						echo $cart['productprice'];
					}else{
						echo $cart['Gia_sp'];
					}
				?>
				</td>
				<td>
				<?php 
					if($cart['productprice'] > 0){
						$thanh_tien = $cart['productprice']*$cart['qtt'];
						$tong += $thanh_tien;
						echo number_format($thanh_tien,0,'',',');
					}else{
						$thanh_tien = $cart['Gia_sp']*$cart['qtt'];
						$tong += $thanh_tien;
						echo number_format($thanh_tien,0,'',',');
					}
				?>
				</td>
				<td>
					<a href="index.php?controller=san-pham&view=cap-nhat&action=xoa-san-pham&ma_sp=<?php echo $cart['productid'] ?>" class="btn btn-xs btn-danger" onclick="return confirm('bạn có muốn xóa sản phẩm này không ?')">Xóa</a>
				</td>
			</tr>
		<?php $n++; endforeach; ?>
		</tbody>

		<tfoot>
			<tr>
				<th colspan="5" style="text-align:center">Tổng thành tiền</th>
				<th colspan="2">
					<?php echo number_format($tong,0,'',',');; ?>
				</th>
			</tr>
			<tr>
				<td colspan="7" style="text-align:center">
					<a href="index.php" class="btn btn-primary btn-sm">Tiếp tục mua hàng</a>
					<a href="index.php?controller=san-pham&view=cap-nhat&action=xoa-het" class="btn btn-danger btn-sm" onclick="return confirm('bạn có muốn xóa hết không ?')">Xóa hết</a>
					<a href="index.php?module=dat-hang" class="btn btn-success btn-sm">Đặt hàng</a>
				</td>
			</tr>
		</tfoot>
	</table>
<?php else: ?>
	<div class="alert alert-warning">
		<strong>Giỏ hàng rỗng</strong> quý khách vui lòng thêm sản phẩm vào giỏ hàng ...<a href="index.php" class="label label-primary">Tiếp tục mua hàng</a>
	</div>
<?php endif; ?>
</div>