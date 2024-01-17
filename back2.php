<?php include_once "./api/db.php"; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Dashboard Template · Bootstrap v5.0</title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- 原始的link -->
  <link href="./css/css.css" rel="stylesheet" type="text/css">
  <script src="./js/jquery-1.9.1.min.js"></script>
  <script src="./js/js.js"></script>
  
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <button class="nav-link px-3 " onclick="location.href='./api/logout.php'" style="width:99%; margin-right:2px; height:50px;">Sign out</button>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?do=title">
                <span data-feather="home"></span>
                網站標題管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=ad">
                <span data-feather="file"></span>
                動態文字廣告管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=mvim">
                <span data-feather="shopping-cart"></span>
                動畫圖片管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=image">
                <span data-feather="users"></span>
                校園映象資料管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=total">
                <span data-feather="bar-chart-2"></span>
                進站總人數管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=bottom">
                <span data-feather="layers"></span>
                頁尾版權資料管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=news">
                <span data-feather="file-text"></span>
                最新消息資料管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=admin">
                <span data-feather="file-text"></span>
                管理者帳號管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=menu">
                <span data-feather="file-text"></span>
                選單管理
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>
        <!-- 動畫 拆線圖 -->

				<!-- 引入頁面 start -->
				<?php
				$do = $_GET['do'] ?? 'title';
				$file = "./back/{$do}.php";
				if (file_exists($file)) {
					include $file;
				} else {
					include "./back/title.php";
				}
				?>
				<!-- 引入頁面 end-->

      </main>
    </div>
  </div>

  

  <!-- modal start -->
  <div id="cover" style="display:none; ">
    <div id="coverr">
      <a style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;" onclick="cl('#cover')">X</a>
      <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
  </div>
  <!-- modal end -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>