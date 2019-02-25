<?php 

// Bước 2: truy vấn dữ liệu tới bảng danh_muc
// mysqli_query($conn,"Lệnh truy vấn")

$ketqua = mysqli_query($conn,"SELECT * FROM danh_muc");
// Câu lện tru vấn trả về thoongt tin cần thiết như: num_rows =? số dòng hiện đang có trong abngr danh_mục 
// var_dump($ketqua);
// Lấy ra tổng số dòng đang có mysqli_num_rows($ketqua)
$tong_so = mysqli_num_rows($ketqua);

?>
<div class="danh-sach">
	<div class="panel panel-success">
		<!-- Default panel contents -->
		<div class="panel-heading">Danh sách danh mục ( Đang có <?php echo $tong_so; ?> ) danh mục</div>
		<div class="panel-body">
			<form action="" method="POST" class="form-inline" role="form">
				<div class="form-group">
					<input type="email" class="form-control" id="" placeholder="Nhập từ khóa tìm kiếm">
				</div>
				<button type="submit" class="btn btn-primary">Tìm</button>
				<a href="index.php?controller=danh-muc&view=them-moi" class="btn btn-sm btn-success pull-right">
					<span class="glyphicon glyphicon-plus"></span> Thêm mới
				</a>
			</form>
			
			<!-- Table -->
			<table class="table">
				<thead>
					<tr>
						<th style="text-align:center">Mã</th>
						<th>Tên</th>
						<th>Danh mục cha</th>
						<th style="text-align:center">Trạng thái</th>
						<th style="text-align:center">Lựa chọn</th>
					</tr>
					
				</thead>
				<tbody>
				<!-- Duyệt dữ liệu theo cấu trúc của bản sử dung vòng lặp while -->
				<?php while ($dong = mysqli_fetch_assoc($ketqua)) { ?>
					<tr>
						<td style="text-align:center">
							<?php echo $dong['Ma_dm']; ?>
						</td>
						<td><?php echo $dong['Ten_dm']; ?></td>
						<td><?php echo $dong['Ma_dm_cha']; ?></td>
						<td style="text-align:center">
							<?php if ($dong['Trang_thai'] == 1) { ?>
								<label class="label label-success">Đã kích hoạt</label>
							<?php }else{ ?>
								<label class="label label-danger">Ko kích hoạt</label>
						<?php } ?>
						</td>
						<td style="text-align:center">
							<a href="#" class="btn btn-xs btn-success">
								<span class="glyphicon glyphicon-pencil"></span> Sửa
							</a>	
							<a href="#" class="btn btn-xs btn-primary">
								<span class="glyphicon glyphicon-eye-open"></span> Xem
							</a>	
							<a href="#" class="btn btn-xs btn-danger">
								<span class="glyphicon glyphicon-trash"></span> Xóa
							</a>	
						</td>
					</tr>
				<?php } ?>
					
				</tbody>
			</table>
		</div>
	
		
	</div>
</div>