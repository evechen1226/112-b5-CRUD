        <style>
          .section-title {
            color: #FEA116;
          }

          .section-title::after {
            background: var(--primary);
          }

          .bg-color {
            background-color: #0f4c5c;
          }

          .footer .btn.btn-social:hover {
            color: var(--light);
            background-color: var(--primary);
            border: none;
          }
        </style>
        <div class="container bg-color text-light footer mt-5 wow fadeIn" data-wow-delay="0.1s" id="footer">
          <div class="container py-5">
            <div class="row g-5">
              <div class="col-lg-4 col-md-4">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Company</h4>
                <a class="btn btn-link" href="3">About Us</a>
                <a class="btn btn-link" href="3">Contact Us</a>
                <a class="btn btn-link" href="3">Reservation</a>
                <a class="btn btn-link" href="3">Privacy Policy</a>
                <a class="btn btn-link" href="3">Terms & Condition</a>
              </div>
              <div class="col-lg-4 col-md-4">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>269 宜蘭縣冬山鄉九分路4997號</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>02-8866-5577</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>green_planant@planant.com</p>
                <div class="d-flex pt-2">
                  <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
                <h5 class="text-light fw-normal">Monday - Saturday</h5>
                <p>09AM - 09PM</p>
                <h5 class="text-light fw-normal">Sunday</h5>
                <p>10AM - 08PM</p>
              </div>

            </div>
          </div>
          <div class="container">
            <div class="copyright">
              <div class="row">
                <div class="col-md-6 text-center mb-3 text-md-start">
                  &copy;Evelyn, All Right Reserved. <?= $Bottom->find(1)['bottom']; ?>
                </div>
                <div class="col-md-6 text-center text-md-end">
                  <div class="footer-menu">
                    <div><span class="t">進站總人數 : <?= $Total->find(1)['total']; ?></span></div>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>