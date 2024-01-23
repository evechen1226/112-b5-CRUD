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
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-2">
	<h3 class="mt-3">頁尾版權資料管理</h3>
</div>
<form method="post" action="./api/edit_info.php">
	<table width="80%" class="table table-striped text-center align-middle">
		<tbody>
			<tr>
				<td class="col-2">頁尾版權資料管理</td>
				<td class="col-10 bg-color">
					<input class="form-control text-center w-100" type="text" name="bottom" value="<?= $Bottom->find(1)['bottom']; ?>">
					<input type="hidden" name="table" value="<?= $do; ?>">
				</td>
				<td></td>
			</tr>
		</tbody>
	</table>
	<div class="container text-center mb-3">
		<div class="row">
			<div class="col">
				<input class="btn btn-warning" type="submit" value="修改確定">
				<input class="btn btn-warning" type="reset" value="重置">
			</div>
		</div>
	</div>
	<input type="hidden" name="table" value="<?= $do; ?>">


</form>