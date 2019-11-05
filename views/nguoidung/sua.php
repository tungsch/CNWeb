<div class="card">
	<h4 class="card-header">Cập nhật thành viên</h4>
	<div class="card-body">
		<form action="index.php?action=dangky_xuly" method="post">
			<div class="form-group">
				<label for="HoVaTen">Họ và tên</label>
				<input type="text" class="form-control" id="HoVaTen" name="HoVaTen" value="<?php echo $nguoidung['HoVaTen']; ?>" placeholder="" required />
			</div>
			<div class="form-group">
				<label for="TenDangNhap">Tên đăng nhập</label>
				<input type="text" class="form-control" id="TenDangNhap" name="TenDangNhap" value="<?php echo $nguoidung['TenDangNhap']; ?>" placeholder="" required />
			</div>
			<div class="form-group">
				<label for="MatKhau">Mật khẩu</label>
				<input type="password" class="form-control" id="MatKhau" name="MatKhau" placeholder="" required />
			</div>
			<div class="form-group">
				<label for="XacNhanMatKhau">Xác nhận mật khẩu</label>
				<input type="password" class="form-control" id="XacNhanMatKhau" name="XacNhanMatKhau" placeholder="" required />
			</div>
			
			<button type="submit" class="btn btn-primary">Đăng ký</button>
		</form>
	</div>
</div>