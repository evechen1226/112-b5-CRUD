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
	<h3>食材競選內容管理</h3>
	<div class="d-flex"><button class="btn btn-green ms-auto" type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value=" 新增網站標題圖片"><i class="fa-solid fa-plus"></i></button></div>

	<form method="post" action="../api/edit.php">
		<table width="100%" class="table table-striped text-center align-middle">
			<tbody>
				<tr>
					<th class="col">網站標題</th>
					<th class="col">文字內容</th>
					<th class="col">投票數</th>
					<th class="">顯示</th>
					<th class="">刪除</th>
				</tr>
				<?php

				$rows = $Vote->all();
				foreach ($rows as $row) {
				?><tr>
						<td class="col-3"><img class="rounded" src="./img/<?= $row['img']; ?>" alt="">
							<input type="hidden" name="id[]" value="<?= $row['id']; ?>">
						</td>
						<td class="col-5">
							<textarea class="form-control" style="width: 100%;height:100px;" type="text" name="text[]"><?= $row['text']; ?></textarea>
							
						</td>
						<td class="col-1 ">
							<input class="form-control text-center"  type="number" name="vote[]" value="<?= $row['vote']; ?>">
						
						</td>
						<td class="col-1">
							<input class="form-check-input mt-0 " type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
						</td>
						<td class="col-1">
							<input class="form-check-input mt-0 " type="checkbox" name="del[]" value="<?= $row['id']; ?>">
						</td>
					</tr>
				<?php
				} ?>
			</tbody>
		</table>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr><input type="hidden" name="table" value="<?= $do; ?>">
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增動態文字廣告"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>