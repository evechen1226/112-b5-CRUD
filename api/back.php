<?php include_once "./api/db.php";

if (!isset($_SESSION['login'])) {
	to("index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0068)?do=admin&redo=title -->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>卓越科技大學校園資訊系統</title>

	<link href="./css/css.css" rel="stylesheet" type="text/css">
	<script src="./js/jquery-1.9.1.min.js"></script>
	<script src="./js/js.js"></script>
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="lib/animate/animate.min.css" rel="stylesheet">
	<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

	<!-- Customized Bootstrap Stylesheet -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="css/style.css" rel="stylesheet">
</head>

<body>

	<div id="cover" style="display:none; ">
		<div id="coverr">
			<a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
			<div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
		</div>
	</div>
	<!-- <iframe style="display:none;" name="back" id="back"></iframe> -->
	<div id="main">

		<!-- 顯示標題圖片 php -->
		<?php
		$title = $Title->find(['sh' => 1]);
		?>
		<!-- 顯示標題圖片 php END -->

		<a title="<?= $title['text']; ?>" href="index.php">
			<div class="ti" style="background:url('./img/<?= $title['img']; ?>'); background-size:cover;"></div><!--標題-->
		</a>
		<div id="ms">
			<div id="lf" style="float:left;">
				<div id="menuput" class="dbor">
					<!--主選單放此-->
					<span class="t botli">後台管理選單</span>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=title.php">
						<div class="mainmu">
							網站標題管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=ad">
						<div class="mainmu">
							動態文字廣告管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=mvim">
						<div class="mainmu">
							動畫圖片管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=image">
						<div class="mainmu">
							校園映象資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=total">
						<div class="mainmu">
							進站總人數管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=bottom">
						<div class="mainmu">
							頁尾版權資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=news">
						<div class="mainmu">
							最新消息資料管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=admin">
						<div class="mainmu">
							管理者帳號管理 </div>
					</a>
					<a style="color:#000; font-size:13px; text-decoration:none;" href="?do=menu">
						<div class="mainmu">
							選單管理 </div>
					</a>


				</div>
				<div class="dbor" style="margin:3px; width:95%; height:20%; line-height:100px;">
					<span class="t">進站總人數 : <?= $Total->find(1)['total']; ?></span>

				</div>
			</div>
			<div class="di" style="height:540px; border:#999 1px solid; width:76.5%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
				<!--正中央-->
				<table width="100%">
					<tbody>
						<tr>
							<td style="width:70%;font-weight:800; border:#333 1px solid; border-radius:3px;" class="cent"><a href="?do=admin" style="color:#000; text-decoration:none;">後台管理區</a>
							</td>
							<td><button onclick="location.href='./api/logout.php'" style="width:99%; margin-right:2px; height:50px;">管理登出</button></td>
						</tr>
					</tbody>
				</table>
				<!-- back/title.php -->
				<?php
				$do = $_GET['do'] ?? 'title';
				$file = "./back/{$do}.php";
				if (file_exists($file)) {
					include $file;
				} else {
					include "./back/title.php";
				}
				?>

				<!-- back/title.php end-->
			</div>
			<div id="alt" style="position: absolute; width: 350px; min-height: 100px; word-break:break-all; text-align:justify;  background-color: rgb(255, 255, 204); top: 50px; left: 400px; z-index: 99; display: none; padding: 5px; border: 3px double rgb(255, 153, 0); background-position: initial initial; background-repeat: initial initial;">
			</div>
			<script>
				$(".sswww").hover(
					function() {
						$("#alt").html("" + $(this).children(".all").html() + "").css({
							"top": $(this).offset().top - 50
						})
						$("#alt").show()
					}
				)
				$(".sswww").mouseout(
					function() {
						$("#alt").hide()
					}
				)
			</script>
		</div>
		<div style="clear:both;"></div>
		<div style="width:1024px; left:0px; position:relative; background:#FC3; margin-top:4px; height:123px; display:block;">
			<span class="t" style="line-height:123px;"><?= $Bottom->find(1)['bottom']; ?></span>
		</div>
	</div>

</body>

</html>