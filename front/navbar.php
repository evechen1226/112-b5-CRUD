        <style>
          .dropdown-menu>a:hover {
            background-color: #2EC4B6;
            color: white;
          }

          .btn-sign {
            border-radius: .5rem;
          }

          .btn-sign-g {
            background-color: #54deca;
            border-radius: .5rem;
          }

          .btn-sign:hover {
            box-shadow: 0 0 10px rgba(255, 165, 0, 1);
          }

          .btn-sign-g:hover {
            box-shadow: 0 0 10px rgba(146, 255, 197, 1);
          }

          .btn-green {
            background-color: #54deca;
          }

          .user {
            color: wheat;
            font-weight: bold;
          }
        </style>
        <div class="container-xxl position-relative p-0">
          <nav class="navbar navbar-expand-lg navbar-dark bg-green px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
              <h1 class="text-primary m-0 title-font nav-icon"><i class="fa-solid fa-seedling me-3"></i>Green Planet</h1>
              <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
              <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav ms-auto py-0 pe-4 nav-text">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">關於我們</a>
                <a href="service.html" class="nav-item nav-link">提供服務</a>
                <a href="menu.html" class="nav-item nav-link">餐點選單</a>
                <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">分店資訊</a>
                  <div class="dropdown-menu m-0">
                    <a href="booking.html" class="dropdown-item">生機之源</a>
                    <a href="team.html" class="dropdown-item">植福素坊</a>
                    <a href="testimonial.html" class="dropdown-item">天然味屋</a>
                  </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">聯絡我們</a>
              </div>
              <!-- <a href="" class="btn btn-primary py-2 px-4">sing </a> -->

              <?php
              if (!isset($_SESSION['user'])) {
              ?>
                <button class="btn btn-primary btn-sign" onclick="login()" data-bs-toggle="modal" data-bs-target="#myModal">Sign In</button>
              <?php
              } else {
              ?>
                <div class="user me-3">歡迎 <?= $_SESSION['user']; ?></div>
                <button class="btn btn-primary btn-sign" onclick="location.href='../api/logout.php'">Sign out</button>
                <?php
                if ($_SESSION['user'] == 'admin') {
                ?>
                  <button onclick="location.href='back.php'">管理</button>
              <?php
                }
              }
              ?>


            </div>
          </nav>

        </div>
        <!-- The Modal -->
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h5 class="modal-title">會員登入</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <div class="form-outline mb-4">
                  <input type="text" name="acc" id="acc" class="form-control" placeholder="" />
                  <label class="form-label" for="form2Example11">帳號</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" name="pw" id="pw" class="form-control" />
                  <label class="form-label" for="form2Example22">密碼</label>
                </div>

                <div class="text-center  mb-3">
                  <div class="d-grid gap-2">
                    <button onclick="login()" class="btn btn-primary btn-sign mb-3" type="button">Log
                      in</button>
                  </div>
                </div>

                <div class="d-flex align-items-center justify-content-center">
                  <p class="mb-0 me-2">建立帳戶</p>
                  <button type="button" class="btn btn-sign-g btn-green" onclick="location.href='reg.php'">Create new</button>
                </div>


              </div>
            </div>
          </div>
        </div>

        <script>
          function login() {
            $.post('./api/chk_acc.php', {
              acc: $("#acc").val()
            }, (res) => {
              if (parseInt(res) == 0) {
                alert("查無帳號")
              } else {
                $.post('./api/chk_pw.php', {
                  acc: $("#acc").val(),
                  pw: $("#pw").val()
                }, (res) => {
                  if (parseInt(res) == 1) {
                    if ($("#acc").val() == 'admin') {
                      location.href = 'back.php'
                    } else {
                      location.href = 'index.php'
                    }
                  } else {
                    alert("密碼錯誤")
                  }
                })
              }
            })
          }
        </script>