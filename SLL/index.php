<?php
include 'common/connect_db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Siêu-Long-Lương</title>
<link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bonfire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Exo:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="public/css/etalage.css">
<script src="public/js/jquery.etalage.min.js"></script>
<script>
            jQuery(document).ready(function($){

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function(image_anchor, instance_id){
                        alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
                    }
                });

            });
</script>
<!--//fonts-->
                <script type="text/javascript">
                    jQuery(document).ready(function($) {
                        $(".scroll").click(function(event){     
                            event.preventDefault();
                            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                        });
                    });
                </script>
<!--slider-script-->
        <script src="public/js/responsiveslides.min.js"></script>
            <script>
                $(function () {
                  $("#slider1").responsiveSlides({
                    auto: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                  });
                });
            </script>
<!--//slider-script-->
<script>$(document).ready(function(c) {
    $('.alert-close').on('click', function(c){
        $('.message').fadeOut('slow', function(c){
            $('.message').remove();
        });
    });   
});
</script>
<script>$(document).ready(function(c) {
    $('.alert-close1').on('click', function(c){
        $('.message1').fadeOut('slow', function(c){
            $('.message1').remove();
        });
    });   
});
</script>
</head>
<body>
  <!--header-->
    <div class="header">
        <div class="header-top">
            <div class="container"> 
            <div class="header-top-in">         
                <div class="logo">
                    <a href="public/index.html"><img src="public/images/logo.png" alt=" " ></a>
                </div>
                <div class="header-in">
                    <ul class="icon1 sub-icon1">
                            <li><a href="index.php?controller=nguoi-dung&view=dang-ki">Đăng kí</a></li>
                            <li><a href="index.php?controller=nguoi-dung&view=dang-nhap">Đăng nhập</a></li>
                            <!-- <li><a href="public/wishlist.html">Hoàng Lương</a></li> -->  
                            <li><div class="cart">
                                    <a href="index.php?controller=san-pham&view=gio-hang" class="cart-in"> </a>
                                </div>
<!--                                 <ul class="sub-icon1 list">
                          <h3>Recently added items(2)</h3>
                          <div class="shopping_cart">
                              <div class="cart_box">
                                 <div class="message">
                                     <div class="alert-close"> </div> 
                                    <div class="list_img"><img src="public/images/14.jpg" class="img-responsive" alt=""></div>
                                    <div class="list_desc"><h4><a href="public/#">velit esse molestie</a></h4>1 x<span class="actual">
                                     $12.00</span></div>
                                      <div class="clearfix"></div>
                                  </div>
                                </div>
                                <div class="cart_box1">
                                  <div class="message1">
                                     <div class="alert-close1"> </div> 
                                    <div class="list_img"><img src="public/images/15.jpg" class="img-responsive" alt=""></div>
                                    <div class="list_desc"><h4><a href="public/#">velit esse molestie</a></h4>1 x<span class="actual">
                                     $12.00</span></div>
                                      <div class="clearfix"></div>
                                  </div>
                                </div>
                            </div>
                            <div class="total">
                                <div class="total_left">CartSubtotal : </div>
                                <div class="total_right">$250.00</div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="login_buttons">
                              <div class="check_button"><a href="public/checkout.html">Check out</a></div>
                              <div class="clearfix"></div>
                            </div>
                          <div class="clearfix"></div>
                        </ul> -->
                            </li>
                        </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            </div>
        </div>
        <div class="header-bottom">
        <div class="container">
            <div class="h_menu4">
            <div class="container">
            <div class="h_menu4">
                <a class="toggleMenu" href="public/#">Menu</a>
                <ul class="nav">
                    <li><a href="index.php?controller=main">TRANG CHỦ</a></li>
                    <li><a href="index.php?controller=lien-he">LIÊN HỆ</a></li>
                    <?php
                        $stmt = $conn->prepare("SELECT * FROM Categorys"); 
                        $stmt->execute();
                        $categorys =  $stmt->fetchAll(PDO::FETCH_OBJ);
                    ?>
                    <?php foreach ($categorys as $category) {?>
                    <li><a href="index.php?controller=danh-muc&view=index&ma_dm=<?php echo $category->categoryid; ?>"><?php echo $category->categoryname; ?></a></li>
                    <?php } ?>
                </ul>
                <script type="text/javascript" src="public/js/nav.js"></script>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <form action="index_submit" method="get" accept-charset="utf-8">
        <input class="form-control" type="text" name="" value="">
        </form>
    </div>
        <!---->
    <?php 
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'main';
        // $view = $_GET['view'];
        $view = isset($_GET['view']) ? $_GET['view'] : 'index';
        // sử dụng hàm include hoặc require để goi vile view vào đây
        include 'modules/'.$controller.'/'.$view.'.php';
        ?>
    <!---->
        <div class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="col-md-4 footer-in">
                        <h4><i> </i>CHẤT LƯỢNG</h4>
                        <p>LSL Mang đến cho khách hàng chất lượng và sản phẩm tốt nhất trên thị trường đảm bảo hàng chính hãng trọn đời.</p>
                    </div>
                    <div class="col-md-4 footer-in">
                        <h4><i class="cross"> </i>PHỤC VỤ</h4>
                        <p>LSL Cam kết chất lượng phục vụ tốt nhất, chuyên nghiệp nhất cho khách hàng bằng chính sách hoàn tiền và tặng quà nếu nhân viên phục vụ quý khách không chu đáo.</p>
                    </div>
                    <div class="col-md-4 footer-in">
                        <h4><i class="down"> </i>HỖ CHỢ</h4>
                        <p>Nếu bạn gặp rắc rối về chất lượng và sản phẩm dịch vụ của LSL hãy gọi đến số 0977872077 hoặc inbox ở fapage https://www.facebook.com/nguyen.hoang.long.1992.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!---->
            <div class="footer-middle">
                <div class="container">
                    <div class="footer-middle-in">
                        <h6>VỀ CHÚNG TÔI</h6>
                        <p>Được thành lập vào tháng 3 năm 2009 với nhiều năm phát triển tạo nên những viên gạch chính để xây lên những thành công như ngày hôm này LSL mang tới cho khách hàng</p>
                    </div>
                    <div class="footer-middle-in">
                        <h6>THÔNG TIN</h6>
                        <ul>
                            <li><a href="public/#">Về chúng tôi</a></li>
                            <li><a href="public/#">Thông tin giao hàng</a></li>
                            <li><a href="public/#">Chính sách bảo mật</a></li>
                            <li><a href="public/#">Điều khoản và điều kiện</a></li>
                        </ul>
                    </div>
                    <div class="footer-middle-in">
                        <h6>DỊCH VỤ KHÁCH HÀNG</h6>
                        <ul>
                            <li><a href="public/contact.html">Liên hệ chúng tôi</a></li>
                            <li><a href="public/#">Trở về</a></li>
                            <li><a href="public/#">Sơ đồ trang web</a></li>
                        </ul>
                    </div>
                    <div class="footer-middle-in">
                        <h6>TÀI KHOẢN CỦA BẠN</h6>
                        <ul>
                            <li><a href="public/account.html">Tải khoản của tôi</a></li>
                            <li><a href="public/#">Lịch sử đơn hàng</a></li>
                            <li><a href="public/wishlist.html">Danh sách mong muốn</a></li>
                            <li><a href="public/#">Bảng tin</a></li>
                        </ul>
                    </div>
                    <div class="footer-middle-in">
                        <h6>TIỆN ÍCH BỔ SUNG</h6>
                        <ul>
                            <li><a href="public/#">BNhãn hiệu</a></li>
                            <li><a href="public/#">Phiếu quà tặng<</a></li>
                            <li><a href="public/#">Đại lý</a></li>
                            <li><a href="public/#">Ưu đãi đặc biệt</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <p class="footer-class">Copyright © 2015 Modern Template by  <a href="public/http://w3layouts.com/" target="_blank">W3layouts</a> </p>
        </div>
<script>
jQuery(document).ready(function(c){
    $("#provinces").change(function(even) {
        idpro = $(this).val();
        idp = parseInt(idpro);
        if (idp) {
            $.ajax({
                url:"ajax-huyen.php",
                type: "post",
                data: {"provinceid" : idp},
                async: true,
                success:function(data){
                    $("#districts").html(data);
                }
            });
        }else{
            $.ajax({
                url:"ajax-huyen.php",
                type: "post",
                data: null,
                async: true,
                success:function(data){
                    $("#districts").html(data);
                }
            });
        }
    });
});
jQuery(document).ready(function(c){
    $("#districts").change(function(even) {
        iddis = $(this).val();
        idd = parseInt(iddis);
        if (idd) {
            $.ajax({
                url:"ajax-xa.php",
                type: "post",
                data: {"districtid" : idd},
                async: true,
                success:function(data){
                    $("#wards").html(data);
                }
            });
        }else{
            $.ajax({
                url:"ajax-xa.php",
                type: "post",
                data: null,
                async: true,
                success:function(data){
                    $("#wards").html(data);
                }
            });
        }
    });
});
</script>
</body>
</html>