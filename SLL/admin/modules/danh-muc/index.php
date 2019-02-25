<?php 
	$stmt = $conn->prepare("SELECT * FROM Categorys"); 
    $stmt->execute();
    $categorys =  $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<div class="col-sm-12">
	<div class="panel panel-default panel-table">
		<div class="panel-body">
			<table class="table">
				<thead>
					<tr>
						<th style="width:50%;">Tên</th>
						<th style="width:10%;">Thao tác</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($categorys as $category) {?>
						<tr>
							<td><?php echo $category->categoryname; ?></td>
							<td>
								<a href="index.php?controller=danh-muc&view=xoa&Ma_dm=<?php echo $category->categoryid; ?>" class="btn btn-space btn-danger" name="delete" onclick="confirm('Bạn có muốn xóa danh mục: '+'<?php echo $category->categoryname;?>')">Xóa</a> 
								<a href="index.php?controller=danh-muc&view=sua&Ma_dm=<?php echo $category->categoryid; ?>" class="btn btn-space btn-primary">Sửa</a>
							</td>
						</tr> 
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>