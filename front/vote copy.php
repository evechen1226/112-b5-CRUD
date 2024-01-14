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

            <div class="carousel-item active"></div>
            <div class="container-xxl pt-3">
              <div class="container">
                <div class="row g-4 rounded-5">
                  <?php

                  $total = $Vote->count();
                  $div = 3;
                  $pages = ceil($total / $div);
                  $now = $_GET['p'] ?? 1;
                  $start = ($now - 1) * $div;
                  for ($i = 1; $i <= $total; $i++) {



                    $rows = $Vote->all(['sh' => 1], " limit $start,$div");

                    foreach ($rows as $idx => $vote) {
                  ?>
                      <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.1s">

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
                  }
                  ?>



                  <!-- <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">

                      <div class="service-item">
                        <div class=" ">
                          <img src="./img/tomatoes-5356_640.jpg" class="" alt="" width=" 100%" height="50%">
                          <div class="p-3">
                            <h5 class="mt-3">番茄</h5>
                            <p>色彩豐富的蕃咖，營養豐富。烹調多變，滿足您的美食期待。不同料理方式都散發著獨特風味，帶給您美好的體驗。</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">

                      <div class="service-item">
                        <div class=" ">
                          <img src="./img/mushrooms-389421_640.jpg" class="" alt="" width=" 100%" height="50%">
                          <div class="p-3">
                            <h5 class="mt-3">磨菇</h5>
                            <p>精選新鮮磨菇，營養豐富，口感鮮嫩。烹調多樣化，滿足您的味蕾。健康的選擇，每一道料理都更美味。</p>
                          </div>
                        </div>
                      </div>

                    </div>
                      <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">

                        <div class="service-item">
                       <div class=" ">
                           <img src="./img/wheat-865152_640.jpg" class="" alt="" width=" 100%" height="50%">
                          <div class="p-3">
                           <h5 class="mt-3">麥子</h5>
                           <p>純正的麥子，營養價值高，糙米質感。經嚴格篩選，確保品質優良。為您的飲食增添天然的營養力量。</   p>
                          </div>
                       </div>
                      </div> -->
                </div>
              </div>
            </div>


            <div class="carousel-item">
              <div class="container-xxl pt-3 mb-5">
                <div class="container">
                  <div class="row g-4 rounded-5">
                    <div class="col-lg-3 col-sm-6  ">

                      <div class="service-item">
                        <div class=" ">
                          <img src="./img/coffee-beans-1291656_640.jpg" class="" alt="" width=" 100%" height="50%">
                          <div class="p-3">
                            <h5 class="mt-3">咖啡豆</h5>
                            <p>精選高品質咖啡豆，風味濃郁香醇。經精心烘焙，每一口都是對品味的追求。享受純正咖啡的悠閒時光。</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-lg-3 col-sm-6 ">

                      <div class="service-item">
                        <div class=" ">
                          <img src="./img/carrots-673184_640.jpg" class="" alt="" width=" 100%" height="50%">
                          <div class="p-3">
                            <h5 class="mt-3">胡蘿蔔</h5>
                            <p>新鮮多汁的胡蘿蔔，富含維生素與纖維，為您的健康提供天然的營養源。美味色香，打造健康生活。</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-lg-3 col-sm-6 ">

                      <div class="service-item">
                        <div class=" ">
                          <img src="./img/figs-2079166_640.jpg" class="" alt="" width=" 100%" height="50%">
                          <div class="p-3">
                            <h5 class="mt-3">無花果</h5>
                            <p>蜜汁飽滿，口感絲滑。天然的營養寶庫，散發自然的甜美。每一顆都是大自然的禮物，為您的味蕾帶來享受。</p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-lg-3 col-sm-6 ">

                      <div class="service-item">
                        <div class=" ">
                          <img src="./img/cucumbers-849269_640.jpg" class="" alt="" width=" 100%" height="50%">
                          <div class="p-3">
                            <h5 class="mt-3">小黃瓜</h5>
                            <p>清爽可口。天然水分，為您的健康注入活力。每一片都是自然清新的美味，滿足您的味蕾。</p>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>