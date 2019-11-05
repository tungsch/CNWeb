<div class="card">
	<h4 class="card-header">Danh sách loại sách</h4>
	<div class="card-body">
		<p><a class="btn btn-primary" href="index.php?action=loaisach_them" role="button">Thêm loại sách</a></p>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th width="5%">#</th>
					<th width="85%">Tên loại sách</th>
					<th width="5%">Sửa</th>
					<th width="5%">Xóa</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($loaisach as $value)
					{
						echo "<tr>";
							echo "<th>{$value['ID']}</th>";
							echo "<td>{$value['TenLoai']}</td>";
							echo "<td class='text-center'><a href='index.php?action=loaisach_sua&id={$value['ID']}'>Sửa</a></td>";
							echo "<td class='text-center'><a onclick='return confirm(\"Bạn có muốn xóa loại sách {$value['TenLoai']}?\")' href='index.php?action=loaisach_xoa&id={$value['ID']}'>Xóa</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
</div>