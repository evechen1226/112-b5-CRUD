<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">管理者帳號管理</p>
	<!-- <form method="post" target="back" action="?do=tii"> -->
	<form method="post" action="../api/edit.php">
		<table width="100%">
			<tbody>
				<tr class="yel">
					<td width="20%">帳號</td>
					<td width="20%">密碼</td>
					<td width="20%">姓氏</td>
					<td width="20%">名字</td>
					<td class="ct" width="5%">刪除</td>
				</tr>
				<?php

				$rows = $Admin->all();
				foreach ($rows as $row) {
				?>
					<tr>
						<td>
							<input type="text" name="acc[]" value="<?= $row['acc']; ?>" style="width:90%">
							<input type="hidden" name="id[]" value="<?= $row['id'] ?>">
						</td>

						<td><input type="text" name="pw[]" value="<?= $row['pw']; ?>" style="width:90%">
						</td>
						<td><input type="text" name="pw[]" value="<?= $row['surname']; ?>" style="width:90%">
						</td>
						<td><input type="text" name="pw[]" value="<?= $row['name']; ?>" style="width:90%">
						</td>

						<td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
						</td>

					</tr>
				<?php
				} ?>
			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<input type="hidden" name="table" value="<?= $do; ?>">
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動態文字廣告"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>