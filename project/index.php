<?php 
	ob_start();
	session_start();
	require 'common/connect_db.php';
	$kh = isset($_SESSION['khach-hang']) ? $_SESSION['khach-hang'] : [];

 ?>
<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Trang chủ</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/style.css" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Title</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Trang chủ</a></li>
						<li><a href="index.php?module=gioi-thieu">Giới thiệu</a></li>
						<li><a href="index.php?module=lien-he">Liên hệ</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php?module=gio-hang">Giỏ hàng</a></li>
						<?php if(!$kh) : ?>
						<li><a href="index.php?module=dang-nhap">Đăng nhập</a></li>
						<li><a href="index.php?module=dang-ky">Đăng Ký</a></li>
						<?php else:  ?>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài khoản <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="index.php?module=thong-tin">Thông tin cá nhân</a></li>
								<li><a href="#">Đơn hàng của tôi</a></li>
								<li><a href="#">Thay đổi mật khẩu</a></li>
								<li><a href="thoat.php">Thoát</a></li>
							</ul>
						</li>
					<?php endif; ?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
<?php 
// truy van danh sach danh muc voi trang thai = 1
$sqldanhmuc = "Select * From danh_muc Where Trang_thai = 1";
$resdanhmuc = mysqli_query($conn, $sqldanhmuc);

?>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>Danh mục sản phẩm</h3>
					<div class="list-group">
					<?php while($danhmuc = mysqli_fetch_assoc($resdanhmuc)) { ?>
						<a href="index.php?module=danh-muc&ma_dm=<?php echo $danhmuc['Ma_dm'] ?>" class="list-group-item"><?php echo $danhmuc['Ten_dm'] ?></a>
					<?php } ?>
					</div>
				</div>
				<div class="col-md-9">
					<?php 
						$modules = isset($_GET['module']) ? $_GET['module'] : 'home';
						

						$fileName = $modules.'.php';

						$file_path = 'modules/'.$fileName;
						// echo $file_path;

						include $file_path;
					?>
				</div>
			</div>
		</div>
		<footer class="footer bg-success">
			<div class="jumbotron">
				<div class="container">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam minima, culpa recusandae quasi reprehenderit aliquam. Similique iste cupiditate fugit, beatae incidunt eos maxime nulla harum optio dignissimos libero nesciunt ea.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam minima, culpa recusandae quasi reprehenderit aliquam. Similique iste cupiditate fugit, beatae incidunt eos maxime nulla harum optio dignissimos libero nesciunt ea.</p>
					
				</div>
			</div>
		</footer>
		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script type="text/javascript">
		var isme = $('input#isme').is(':checked');

		$('input#isme').click(function(event) {
			var isme = $('input#isme').is(':checked');
			if(isme){
				$('input#Ten_nhan').val($('input#Ten_kh').val());
				$('input#Email_nhan').val($('input#Email').val());
				$('input#Dien_thoai_nhan').val($('input#Dien_thoai').val());
				$('input#Dia_chi_nhan').val($('input#Dia_chi').val());
			}else{
				$('input#Ten_nhan').val('');
				$('input#Email_nhan').val('');
				$('input#Dien_thoai_nhan').val('');
				$('input#Dia_chi_nhan').val('');
			}
		});
		
		</script>
	</body>
</html>