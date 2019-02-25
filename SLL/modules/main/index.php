           <div class="banner-mat">
        <div class="container">
            <div class="banner">
                <!-- Slideshow 4 -->
               <div class="slider">
            <ul class="rslides" id="slider1">
              <li><img src="public/images/adidasnam5.jpg" alt="">
              </li>
              <li><img src="public/images/adidasnam6.jpg" alt="">
              </li>
              <li><img src="public/images/adidasman.jpg" alt="">
              </li>
              <li><img src="public/images/banner2.jpg" alt="">
              </li>
            </ul>
        </div>
                <div class="banner-bottom">
                    <div class="banner-matter">
                    </div>
                    <div class="purchase">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>              
            <!-- //slider-->
        </div>
    </div>
        <div class="container">
            <div class="content">
                                <div class="content-middle">
                    <h3 class="future">BRANDS</h3>
                    <div class="content-middle-in">
                    <ul id="flexiselDemo1">         
                        <li><img src="public/images/ap.png"/></li>
                        <li><img src="public/images/ap1.png"/></li>
                        <li><img src="public/images/ap2.png"/></li>
                        <li><img src="public/images/ap3.png"/></li>
                    
                    </ul>
                    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });
    </script>
    <script type="text/javascript" src="public/js/jquery.flexisel.js"></script>

                    </div>
                </div>
                <div class="content-top">
                    <h3 class="future">Sản phẩm mới nhất</h3>
                    <div class="content-top-in">
                    <?php 
                        $products1 = $conn->prepare("SELECT * FROM Products ORDER BY created_at ASC LIMIT 4"); 
                        $products1->execute();
                        $products1 =  $products1->fetchAll(PDO::FETCH_OBJ);
                    ?>
                    <?php foreach ($products1 as $product) {?>
                    <div class="col-md-3 md-col text-center">
                        <div class="col-md">
                            <span class="dollar"><?php echo $product->productprice;?><span class="in-dollar">VNĐ</span></span>
                            <span>---</span><span>Sale:</span>
                            <span class="dollar"><?php echo $product->productsale;?><span class="in-dollar">VNĐ</span></span>
                            <a href="index.php?controller=san-pham&view=index&ma_sp=<?php echo $product->productid;?>"><img  src="uploads/<?php echo $product->productimage;?>" alt="" /></a>
                            <div class="top-content">
                                <h5><a href="public/single.html"><?php echo $product->productname;?></a></h5>
                                <div class="white">
                                    <a href="index.php?controller=san-pham&view=add-cart&ma_sp=<?php echo $product->productid;?>" class=" text-center hvr-shutter-in-vertical hvr-shutter-in-vertical2 ">Thêm vào giỏ hàng</a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php };?>
                    <div class="clearfix"></div>
                    </div>
                </div>
                <!---->

                <!---->
                <div class="content-bottom">
                    <h3 class="future">Có thể bạn muốn mua</h3>
                    <div class="content-bottom-in">
                    <?php 
                        $products2 = $conn->prepare("SELECT * FROM products ORDER BY RAND() LIMIT 10;"); 
                        $products2->execute();
                        $products2 =  $products2->fetchAll(PDO::FETCH_OBJ);
                    ?>
                    <ul id="flexiselDemo2">
                    <?php foreach ($products1 as $product) {?>     
                        <li><div class="col-md men text-center">
                                <a href="index.php?controller=san-pham&view=add-cart&ma_sp=<?php echo $product->productid;?>" class="compare-in "><img  src="uploads/<?php echo $product->productimage;?>" alt="" />
                                <div class="compare in-compare"><span>THÊM VÀO GIỎ HÀNG</span></div></a>
                                <div class="top-content bag">
                                    <h5><a href="index.php?controller=san-pham&view=index&ma_sp=<?php echo $product->productid;?>"><?php echo $product->productname;?></a></h5>
                                    <div class="white">
                                    <span class="dollar"><?php echo $product->productprice;?><span class="in-dollar">VNĐ</span></span>
                                    <span>---</span><span>Sale:</span>
                                    <span class="dollar"><?php echo $product->productsale;?><span class="in-dollar">VNĐ</span></span>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>                          
                            </div>
                        </li>
                    <?php };?>
                    </ul>
                    <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo2").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                // autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems: 2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 3
                    }
                }
            });
            
        });
    </script>
                    </div>
                </div>
            </div>
        </div>