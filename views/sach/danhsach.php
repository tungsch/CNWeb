<div class="card">
	<h4 class="card-header">Danh sách sách</h4>
	<div class="card-body">
		<p><a class="btn btn-primary" href="index.php?action=sach_them" role="button">Thêm sách</a></p>
		<table class="table table-bordered table-sm">
			<thead>
				<tr>
					<th width="5%">#</th>
					<th width="10%">Ảnh bìa</th>
					<th width="30%">Tên sách</th>
					<th width="15%">Thể loại</th>
					<th width="15%">NXB</th>
					<th width="5%">SL</th>
					<th width="10%">Đơn giá</th>
					<th width="5%">Sửa</th>
					<th width="5%">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($sach as $value)
					{
						echo "<tr>";
							echo "<th>{$value['ID']}</th>";
							echo "<td class='text-center'><img src='storage/images/{$value['HinhAnh']}' width='80' class='img-thumbnail' /></td>";
							echo "<td>{$value['TenSach']}</td>";
							echo "<td>{$value['TenLoai']}</td>";
							echo "<td>{$value['TenNhaXB']}</td>";
							echo "<td>{$value['SoLuong']}</td>";
							echo "<td class='text-right'>".number_format($value['DonGia'])."</td>";
							echo "<td class='text-center'><a href='index.php?action=sach_sua&id={$value['ID']}'>Sửa</a></td>";
							echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa sách {$value['TenSach']}?\")' href='index.php?action=sach_xoa&id={$value['ID']}'>Xóa</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>