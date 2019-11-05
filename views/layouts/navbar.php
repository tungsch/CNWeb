<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#00bfff;">
	<a class="navbar-brand" href="index.php">
		<img src="public/images/library.png" width="30" height="30" class="d-inline-block align-top" alt="" />
		Bán Sách
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active"><a class="nav-link" href="#">Trang chủ</a></li>
		</ul>
		<ul class="navbar-nav ml-auto">
			<?php
				if(!isset($_SESSION['ID']))
				{
			?>
					<li class="nav-item"><a class="nav-link" href="index.php?action=dangnhap">Đăng nhập</a></li>
					<li class="nav-item"><a class="nav-link" href="index.php?action=dangky">Đăng ký</a></li>
			<?php
				}
				else
				{
			?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['HoVaTen']; ?></a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?action=doimatkhau">Đổi mật khẩu</a>
							<a class="dropdown-item" href="index.php?action=capnhathoso">Cập nhật hồ sơ</a>
							<a class="dropdown-item" href="index.php?action=lichsumuahang">Lịch sử mua hàng</a>
						</div>
					</li>
					
					<?php
						if($_SESSION['QuyenHan'] == 1)
						{
					?>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-cog"></i> Quản lý</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="index.php?action=sach">Quản lý sách</a>
							<a class="dropdown-item" href="index.php?action=loaisach">Quản lý loại sách</a>
							<a class="dropdown-item" href="index.php?action=nhaxuatban">Quản lý nhà xuất bản</a>
							<a class="dropdown-item" href="index.php?action=dathang">Quản lý đặt hàng</a>
							<a class="dropdown-item" href="index.php?action=nguoidung">Quản lý người dùng</a>
						</div>
					</li>
					<?php
						}
					?>
					<li class="nav-item"><a class="nav-link" href="index.php?action=dangxuat">Đăng xuất</a></li>
			<?php
				}
			?>
		</ul>
	</div>
</nav>