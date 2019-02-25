<?php 
$ma_sp = !empty($_GET['ma_sp']) ? $_GET['ma_sp'] : 0;

// echo $ma_sp;

$sql = "SELECT san_pham.*, danh_muc.Ma_dm,danh_muc.Ten_dm FROM san_pham inner join danh_muc on danh_muc.Ma_dm = san_pham.Ma_dm Where Ma_sp = $ma_sp";

$res = mysqli_query($conn,$sql);


$pro = mysqli_fetch_assoc($res);

// echo '<pre>';
// print_r($pro);
// 	echo '</pre>';
?>

<div class="panel panel-primary">
	<div class="panel-body">
		<div class="row">
			<div class="col-md-5">
				<img src="uploads/<?php echo $pro['Anh_ap'] ; ?>" style="width:100%">
			</div>
			<div class="col-md-7">
				<h1 class="pro_name">
					<?php echo $pro['Ten_sp'] ; ?>
				</h1>
				<p>Giá: <?php echo $pro['Gia_sp'] ; ?> Giá khuyến mãi: <?php echo $pro['Gia_km'] ; ?></p>
				<p>Trong danh mục: <a href="index.php?module=danh-muc&ma_dm=<?php echo $pro['Ma_dm'] ?>"><?php echo $pro['Ten_dm'] ; ?></a></p>
				<p>
					<h4 class="mota">Mô tả</h4>
					<?php echo $pro['Mo_ta'] ; ?>
				</p>
				<p>
					<a href="" class="btn btn-success">
					<span class="glyphicon glyphicon-shopping-cart"></span>
					Thêm vào giỏ</a>
					<a href="" class="btn btn-danger">
					<span class="glyphicon glyphicon-earphone"></span>
					Gọi ngay: 0986421127</a>
				</p>
			</div>
		</div>
	</div>
</div>