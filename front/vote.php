        <div class="mx-auto text-center">
          <h3 class="text-primary my-4 ">食材競選 <i class="fa fa-utensils text-primary me-2">由您主宰下一頓美食之旅！</i></h3>
          <p>投下您的選票，選擇您最喜愛的食材，成為我們下次特色料理的靈感之源。與您一起進入美味的新世界！</p>
        </div>
        <div id="img-carousel" class="carousel slide my-5" data-bs-ride="carousel">
          <div class="carousel-indicators mb-0">
            <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="0" class="active rounded-circle img-carousel-button"></button>
            <button type="button" data-bs-target="#img-carousel" data-bs-slide-to="1" class=" rounded-circle img-carousel-button"></button>
          </div>
          <div class="carousel-inner">


            <?php

            $total = $Vote->count();
            $div = 4;
            $pages = ceil($total / $div);
            $now = $_GET['p'] ?? 1;
            $start = ($now - 1) * $div;
            // 分頁 
            for ($i = 1; $i <= $pages; $i++) {
            ?>
              <div class="carousel-item <?= ($i == 1) ? 'active' : ''; ?> ">
                <div class="container-xxl pt-3  mb-5">
                  <div class="container">
                    <div class="row g-4 rounded-5">

                      <?php
                      // 一頁四個
                      $rows = $Vote->all(['sh' => 1], " limit $start,$div");
                      foreach ($rows as $idx => $vote) {
                      ?>
                        <div class="col-lg-3 col-sm-6 <?= ($i == 1) ? 'wow' : ''; ?> fadeInUp " data-wow-delay="0.1s">

                          <div class="service-item">
                            <div class=" ">
                              <img src="./img/<?= $vote['img']; ?>" class="" alt="" width=" 100%" height="50%">
                              <div class="p-3">
                                <h5 class="mt-3"><?= $vote['title']; ?></h5>
                                <p><?= $vote['text']; ?></p>
                              </div>
                            </div>
                          </div>
                        </div>

                      <?php
                        $start = $start + 1;
                      }

                      ?>

                    </div>
                  </div>
                </div>
              </div>
            <?php

            }
            ?>


          </div>
        </div>