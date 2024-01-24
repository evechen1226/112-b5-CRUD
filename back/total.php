<link rel="stylesheet" href="../css/back.css">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 my-2">
	<h3 class="mt-3">進站總人數管理</h3>
</div>
<div>
	<form method="post" action="./api/edit_total.php">
	<table width="80%" class="table table-striped text-center align-middle">
			<tbody>
				<tr>
					<td>進站總人數管理</td>
					<td>				
					<input class="form-control text-center" type="number" name="total" value="<?= $Total->find(1)['total']; ?>">
					<input class="form-control text-center" type="hidden" name="table" value="total">
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
	</div>