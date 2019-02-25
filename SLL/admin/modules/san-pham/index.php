<?php 
	$stmt = $conn->prepare("SELECT * FROM Products"); 
    $stmt->execute();
    $products =  $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<div class="col-sm-12">
	<div class="panel panel-default panel-table">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th>Tên</th>
						<th>Ảnh</th>
						<th>Ngày tạo</th>
						<th>Tổng sản phẩm</th>
						<th>Đã bán</th>
						<th>Sản phẩm còn</th>
						<th>Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($products as $product) {?>
						<tr>
							<td><?php echo $product->productname; ?></td>
							<td><img style="width: 300px;" src="../uploads/<?php echo $product->productimage; ?>" alt=""></td>
							<td><?php echo $product->created_at; ?></td>
							<td><?php echo $product->producttotal; ?></td>
							<td><?php echo $product->producttotal; ?></td>
							<td><?php echo $product->producttotal; ?></td>
							<td>
								<a href="index.php?controller=danh-muc&view=xoa&Ma_dm=<?php echo $product->productid; ?>" class="btn btn-space btn-danger" name="delete" onclick="confirm('Bạn có muốn xóa danh mục: '+'<?php echo $product->productname;?>')">Xóa</a> 
								<a href="index.php?controller=danh-muc&view=sua&Ma_dm=<?php echo $product->productid; ?>" class="btn btn-space btn-primary">Sửa</a>
							</td>
						</tr> 
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>