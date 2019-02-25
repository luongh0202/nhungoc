<?php
include '../common/connect_db.php';
session_start();
if (!isset($_SESSION['SLL'])) {
    header('location: login.php');
}else{
  $user = $_SESSION['SLL'];
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
    <title>Siêu-Long-Lương</title>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/perfect-scrollbar/css/perfect-scrollbar.min.css"/>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.css"/>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/jqvmap/jqvmap.min.css"/>
    <link rel="stylesheet" type="text/css" href="public/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css"/>
    <link rel="stylesheet" href="public/assets/css/style.css" type="text/css"/>
  </head>
<body>
  <div class="be-wrapper be-fixed-sidebar">
    <nav class="navbar navbar-default navbar-fixed-top be-top-header">
      <div class="container-fluid">
        <div class="navbar-header"><a href="index.php" class="navbar-brand"></a></div>
        <div class="be-right-navbar">
          <ul class="nav navbar-nav navbar-right be-user-nav">
            <li class="dropdown"><a href="index.php" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="../uploads/admin/user.jpg" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
              <ul role="menu" class="dropdown-menu">
                <li>
                  <div class="user-info">
                    <div class="user-name">Admin</div>
                  </div>
                </li>
                <li><a href="#"><span class="icon mdi mdi-face"></span>Thông tin</a></li>
                <li><a href="#"><span class="icon mdi mdi-settings"></span>Đổi mật khẩu</a></li>
                <li><a href="logout.php"><span class="icon mdi mdi-power"></span>Đăng xuất</a></li>
              </ul>
            </li>
          </ul>
          <div class="page-title"><span>Siêu - Long - Lương</span></div>
        </div>
      </div>
    </nav>
    <div class="be-left-sidebar">
      <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Trang chủ</a>
        <div class="left-sidebar-spacer">
          <div class="left-sidebar-scroll">
            <div class="left-sidebar-content">
              <ul class="sidebar-elements">
                <li class="divider">Menu</li>
                <li class="active"><a href="index.php"><i class="icon mdi mdi-home"></i><span>Trang chủ</span></a>
                </li>
                <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Danh mục</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=danh-muc&view=them-moi">Thêm danh mục sản phẩm</a>
                    </li>
                    <li><a href="?controller=danh-muc">Danh sách danh mục</a>
                    </li>
                  </ul>
                </li>
                <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>Sản phẩm</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=san-pham&view=them-moi">Thêm sản phẩm</a>
                    </li>
                    <li><a href="index.php?controller=san-pham">Danh sách sản phẩm</a>
                    </li>
                  </ul>
                </li>
                <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Tin tức</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=bai-viet&view=them-moi">Thêm mới tin tức</a>
                    </li>
                    <li><a href="index.php?controller=bai-viet">Danh sách tin tức</a>
                    </li>
                  </ul>
                </li>
                <li class="parent"><a href="#"><i class="icon mdi mdi-dot-circle"></i><span>Khách hàng</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=khach-hang">Danh sách khách hàng</a>
                    </li>
                    <li><a href="index.php?controller=don-hang">Danh sách đơn hàng</a>
                    </li>
                    <li><a href="index.php?controller=phan-hoi">Danh sách phản hồi</a>
                    </li>
                  </ul>
                </li>
                <li class="divider">Quản lí</li>
                <li class="parent"><a href="#"><i class="icon mdi mdi-inbox"></i><span>Quản lí nhân viên</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=nhan-vien">Danh sách nhân viên</a>
                    </li>
                    <li><a href="index.php?controller=nhan-vien&view=them-moi">Thêm mới nhân viên</a>
                    </li>
                  </ul>
                </li>
                <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Quản lí hình ảnh</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=favicon">Favicon</a>
                    </li>
                    <li><a href="index.php?controller=slide">Slide</a>
                    </li>
                    <li><a href="index.php?controller=logo">Logo</a>
                    </li>
                  </ul>
                </li>
                <li class="parent"><a href="#"><i class="icon mdi mdi-pin"></i><span>Quản lí liên hệ</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=lien-he">Liên hệ </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="be-content">
      <?php 
            $controller = isset($_GET['controller']) ? $_GET['controller'] : 'main';
            // $view = $_GET['view'];
            $view = isset($_GET['view']) ? $_GET['view'] : 'index';
            // sử dụng hàm include hoặc require để goi vile view vào đây
            include 'modules/'.$controller.'/'.$view.'.php';
          ?>
      </div>
    </div>
    <script src="public/assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="public/assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <script src="public/assets/js/main.js" type="text/javascript"></script>
    <script src="public/assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="public/assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="public/assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="public/assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="public/assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="public/assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="public/assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="public/assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="public/assets/lib/jqvmap/jquery.vmap.min.js" type="text/javascript"></script>
    <script src="public/assets/lib/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
    <script src="public/assets/js/app-dashboard.js" type="text/javascript"></script>
    <!-- TiniMCE -->
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
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