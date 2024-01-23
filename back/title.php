<style>
	img {
		width: 200px;
		height: 100px;
	}

	.form-check-input {
		scale: 1.2;
		border: 1px solid lightslategray;
	}

	.btn-green {
		background-color: #54deca;
	}

	.btn-green:hover {
		background-color: #1E9D8A;
		color: white;
	}

	.btn-green:active {
		background-color: #1E9D8A !important;
		color: white !important;
	}

	.form-check-input:checked[type="checkbox"] {
		background-color: #1E9D8A;

	}

	.form-check-input:checked[type="radio"] {
		background-color: #1E9D8A;
	}
</style>
<div>
	

	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3">
		<h3 class="mt-3">網站標題管理</h3>
		<button class="btn btn-green ms-auto" type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增網站標題圖片"><i class="fa-solid fa-plus"></i></button>
	</div>


	<form method="post" action="./api/edit.php">
		<table width="100%" class="table table-striped text-center align-middle">
			<tbody>
				<thead>
					<tr>
						<th class="col">網站標題</th>
						<th class="col">替代文字</th>
						<th class="col">顯示</th>
						<th class="col">刪除</th>
						<th class="col"></th>
					</tr>
				</thead>
				<?php $rows = $Title->all();
				foreach ($rows as $row) {
				?>
					<tr>
						<td>
							<img class="rounded" src="./img/<?= $row['img']; ?>" alt="">
						</td>

						<td>
							<input class="form-control" type="text" name="text[]" value="<?= $row['text']; ?>" style="width:90%">
							<input type="hidden" name="id[]" value="<?= $row['id']; ?>">
						</td>

						<td class="">
							<input class="form-check-input mt-0 " type="radio" name="sh[]" value="<?= $row['id']; ?>"  <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
						</td>

						<td>
							<input class="form-check-input mt-0" type="checkbox" name="del[]" value="<?= $row['id']; ?>">
						</td>

						<td>
							<input class="btn btn-green" type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')" value="更新圖片">
						</td>
					</tr>
				<?php
				} ?>
			</tbody>
		</table>
		<div class="container text-center">
			<div class="row">
				<div class="col">
					<input class="btn btn-warning" type="submit" value="修改確定">
					<input class="btn btn-warning" type="reset" value="重置">
				</div>
			</div>
		</div>
		<input type="hidden" name="table" value="<?= $do; ?>">
	</form>
</div>