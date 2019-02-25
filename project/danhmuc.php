<?php 
$Ma_dm = isset($_GET['ma_dm']) ? $_GET['ma_dm'] : 0;
$sqlsp = "Select * From san_pham Where Ma_dm = $Ma_dm";
$ressp = mysqli_query($conn, $sqlsp);

?>

<h3>Sản phẩm mãi</h3>
<div class="products">
<?php while($ressp = mysqli_fetch_assoc($ressp)) : ?>
<div class="col-xs-6 col-sm-4 col-md-4">
	<div class="thumbnail">
		<img src="uploads/<?php echo $prokm['Anh_ap'] ?>" alt="">
		<div class="caption text-center">
			<h3><?php echo $prokm['Ten_sp'] ?></h3>
			<p>
			<?php if($prokm['Gia_km'] > 0 ) : ?>
				Giá cũ: <del><?php echo $prokm['Gia_sp'] ?> đ</del>
				Giá mới: <strong><?php echo $prokm['Gia_km'] ?> đ</strong>
				<div class="sale-off">
					Sale
				</div>
			<?php else: ?>
				Giá: <strong><?php echo $prokm['Gia_sp'] ?> đ</strong>
			<?php endif; ?>
			</p>
			<p>
				<a href="#" class="btn btn-primary">Xem</a>
				<a href="#" class="btn btn-success">
				<span class="glyphicon glyphicon-shopping-cart"></span>
				Vào giỏ</a>
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<!-- products -->
