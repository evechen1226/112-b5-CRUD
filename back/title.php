<style>
	img{
		width: 200px;
		height: 100px;
	}
</style>
<div>
	<h3>網站標題管理</h3>
	<!-- <form method="post" target="back" action="?do=tii"> -->
	<form method="post" action="../api/edit.php">
		<table width="100%" class="table table-striped text-center">
			<tbody>
				<thead>
					<tr">
						<th class="col text-center">網站標題</th>
						<th class="col text-center">替代文字</th>
						<th class="col text-center">顯示</th>
						<th class="col text-center">刪除</th>
						<th class="col text-center"></th>
					</tr>
				</thead>
				<?php $rows = $Title->all();
				foreach ($rows as $row) {
				?>
					<tr>
						<td>
							<img src="./img/<?= $row['img']; ?>" alt="">
						</td>

						<td>
							<input class="form-control" type="text" name="text[]" value="<?= $row['text']; ?>" style="width:90%">
							<input type="hidden" name="id[]" value="<?= $row['id']; ?>">
						</td>

						<td>
							<input class="form-check-input mt-0" type="radio" name="sh[]" value="<?= $row['id']; ?>" id="">
						</td>

						<td>
							<input class="form-check-input mt-0" type="checkbox" name="del[]" value="<?= $row['id']; ?>">
						</td>

						<td>
							<input class="" type="button" onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $do; ?>&id=<?= $row['id']; ?>')" value="更新圖片">
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
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')" value="新增網站標題圖片"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>