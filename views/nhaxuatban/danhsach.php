<div class="card">
	<h4 class="card-header">Danh sách nhà xuất bản</h4>
	<div class="card-body">
		<p><a class="btn btn-primary" href="index.php?action=nhaxuatban_them" role="button">Thêm nhà xuất bản</a></p>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="5%">#</th>
					<th width="85%">Tên nhà xuất bản</th>
					<th width="5%">Sửa</th>
					<th width="5%">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($nhaxuatban as $value)
					{
						echo "<tr>";
							echo "<th>{$value['ID']}</th>";
							echo "<td>{$value['TenNhaXB']}</td>";
							echo "<td class='text-center'><a href='index.php?action=nhaxuatban_sua&id={$value['ID']}'>Sửa</a></td>";
							echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa nhà xuất bản {$value['TenNhaXB']}?\")' href='index.php?action=nhaxuatban_xoa&id={$value['ID']}'>Xóa</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>