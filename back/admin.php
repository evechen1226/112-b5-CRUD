<link rel="stylesheet" href="../css/back.css">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3">
	<h3 class="mt-3">帳號管理</h3>
	<button class="btn btn-green ms-auto" type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')"><i class="fa-solid fa-plus"></i></button>

</div>

<form method="post" action="./api/edit.php">
	<table width="100%" class="table table-striped text-center align-middle">
		<tbody>
			<tr class="">
				<td class="">帳號</td>
				<td class="">密碼</td>
				<td class="">姓氏</td>
				<td class="">名字</td>
				<td class="">刪除</td>
			</tr>
			<?php

			$rows = $Admin->all();
			foreach ($rows as $row) {
			?>
				<tr>
					<td>
						<input class="form-control" type="text" name="acc[]" value="<?= $row['acc']; ?>">
						<input type="hidden" name="id[]" value="<?= $row['id'] ?>">
					</td>

					<td><input class="form-control" type="text" name="pw[]" value="<?= $row['pw']; ?>">
					</td>
					<td><input class="form-control" type="text" name="surname[]" value="<?= $row['surname']; ?>">
					</td>
					<td><input class="form-control" type="text" name="name[]" value="<?= $row['name']; ?>">
					</td>

					<td><input class="form-check-input mt-0 " type="checkbox" name="del[]" value="<?= $row['id']; ?>">
					</td>

				</tr>
			<?php
			} ?>
		</tbody>
	</table>


	<div class="container text-center">
		<input type="hidden" name="table" value="<?= $do; ?>">
		<div class="row">
			<div class="col">
				<input class="btn btn-warning" type="submit" value="修改確定">
				<input class="btn btn-warning" type="reset" value="重置">
			</div>
		</div>
	</div>

</form>
</div>