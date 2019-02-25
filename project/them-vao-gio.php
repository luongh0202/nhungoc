<?php 
session_start();
require 'common/connect_db.php';

$ma_sp = isset($_GET['ma_sp']) ? $_GET['ma_sp'] : 0;
$so_luong = isset($_POST['so_luong']) ? $_POST['so_luong'] : 1;
$so_luong = is_numeric($so_luong) ? $so_luong : 1;
$so_luong = $so_luong > 0 ? $so_luong : 1;
$so_luong = ceil($so_luong);
$sql = "Select * From san_pham WHERE Ma_sp = $ma_sp";

$ketqua = mysqli_query($conn,$sql);
// unset($_SESSION['gio-hang']);die;
if (isset($_GET['action']) && $_GET['action'] == 'them-vao-gio' ) {

	if (mysqli_num_rows($ketqua) == 1) {
		$pro = mysqli_fetch_assoc($ketqua);
		if (isset($_SESSION['gio-hang'][$pro['Ma_sp']])) {
			$_SESSION['gio-hang'][$pro['Ma_sp']]['so_luong'] += 1;
		}else{
			$_SESSION['gio-hang'][$pro['Ma_sp']] = $pro;
			$_SESSION['gio-hang'][$pro['Ma_sp']]['so_luong'] = 1;
		}
		
	}else{
		echo '<script type="text/javascript">alert("Sản phẩm bạn chọn không có")</script>';
	}
}

if (isset($_GET['action']) && $_GET['action'] == 'xoa-san-pham') {
	// echo $ma_sp;die;
	if (isset($_SESSION['gio-hang'][$ma_sp])) {
		// var_dump($_SESSION['gio-hang'][$ma_sp]);die;
		unset($_SESSION['gio-hang'][$ma_sp]);
	}
}

if (isset($_GET['action']) && $_GET['action'] == 'cap-nhap-so-luong') {
	// echo $so_luong;die;
	if (isset($_SESSION['gio-hang'][$ma_sp])) {
		$_SESSION['gio-hang'][$ma_sp]['so_luong'] = $so_luong;
	}
}

if (isset($_GET['action']) && $_GET['action'] == 'xoa-het') {
	if (isset($_SESSION['gio-hang'])) {
		unset($_SESSION['gio-hang']);
	}
}


header('location: index.php?module=gio-hang');
?>

