<div class="card">
	<h4 class="card-header">Danh sách người dùng</h4>
	<div class="card-body">
		<p><a class="btn btn-primary" href="index.php?action=dangky" role="button">Thêm người dùng</a></p>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="5%">#</th>
					<th width="35%">Họ và tên</th>
					<th width="20%">Tên đăng nhập</th>
					<th width="20%">Quyền hạn</th>
					<th width="10%">Khóa</th>
					<th width="5%">Sửa</th>
					<th width="5%">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($nguoidung as $value)
					{
						echo "<tr>";
							echo "<th>{$value['ID']}</th>";
							echo "<td>{$value['HoVaTen']}</td>";
							echo "<td>{$value['TenDangNhap']}</td>";
							echo "<td>{$value['QuyenHan']}</td>";
							echo "<td>{$value['Khoa']}</td>";
							echo "<td class='text-center'><a href='index.php?action=nguoidung_sua&id={$value['ID']}'>Sửa</a></td>";
							echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa nguoidung {$value['HoVaTen']}?\")' href='index.php?action=nguoidung_xoa&id={$value['ID']}'>Xóa</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>