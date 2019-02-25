<?php 
session_start();
require '../common/connect_db.php';
if (isset($_POST['login'])) {
$useremail = $_POST['useremail']; // Lấy useremail từ post gửi lên
$userpassword = MD5($_POST['userpassword']); // Lấy userpassword từ post gửi lên
// Sử đụng Prepare
$stmt = $conn->prepare("SELECT * FROM Users WHERE useremail = '$useremail'"); //Lấy ra bản ghi để check
// Thực thi câu truy vấn
$stmt->execute();
// Khai báo fetch kiểu mảng kết hợp
$stmt->setFetchMode(PDO::FETCH_OBJ);
// Lấy danh sách kết quả
$result = $stmt->fetch();
// Lặp kết quả
if ($result) {
    if ($userpassword == $result->userpassword) {
        $_SESSION['SLL'] = $result;
        // var_dump($_SESSION['SLL']);
        echo '<script>alert("Đăng nhập thành công! Đang chuyển hướng!");window.location.href="index.php";</script>';
    } else {
        echo '<script>alert("Email hoặc mật khẩu không đúng");window.history.back();</script>';
    }
} else {
    echo '<script>alert("Email hoặc mật khẩu không đúng");window.history.back();</script>';
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="public/assets/img/logo-fav.png">
    <title>Beagle</title>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="public/assets/css/style.css" type="text/css"/>
</head>
<body class="be-splash-screen">
    <div class="be-wrapper be-login">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading"><img src="public/assets/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Nhập thông tin tài khoản </span></div>
                        <div class="panel-body">
                            <form method="POST">
                                <div class="form-group">
                                    <input name="useremail" type="text" placeholder="Email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input name="userpassword" type="password" placeholder="Mật khẩu" class="form-control">
                                </div>
                                <div class="form-group login-submit">
                                    <button data-dismiss="modal" type="submit" name="login" class="btn btn-primary btn-xl">Đăng nhập</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="public/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="public/assets/js/main.js" type="text/javascript"></script>
    <script src="public/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function(){
        //initialize the javascript
        App.init();
      });
  </script>
</body>
</html>
