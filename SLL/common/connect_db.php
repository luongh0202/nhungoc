<?php
$servername = "localhost";
$username = "root";     // Tài khoản mặc định
$password = "";         // Mật khẩu mặc định để trống
$database = "SLL";  // Cơ sở dữ liệu
// Mở kết nối
try {
	$conn = new PDO("mysql:host=localhost;dbname=SLL",$username,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// echo "Connected successfuly";
    }
catch(PDOException $e)
	{
	echo "Connection failed: " .$e->getMessage();
	}
?>