<?php
  	$categoryid = $_GET['ma_dm'];
    $sql2 = "SELECT * FROM Products where catid=".$categoryid;
    $products = $conn->prepare($sql2);
    $products->execute();
    $products =  $products->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container">
	<div class="products">
		<?php
		    $sql1 = "SELECT * FROM categorys where categoryid=".$categoryid;
		    $category = $conn->prepare($sql1); 
		    $category->execute();
		    $category =  $category->fetch(PDO::FETCH_OBJ);
		?>
			<h2 class=" products-in"><?php echo $category->categoryname; ?></h2>
			<div class=" top-products">
			<?php foreach($products as $product) {?>
				<div class="col-md-3 md-col" style="padding-bottom: 20px;">
					<div class="col-md">
                            <span class="dollar"><?php echo $product->productprice;?><span class="in-dollar">VNĐ</span></span>
                            <span>---</span><span>Sale:</span>
                            <span class="dollar"><?php echo $product->productsale;?><span class="in-dollar">VNĐ</span></span>
						<a href="index.php?controller=san-pham&view=add-cart&ma_sp=<?php echo $product->productid;?>" class="compare-in"><img  src="uploads/<?php echo $product->productimage; ?>" alt="" />
						<div class="compare">
							<span>THÊM VÀO GIỎ HÀNG</span>
						</div>
						</a>	
						<div class="top-content">
							<h5><a href="single.html"><?php echo $product->productname; ?></a></h5>
							<div class="white">
								<a href="index.php?controller=san-pham&view=index&ma_sp=<?php echo $product->productid;?>" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">Chi Tiết sản phẩm</a>
								<div class="clearfix"></div>
							</div>
						</div>							
					</div>
				</div>
			<?php }?>
			</div>
	</div>
</div>