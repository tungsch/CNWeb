<?php
	if(isset($_GET['action']))
	{
		switch($_GET['action'])
		{
			// Người dùng
			case "dangky":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$ctr->getThem();
				break;
			case "dangky_xuly":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$request = array(
					'HoVaTen' => $_POST['HoVaTen'],
					'TenDangNhap' => $_POST['TenDangNhap'],
					'MatKhau' => $_POST['MatKhau'],
					'QuyenHan' => 2,
					'Khoa' => 0
				);
				$ctr->postThem($request);
				break;
			case "dangnhap":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$ctr->getDangNhap();
				break;
			case "dangnhap_xuly":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$request = array(
					'TenDangNhap' => $_POST['TenDangNhap'],
					'MatKhau' => $_POST['MatKhau'],
				);
				$ctr->postDangNhap($request);
				break;
			case "dangxuat":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$ctr->getDangXuat();
				break;
			case "nguoidung":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$ctr->getDanhSach();
				break;
			case "nguoidung_sua":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$id = $_GET['id'];
				$ctr->getSua($id);
				break;
			case "nguoidung_sua_xuly":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$request = array(
					'HoVaTen' => $_POST['HoVaTen'],
					'TenDangNhap' => $_POST['TenDangNhap'],
					'MatKhau' => $_POST['MatKhau'],
					'QuyenHan' => $_POST['QuyenHan'],
					'Khoa' => $_POST['Khoa']
				);
				$ctr->postSua($request);
				break;
			case "nguoidung_xoa":
				include_once "controllers/nguoidung.php";
				$ctr = new NguoiDungController();
				$id = $_GET['id'];
				$ctr->getXoa($id);
				break;
			
			// Loại sách
			case "loaisach":
				include_once "controllers/loaisach.php";
				$ctr = new LoaiSachController();
				$ctr->getDanhSach();
				break;
			case "loaisach_them":
				include_once "controllers/loaisach.php";
				$ctr = new LoaiSachController();
				$ctr->getThem();
				break;
			case "loaisach_them_xuly":
				include_once "controllers/loaisach.php";
				$ctr = new LoaiSachController();
				$request = array('TenLoai' => $_POST['TenLoai']);
				$ctr->postThem($request);
				break;
			case "loaisach_sua":
				include_once "controllers/loaisach.php";
				$ctr = new LoaiSachController();
				$id = $_GET['id'];
				$ctr->getSua($id);
				break;
			case "loaisach_sua_xuly":
				include_once "controllers/loaisach.php";
				$ctr = new LoaiSachController();
				$request = array(
					'ID' => $_POST['ID'],
					'TenLoai' => $_POST['TenLoai']);
				$ctr->postSua($request);
				break;
			case "loaisach_xoa":
				include_once "controllers/loaisach.php";
				$ctr = new LoaiSachController();
				$id = $_GET['id'];
				$ctr->getXoa($id);
				break;
			
			// Nhà xuất bản
			case "nhaxuatban":
				include_once "controllers/nhaxuatban.php";
				$ctr = new NhaXuatBanController();
				$ctr->getDanhSach();
				break;
			case "nhaxuatban_them":
				include_once "controllers/nhaxuatban.php";
				$ctr = new NhaXuatBanController();
				$ctr->getThem();
				break;
			case "nhaxuatban_them_xuly":
				include_once "controllers/nhaxuatban.php";
				$ctr = new NhaXuatBanController();
				$request = array('TenNhaXB' => $_POST['TenNhaXB']);
				$ctr->postThem($request);
				break;
			case "nhaxuatban_sua":
				include_once "controllers/nhaxuatban.php";
				$ctr = new NhaXuatBanController();
				$id = $_GET['id'];
				$ctr->getSua($id);
				break;
			case "nhaxuatban_sua_xuly":
				include_once "controllers/nhaxuatban.php";
				$ctr = new NhaXuatBanController();
				$request = array(
					'ID' => $_POST['ID'],
					'TenNhaXB' => $_POST['TenNhaXB']);
				$ctr->postSua($request);
				break;
			case "nhaxuatban_xoa":
				include_once "controllers/nhaxuatban.php";
				$ctr = new NhaXuatBanController();
				$id = $_GET['id'];
				$ctr->getXoa($id);
				break;
			
			// Sách
			case "sach":
				include_once "controllers/sach.php";
				$ctr = new SachController();
				$ctr->getDanhSach();
				break;
			case "sach_them":
				include_once "controllers/sach.php";
				$ctr = new SachController();
				$ctr->getThem();
				break;
			case "sach_them_xuly":
				include_once "controllers/sach.php";
				$ctr = new SachController();
				$request = array(
					'TenSach' => $_POST['TenSach'],
					'MaLoai' => $_POST['MaLoai'],
					'MaNhaXB' => $_POST['MaNhaXB'],
					'DonGia' => $_POST['DonGia'],
					'SoLuong' => $_POST['SoLuong'],
					'HinhAnh' => $_POST['HinhAnh'],
					'MoTa' => $_POST['MoTa']
				);
				$ctr->postThem($request);
				break;
			case "sach_sua":
				include_once "controllers/sach.php";
				$ctr = new SachController();
				$id = $_GET['id'];
				$ctr->getSua($id);
				break;
			case "sach_sua_xuly":
				include_once "controllers/sach.php";
				$ctr = new SachController();
				$request = array(
					'ID' => $_POST['ID'],
					'TenSach' => $_POST['TenSach'],
					'MaLoai' => $_POST['MaLoai'],
					'MaNhaXB' => $_POST['MaNhaXB'],
					'DonGia' => $_POST['DonGia'],
					'SoLuong' => $_POST['SoLuong'],
					'HinhAnh' => $_POST['HinhAnh'],
					'MoTa' => $_POST['MoTa']
				);
				$ctr->postSua($request);
				break;
			
			default:
				include_once "views/home.php";
				break;
		}
	}
	else
		include_once "views/home.php";
?>