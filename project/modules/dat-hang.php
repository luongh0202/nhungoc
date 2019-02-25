<div class="panel panel-success">
	<div class="panel-heading">
		<h3 class="panel-title">Tiến hành đặt hàng</h3>
	</div>
	<div class="panel-body">
		<?php if($kh) : ?>

	<form action="" method="POST" role="form">
		<div class="col-md-6">
			<h3>Thông tin người mua</h3>

			
				<div class="form-group">
					<label  for="Ten_kh">Họ và tên</label>
					<input type="text" class="form-control" id="Ten_kh" name="Ten_kh" value="<?php echo $kh['Ten_kh'] ?>">
				</div>
				<div class="form-group">
					<label  for="Email">Địa chỉ email</label>
					<input type="text" class="form-control" id="Email" name="Email" value="<?php echo $kh['Email'] ?>">
				</div>
			
				<div class="form-group">
					<label  for="Dien_thoai">Điện thoại</label>
					<input type="text" class="form-control" id="Dien_thoai" name="Dien_thoai" value="<?php echo $kh['Dien_thoai'] ?>">
				</div>
				<div class="form-group">
					<label  for="Dia_chi">Địa chỉ</label>
					<input type="text" class="form-control" id="Dia_chi" name="Dia_chi" value="<?php echo $kh['Dia_chi'] ?>">
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
			
		</div>
		<div class="col-md-6">
			<h3>Thông tin người nhận</h3>
				<div class="form-group">
					<div class="checkbox">
						<label>
							<input type="checkbox" value="true" id="isme">
							Tôi là người nhận
						</label>
					</div>
				</div>
				<div class="form-group">
					<label  for="Ten_nhan">Họ và tên</label>
					<input type="text" class="form-control" id="Ten_nhan" name="Ten_nhan">
				</div>
				<div class="form-group">
					<label  for="Email_nhan">Địa chỉ email</label>
					<input type="text" class="form-control" id="Email_nhan" name="Email_nhan">
				</div>
			
				<div class="form-group">
					<label  for="Dien_thoai_nhan">Điện thoại</label>
					<input type="text" class="form-control" id="Dien_thoai_nhan" name="Dien_thoai_nhan">
				</div>
				<div class="form-group">
					<label  for="Dia_chi_nhan">Địa chỉ</label>
					<input type="text" class="form-control" id="Dia_chi_nhan" name="Dia_chi_nhan">
				</div>
			
			
		</div>
	</form>
	
	<?php else: ?>
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Vui lòng đăng nhập hoặc đang ký tài khoản</strong> 
			<a href="index.php?module=dang-nhap" class="label label-success">Đăng nhập</a>
			hoặc 
			<a href="index.php?module=dang-ky" class="label label-primary">Đăng ký</a>
		</div>
	<?php endif; ?>
	</div>
</div>