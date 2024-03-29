<link rel="stylesheet" href="../css/back.css">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-3">
	<h3 class="mt-3">最新消息資料管理</h3>

	<button class="btn btn-green ms-auto" type="button" onclick="op('#cover','#cvr','./modal/<?= $do; ?>.php?table=<?= $do; ?>')"><i class="fa-solid fa-plus"></i></button>
</div>
<form method="post" action="./api/edit.php">
	<table width="100%" class="table table-striped text-center align-middle">
		<tbody>
			<tr>
				<th>中文標題</th>
				<th>英文標題</th>
				<th>內容</th>
				<th>按鑽數</th>
				<th>總閱覽數</th>
				<th>發表日期</th>
				<th>顯示</th>
				<th>刪除</th>
				<!-- <th>日期</th> -->
			</tr>
			<?php
			$total = $News->count();
			$div = 5;
			$pages = ceil($total / $div);
			//isset()
			$now = $_GET['p'] ?? 1;
			$strat = ($now - 1) * $div;

			$rows = $News->all("order by date limit $strat,$div");
			foreach ($rows as $row) {
			?>
				<tr>
					<td class="col text-cnter">
						<textarea class="form-control" type="text" name="title[]" id="" style="width:90%;height:60px;"><?= $row['title']; ?></textarea>
						<input type="hidden" name="id[]" value="<?= $row['id']; ?>">

					</td>


					<td class="col text-cnter">
						<textarea class="form-control" type="text" name="eng_title[]" id="" style="width:90%;height:60px;"><?= $row['eng_title']; ?></textarea>

					</td>

					<td class="col text-cnter">
						<textarea class="form-control" type="text" name="text[]" id="" style="width:90%;height:60px;"><?= $row['text']; ?></textarea>
					</td>
					<td class="" style="width:5%;">
						<input class="form-control text-center" type="number" min="0" name="good[]" value="<?= $row['good']; ?>">
					</td>
					<td class="" style="width:8%;">
						<input class="form-control text-center" type="number" min="0" name="total[]" value="<?= $row['total']; ?>">
					</td>
					<td class="" style="width:5%;">
						<input class="form-control text-center" type="date" name="date[]" value="<?= $row['date']; ?>">
					</td>
					<td><input class="form-check-input mt-0 " type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>>
					</td>

					<td><input class="form-check-input mt-0 " type="checkbox" name="del[]" value="<?= $row['id']; ?>">
					</td>

				</tr>
			<?php
			} ?>
		</tbody>
	</table>
	<div class="text-center ">
		<?php
		if ($now >= 1) {
			// echo "<a href='?do=$do&p='".($now-1)."</a>";
			$prev = $now - 1;
			echo "<a class='fs-4 text-decoration-none text-warning' href='?do=$do&p=$prev'> < </a>";
		}
		for ($i = 1; $i <= $pages; $i++) {

			$fontsize = ($now == $i) ? '24px' : '16px';

			echo "<a class='fs-4 text-decoration-none text-warning' href='?do=$do&p=$i'> $i </a>";
		}

		if ($now < $pages) {

			$next = $now + 1;
			echo "<a class='fs-4 text-decoration-none text-warning' href='?do=$do&p=$next'> > </a>";
		}
		?>
	</div>
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