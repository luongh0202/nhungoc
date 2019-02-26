<?php
include 'common/connect_db.php';
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
    <title>Như Ngọc Chuyên Order</title>
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
          <div class="page-title"><span>Như Ngọc Chuyên Orders</span></div>
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
                <li class="parent"><a href="charts.html"><i class="icon mdi mdi-chart-donut"></i><span>Thống kê toàn bộ đơn hàng</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=order&view=insert">Thêm mới đơn hàng</a>
                    </li>
                    <li><a href="index.php?controller=order&view=index">Danh sách đơn hàng</a>
                    </li>
                  </ul>
                </li>
                <li class="parent"><a href="#"><i class="icon mdi mdi-view-web"></i><span>Thống kê chưa hoàn thành</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=order-loading&view=them-moi">Số đơn hàng đang order</a>
                    </li>
                    <li><a href="index.php?controller=order-loading&view=them-moi">Số đơn hàng đang ship</a>
                    </li>
                  </ul>
                </li>
                <li class="parent"><a href="#"><i class="icon mdi mdi-face"></i><span>Thống kê đã hoàn thành</span></a>
                  <ul class="sub-menu">
                    <li><a href="index.php?controller=san-pham&view=them-moi">Thêm sản phẩm</a>
                    </li>
                    <li><a href="index.php?controller=san-pham">Danh sách sản phẩm</a>
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
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      });
    </script>
  </body>
</html>