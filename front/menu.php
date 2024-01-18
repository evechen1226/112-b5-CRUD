        <div class="container-xxl py-5">
          <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h5 class="section-title ff-secondary text-center text-primary fw-normal">News</h5>
              <h1 class="mb-4 f-title">Green Planet's News</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">

              <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                  <div class="row g-4">
                    <?php
                    $total = $News->count();
                    $div = 8;
                    $pages = ceil($total / $div);
                    //isset()
                    $now = $_GET['p'] ?? 1;
                    $strat = ($now - 1) * $div;

                    $rows = $News->all(['sh' => 1]);
                    foreach ($rows as $row) {
                    ?>
                      <div class="col-lg-6">
                        <div class="d-flex align-items-center">
                          <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                          <div class="w-100 d-flex flex-column text-start ps-4">
                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                              <span><?= $row['title']; ?></span>
                              <span class="text-primary"><?= $row['good']; ?></span>
                            </h5>

                            <small class="fst-italic"><?= $row['eng_title']; ?>
                            </small>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>

                  </div>
                </div>

              </div>
              <div class="text-center">
                <?php
                if (!isset($_GET['p']) && $total > $div) {
                  echo '<a class="fs-4" href="news.php?p=1">more<i class="fa-solid fa-angles-right"></i></a>';
                } else {

                  if ($now >= 1) {
                    // echo "<a href='?do=news&p='".($now-1)."</a>";
                    $prev = $now - 1;
                    echo "<a href='?do=news&p=$prev'> < </a>";
                  }
                  for ($i = 1; $i <= $pages; $i++) {

                    $fontsize = ($now == $i) ? '24px' : '16px';

                    echo "<a href='?do=news&p=$i' style='font-size:$fontsize'>$i</a>";
                  }

                  if ($now < $pages) {

                    $next = $now + 1;
                    echo "<a href='?do=news&p=$next'> > </a>";
                  }
                }
                ?>

              </div>

            </div>
          </div>
        </div>