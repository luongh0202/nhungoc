<?php 

$sqlsp = "Select * From san_pham  Order By Ma_sp DESC LIMIT 3";
$ressp = mysqli_query($conn, $sqlsp);

// Lay san pham khuyen mai
$sqlspkm = "Select * From san_pham Where Gia_km > 0 Order By Ma_sp DESC LIMIT 3 ";
$resspkm = mysqli_query($conn, $sqlspkm);
// var_dump($resspkm);
?>
<h3>Sản phẩm mới nhất</h3>
<div class="products">
<?php while($pro = mysqli_fetch_assoc($ressp)) : ?>
<div class="col-xs-6 col-sm-4 col-md-4">
	<div class="thumbnail">
		<img src="uploads/<?php echo $pro['Anh_ap'] ?>" alt="">
		<div class="caption text-center">
			<h3><?php echo $pro['Ten_sp'] ?></h3>
			<p>
			<?php if($pro['Gia_km'] > 0 ) : ?>
				Giá cũ: <del><?php echo $pro['Gia_sp'] ?> đ</del>
				Giá mới: <strong><?php echo $pro['Gia_km'] ?> đ</strong>
				<div class="sale-off">
					Sale
				</div>
			<?php else: ?>
				Giá: <strong><?php echo $pro['Gia_sp'] ?> đ</strong>
			<?php endif; ?>
			</p>
			<p>
				<a href="index.php?module=san-pham&ma_sp=<?php echo $pro['Ma_sp'] ?>" class="btn btn-primary">Xem</a>
				<a href="them-vao-gio.php?action=them-vao-gio&ma_sp=<?php echo $pro['Ma_sp'] ?>" class="btn btn-success">
				<span class="glyphicon glyphicon-shopping-cart"></span>
				Vào giỏ</a>
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<!-- products -->

<h3>Sản phẩm mãi</h3>
<div class="products">
<?php while($prokm = mysqli_fetch_assoc($resspkm)) : ?>
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
				<a href="index.php?module=san-pham&ma_sp=<?php echo $prokm['Ma_sp'] ?>" class="btn btn-primary">Xem</a>
				<a href="them-vao-gio.php?ma_sp=<?php echo $prokm['Ma_sp'] ?>" class="btn btn-success">
				<span class="glyphicon glyphicon-shopping-cart"></span>
				Vào giỏ</a>
			</p>
		</div>
	</div>
</div>
<?php endwhile; ?>
</div>
<!-- products -->
