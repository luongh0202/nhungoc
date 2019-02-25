<?php 
$ma_sp = isset($_GET['ma_sp']) ? $_GET['ma_sp'] : 0;
$qtt = isset($_POST['qtt']) ? $_POST['qtt'] : 1;
$qtt = is_numeric($qtt) ? $qtt : 1;
$qtt = $qtt > 0 ? $qtt : 1;
$qtt = ceil($qtt);

// unset($_SESSION['cart']);die;
// if (isset($_GET['action']) && $_GET['action'] == 'cap-nhat' ) {

// 	if (mysqli_num_rows($ketqua) == 1) {
// 		$pro = mysqli_fetch_assoc($ketqua);
// 		if (isset($_SESSION['cart'][$pro['Ma_sp']])) {
// 			$_SESSION['cart'][$pro['Ma_sp']]['qtt'] += 1;
// 		}else{
// 			$_SESSION['cart'][$pro['Ma_sp']] = $pro;
// 			$_SESSION['cart'][$pro['Ma_sp']]['qtt'] = 1;
// 		}
		
// 	}else{
// 		echo '<script type="text/javascript">alert("Sản phẩm bạn chọn không có")</script>';
// 	}
// }

if (isset($_GET['action']) && $_GET['action'] == 'xoa-san-pham') {
	if (isset($_SESSION['cart'][$ma_sp])) {
		unset($_SESSION['cart'][$ma_sp]);
	}
}

if (isset($_GET['action']) && $_GET['action'] == 'cap-nhap-so-luong') {
	if (isset($_SESSION['cart'][$ma_sp])) {
		$_SESSION['cart'][$ma_sp]['qtt'] = $qtt;
	}
}

if (isset($_GET['action']) && $_GET['action'] == 'xoa-het') {
	if (isset($_SESSION['cart'])) {
		unset($_SESSION['cart']);
	}
}
    echo "<script>window.location.href='index.php?controller=san-pham&view=gio-hang';</script>";
?>
