<?php include_once './api/db.php'; ?>
<!doctype html>
<html lang="zh-TW">

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
        <a title="<?= $title['text']; ?>" href="index.php">
            <div style="background:url('./img/<?= $title['img']; ?>'); background-size:cover;"></div>
            <!--標題-->
        </a>
        <div class="container-xxl py-5 bg-dark hero-header mb-5" style="background:url('./img/<?= $title['img']; ?>'); background-size:cover;">
            <div class="container mt-5 py-5 mt-5">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center text-lg-start">
                        <h1 class="display-3 text-white animated slideInLeft title-font">Enjoy Our<br>Delicious Meal</h1>
                        <p class="text-white animated slideInLeft mb-4 pb-2">以新鮮、有機的自然食材為基礎，主打美味的蔬食料理。每道菜品都融入大自然的綠意，呈現獨特的風味，滿足您對美好飲食的追求，是喜愛蔬食生活的理想選擇。</p>
                        <!-- <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Book A
                            Table</a> -->
                    </div>
                    <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                        <!-- <img class="img-fluid" src="img/hero.png" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Vote Start -->
        <?php include "./front/vote.php"; ?>

        <!-- Vote End -->


        <!-- About Start -->
        <?php include "./front/about.php"; ?>
        <!-- About End -->


        <!-- Menu Start -->
        <?php include "./front/menu.php";
        ?>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <?php //include "./front/reservation.php"; 
        ?>
        <!-- Reservation Start -->


        <!-- Team Start -->
        <?php //include "./front/team.php"; 
        ?>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <?php //include "./front/testimonail.php"; 
        ?>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <?php include "./front/footer.php"; ?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa-solid fa-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
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
        <script src="./js/main.js"></script>

        <?php include "./jq/jq.php"; ?>
</body>

</html>