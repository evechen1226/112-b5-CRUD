<?php include_once './api/db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Green Planet</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- myStyle Stylesheet -->
    <link href="css/myStyle.css" rel="stylesheet">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <?php include "./front/navbar.php"; ?>
        <!-- Navbar & Hero Start end-->

        <?php
        $title = $Title->find(['sh' => 1]);
        ?>

        <!-- Navbar & Hero End -->


        <!-- Section: Design Block -->
        <style>
            .hw-100 {
                width: 100%;
                height: 100vh;
                background-color: #CBF3F0;
            }

            .bg-top {
                background-image: url('./img/lifestyle-2569540_640.jpg');
                height: 300px;
            }

            .div-login {
                background: hsla(0, 0%, 100%, 0.8);
                z-index: 100;
                top: 53%;
                left: 50%;
                transform: translate(-50%, -50%);
                backdrop-filter: blur(10px);
                border-radius: 10px;
            }

            .fw-700 {
                font-weight: 700;
            }

            .btn-hover:hover {
                background-color: #FEA116;
                color: white;
                transform: scale(1.05);
            }

            .btn-hover:active {
                transform: scale(1);
                box-shadow: inset 0 0 10px 1px rgba(0, 0, 0, .2) !important;
            }
        </style>
        <div class="text-center position-relative hw-100">
            <!-- Background image -->
            <div class="p-5 bg-top shadow-sm"></div>
            <!-- Background image -->

            <div class="position-absolute mx-auto col-lg-8 card shadow-5-strong div-login shadow-sm">
                <div class="card-body py-5 px-md-5">

                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <h2 class="fw-bold mb-5 f-color">建立 Green Planet 帳戶</h2>
                            <form action="./api/add.php" method="post" enctype="multipart/form-data">
                                <!-- 2 column grid layout with text inputs for the first and last names -->
                                <div class="row">
                                    <div class="col-md-6 mb-4 fw-700">
                                        <div class="form-outline">
                                            <label class="form-label">姓氏</label>
                                            <input type="text" class="form-control" name="surname">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 fw-700">
                                        <div class="form-outline">
                                            <label class="form-label">名字</label>
                                            <input type="text" class="form-control" name="name">
                                        </div>
                                    </div>
                                </div>


                                <!-- Email input -->
                                <div class="form-outline mb-4 fw-700">
                                    <label class="form-label">帳號</label>
                                    <input type="text" class="form-control" name="acc">
                                </div>


                                <!-- Password input -->
                                <div class="row">
                                    <div class="col-md-6 mb-4 fw-700">
                                        <div class="form-outline">
                                            <label class="form-label">密碼</label>
                                            <input type="password" class="form-control" name="pw">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4 fw-700">
                                        <div class="form-outline">
                                            <label class="form-label">再次確認密碼</label>
                                            <input type="password" class="form-control" name="pw2">
                                        </div>
                                    </div>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-check d-flex justify-content-center mb-4">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                    <label class="form-check-label" for="form2Example33">
                                        訂閱最新優惠訊息
                                    </label>
                                </div>
                                <input type="hidden" name="table" value="admin">
                                <!-- Submit button -->
                                <button type="submit" class="btn bg-green text-light btn-block mb-4 shadow-sm btn-hover me-5">
                                    註冊
                                </button>
                                <button type="reset" class="btn bg-green text-light btn-block mb-4 shadow-sm btn-hover">
                                    重置
                                </button>

                                <!-- Register buttons -->
                                <!-- <div class="text-center">
                                    <p>or sign up with:</p>
                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-google"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </button>

                                    <button type="button" class="btn btn-link btn-floating mx-1">
                                        <i class="fab fa-github"></i>
                                    </button>
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section: Design Block -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js" integrity="sha512-+k1pnlgt4F1H8L7t3z95o3/KO+o78INEcXTbnoJQ/F2VqDVhWoaiVml/OEHv9HsVgxUaVW+IbiZPUJQfF/YxZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <?php include "./jq/jq.php"; ?>
</body>

</html>