<?php
if (!empty($_GET['ma_sp'])) {
	$id = $_GET['ma_sp'];
	$sql = "SELECT * FROM products WHERE productid =".$id;
	$product = $conn->prepare($sql);
	    // Thực thi câu truy vấn
    $product->execute();

    // Khai báo fetch kiểu mảng kết hợp
    $product->setFetchMode(PDO::FETCH_ASSOC); 
    
    // Lấy danh sách kết quả
    $product = $product->fetch();

    // $_SESSION['thu'] = $product;

	// $product->setFetchMode();
    // var_dump($_SESSION['thu']);

    if (isset($_SESSION['cart'][$product['productid']]))
    {
    	$_SESSION['cart'][$product['productid']]['qtt'] = 0;
    	$_SESSION['cart'][$product['productid']]['qtt'] += 1;
    }
    else
    {
    	$_SESSION['cart'][$product['productid']] = $product ;
    	$_SESSION['cart'][$product['productid']]['qtt'] = 0;
    	$_SESSION['cart'][$product['productid']]['qtt'] += 1;
    }
    echo "<script>alert('Thêm mới thành công');history.back();</script>";
}else{
	echo 'loi';
}
?>