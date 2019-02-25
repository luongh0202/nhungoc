<?php 
  	$categoryid = $_GET['ma_sp'];
    $sql2 = "SELECT * FROM Products where catid=".$categoryid;
    $products = $conn->prepare($sql2);
    $products->execute();
    $product =  $products->fetch(PDO::FETCH_OBJ);
?>
		<div class="container">
			<div class="single">
				<div class="col-md-9 top-in-single">
					<div class="col-md-5 single-top">	
						<ul id="etalage">
							<li>
								<a href="optionallink.html">
									<img class="etalage_thumb_image img-responsive" src="uploads/<?php echo $product->productimage; ?>" alt="" >
									<img class="etalage_source_image img-responsive" src="uploads/<?php echo $product->productimage; ?>" alt="" >
								</a>
							</li>
						</ul>
					</div>	
					<div class="col-md-7 single-top-in">
						<div class="single-para">
							<h4><?php echo $product->productname;?></h4>
							<div class="para-grid">
								<span  class="add-to"><?php echo $product->productprice;?>VNĐ</span>
								<a href="index.php?controller=san-pham&view=add-cart&ma_sp=<?php echo $product->productid;?>" class="hvr-shutter-in-vertical cart-to">Thêm vào giỏ hàng</a>					
								<div class="clearfix"></div>
							 </div>
							<h5><?php echo $product->producttotal;?> sản phẩm trong kho</h5>
							<p><?php echo $product->productdescription;?></p>
						</div>
					</div>
				<div class="clearfix"> </div>
				</div>
				<div class="col-md-3">
					<div class="single-bottom">
						<h4>Thể Loại</h4>
						<ul>
					<?php
                        $stmt = $conn->prepare("SELECT * FROM Categorys"); 
                        $stmt->execute();
                        $categorys =  $stmt->fetchAll(PDO::FETCH_OBJ);
                    ?>
                    <?php foreach ($categorys as $category) {?>
                    <li><a href="index.php?controller=danh-muc&view=index&ma_dm=<?php echo $category->categoryid; ?>"><?php echo $category->categoryname; ?></a></li>
                    <?php } ?>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
