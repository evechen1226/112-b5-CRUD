<?php include_once "./api/db.php"; ?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.84.0">
  <title>Green Planet 管理後台</title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- 原始的link -->
  <link href="./css/css.css" rel="stylesheet" type="text/css">
  <script src="./js/jquery-1.9.1.min.js"></script>
  <script src="./js/js.js"></script>

</head>
<style>
  .bg-green {
    background-color: #1E9D8A !important;
    color: white !important;
  }

  .nav-text {
    font-family: 'Amatic SC', sans-serif;
  }

  .btn-sign {

    border-radius: .5rem;
    background-color: #54deca;
    font-weight: bold;

  }

  .btn-sign:hover {
    border: 2px solid white;
    box-shadow: 0 0 10px rgba(146, 255, 197, 1);
  }
</style>

<body>
  <div class="">
    <header class="navbar bg-green sticky-top flex-md-nowrap p-0 shadow">
      <a class="navbar-brand nav-text bg-green col-md-3 col-lg-2" href="#"><i class="fa-solid fa-seedling me-1"></i>Green Planet</a>
      <div class="flex"><button class="mx-auto navbar-toggler position-absolute d-md-none collapsed me-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        </button></div>


      <!-- 搜尋列 -->
      <!-- <input id="searchInput" class="form-control form-control-dark w-100" type="text" placeholder="請輸入管理選單名稱，按下Enter。" aria-label="Search"> -->

      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <button class="btn btn-sign" onclick="location.href='./api/logout.php'" >Sign out</button>
        </div>
      </div>
    </header>
  </div>


  <div class="container-fluid " >
    <div class="row">
      <div id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse" style="height:90vh;">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?do=title">
                <span data-feather="home"></span>
                網站標題管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="?do=vote">
                <span data-feather="home"></span>
                食材競選內容管理
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?do=news">
                <span data-feather="file-text"></span>
                最新消息資料管理
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
</div>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

        <!-- 預留其它功能按鈕 -->
        <!-- 
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
      -->
        <!-- 動畫 折線圖 -->

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
      <div id="cvr" class="container p-3" style="position:absolute; margin:auto; z-index:9898;"></div>
      <div class="modal-footer d-flex ">
        <button type="button" class="btn " onclick="cl('#cover')" style="z-index:9999"><i class="fa-solid fa-xmark"></i></button>
      </div>
    </div>
  </div>
  <!-- modal end -->

  <script>
    // 取得搜尋框元素
    let searchInput = document.getElementById('searchInput');

    // 監聽按鍵事件
    searchInput.addEventListener('keydown', function(event) {
      // 按下 Enter 鍵（keyCode 13）
      if (event.keyCode === 13) {
        // 取得搜尋框的值
        let searchTerm = searchInput.value.trim();

        // 如果搜尋框有值，則導向到指定的頁面
        if (searchTerm !== '') {
          // 導向到網站標題管理頁面
          window.location.href = '?do=title';
        }
      }
    });
  </script>

  <script src=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>