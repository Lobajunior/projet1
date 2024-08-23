
@extends('layouts/app')


@section('container')


      <!-- Hero -->
      <section class="position-relative pt-5 mb-5" style="background-color: #151922;">
        <span class="d-dark-mode-none d-block position-absolute start-0 bottom-0 w-100 bg-white" style="height: 19.875vw;"></span>
        <span class="d-dark-mode-block d-none position-absolute start-0 bottom-0 w-100 bg-light" style="height: 19.875vw;"></span>
        <div class="container position-relative zindex-2 pt-5" data-bs-theme="dark">

          <!-- Breadcrumb -->
          <nav class="pt-lg-4" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Acuueil</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Page 3</li>
            </ol>
          </nav>

          <!-- Page title -->
          <div class="mt-4 mb-lg-5 mb-4 py-3">
            <h1 class="display-4 mb-0">Qui est Norskyentreprise</h1>
          </div>

          <!-- Gallery -->
          <div class="row g-md-4 g-3">
            <div class="col-md-6">
              <img src="/../assets/img/about/hero/05.jpg" alt="Hero image" class="rounded-3">
            </div>
            <div class="col-md-3 col-6 d-md-block d-none mt-5 pt-3 pt-xl-4">
              <img src="/../assets/img/about/hero/06.jpg" alt="Hero image" class="rounded-3">
            </div>
            <div class="col-md-3 col-6 d-md-block d-none">
              <img src="/../assets/img/about/hero/07.jpg" alt="Hero image" class="rounded-3">
            </div>
          </div>
        </div>
      </section>


      <!-- Story -->
      <section class="container mb-5 pt-md-1 pt-lg-4 pt-xl-5">
        <div class="mt-4 py-2 pb-sm-3 pb-md-4 pb-lg-5 mx-auto text-center" style="max-width: 46.625rem;">
          <h2 class="h1 mb-4">In 2017 we changed the game</h2>
          <p class="mb-4">Ac vel feugiat elementum turpis. Euismod eget aliquam non, aliquam dui augue amet lectus donec adipiscing quis molestie eget urna.</p>
        </div>

        <!-- Steps -->
        <div class="steps steps-center steps-sm steps-horizontal-lg" style="--si-steps-number-size-sm: 1.5rem; --si-steps-number-inner-size-sm: 1rem; --si-steps-number-bg: rgba(99,102,241,.2); --si-steps-number-inner-bg: #6366f1;">

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-3">2018</h3>
              <p class="mb-0">Nibh in natoque ut blandit est sed massa quam massa. Nisi eu aenean tristique sed tortor tincidunt.</p>
            </div>
          </div>

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-3">2019</h3>
              <p class="mb-0">Orci, lorem rutrum euismod est urna commodo. Dictum fringilla ac sit egestas pharetra tellus in tristique.</p>
            </div>
          </div>

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-3">2021</h3>
              <p class="mb-0">Quisque felis in augue dolor. Risus, id pretium vitae a adipiscing adipiscing posuere maecenas.</p>
            </div>
          </div>

          <!-- Step -->
          <div class="step w-100 mx-auto" style="max-width: 26rem;">
            <div class="step-number"><div class="step-number-inner"></div></div>
            <div class="step-body">
              <h3 class="mb-3">2023</h3>
              <p class="mb-0">Nunc, sit tempus, varius est duis. Elementum commodo tincidunt mi quis arcu lorem consequat.</p>
            </div>
          </div>
        </div>
      </section>


      <!-- Locations -->
      <section class="container mb-5 pt-md-3 pt-lg-4 pt-xl-5">
        <div class="pt-2 pt-sm-4 pb-md-3 mb-4 mt-lg-1 mt-xl-3 mx-auto text-center" style="max-width: 47rem;">
          <h2 class="h1 mb-4">Our offices around the world</h2>
          <p class="mb-3">Congue gravida vel imperdiet rutrum lectus felis purus blandit ullamcorper. In eleifend in ultrices ultrices aliquam augue praesent.</p>
          <a href="contacts-v2.html" class="btn btn-primary mb-4">Contact us</a>
        </div>

        <!-- Map -->
        <div class="mb-4 pb-2">
          <img src="assets/img/about/map-light.png" alt="Map" class="d-dark-mode-none d-block">
          <img src="assets/img/about/map-dark.png" alt="Map" class="d-dark-mode-block d-none">
        </div>
      </section>


      <!-- Team -->
      <section class="container mb-5 py-lg-3 py-xl-4 py-xxl-5">
        <div class="d-md-flex align-items-center justify-content-between text-md-start text-center pt-1 pt-sm-3 pt-md-4 mb-5">
          <h2 class="h1 mb-md-0">Our talented team</h2>
          <a href="#" class="btn btn-primary">
            Join our team
            <i class="bx bx-right-arrow-alt lead ms-1"></i>
          </a>
        </div>

        <!-- Team grid -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 pb-lg-2 pb-xl-3">

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/24.jpg" class="rounded-3" alt="Ralph Edwards">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Ralph Edwards</h3>
                <p class="fs-sm mb-0">Founder &amp; CEO</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/25.jpg" class="rounded-3" alt="Albert Flores">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Albert Flores</h3>
                <p class="fs-sm mb-0">Principal Consultant</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/26.jpg" class="rounded-3" alt="Jenny Wilson">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Jenny Wilson</h3>
                <p class="fs-sm mb-0">UX Designer</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/27.jpg" class="rounded-3" alt="Marvin McKinney">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Marvin McKinney</h3>
                <p class="fs-sm mb-0">Product Manager</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/28.jpg" class="rounded-3" alt="Esther Howard">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Esther Howard</h3>
                <p class="fs-sm mb-0">VP of Strategy</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/29.jpg" class="rounded-3" alt="Cameron Williamson">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Cameron Williamson</h3>
                <p class="fs-sm mb-0">Co-Founder</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/30.jpg" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Jerome Bell</h3>
                <p class="fs-sm mb-0">Strategic Advisor</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="assets/img/team/31.jpg" class="rounded-3" alt="Darrell Steward">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-primary opacity-35 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Darrell Steward</h3>
                <p class="fs-sm mb-0">Senior Project Manager</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Stats + Partners -->
      <section class="bg-secondary mb-5 py-lg-4 py-xl-5">
        <div class="container pt-5">
          <div class="row align-items-center gy-5 pt-2 pt-sm-3 pt-md-4">
            <div class="col-lg-5 text-lg-start text-center">
              <h2 class="h1 mb-4 pb-lg-2">Company built by a global team of innovators</h2>
              <p class="mb-4 pb-1 pb-sm-2 pb-lg-3">In blandit luctus proin mauris a commodo, dolor diam tempus, aenean magna fusce eu. Id porttitor aliquam eget aliquet sagittis eu aut diam ut phasellus sed convallis iaculis neque ultricies convallis sed enim</p>
              <a href="contacts-v2.html" class="btn btn-primary">Contact us</a>
            </div>
            <div class="col-lg-6 offset-lg-1">
              <div class="row row-cols-sm-2 row-cols-1 g-4 align-items-center">
                <div class="col">
                  <div class="card border-0">
                    <div class="card-body m-xl-3 m-1 text-center">
                      <a href="#" class="d-inline-block mb-4 pb-2">
                        <img src="assets/img/about/clutch-logo-dark.svg" width="116" alt="Clutch" class="d-dark-mode-none d-block">
                        <img src="assets/img/about/clutch-logo-light.svg" width="116" alt="Clutch" class="d-dark-mode-block d-none">
                      </a>
                      <h5 class="mb-3 fs-lg fw-normal lh-1">
                        <span class="h1 d-block w-100 mb-0">100%</span>
                        Positive Feedback
                      </h5>
                      <div class="mb-3 text-nowrap">
                        <i class="bx bxs-star text-warning fs-sm"></i>
                        <i class="bx bxs-star text-warning fs-sm"></i>
                        <i class="bx bxs-star text-warning fs-sm"></i>
                        <i class="bx bxs-star text-warning fs-sm"></i>
                        <i class="bx bxs-star text-warning fs-sm"></i>
                      </div>
                      <img src="assets/img/about/members-light.png" width="168" alt="Members" class="d-dark-mode-none d-block mx-auto">
                      <img src="assets/img/about/members-dark.png" width="168" alt="Members" class="d-dark-mode-block d-none mx-auto">
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card border-0">
                    <div class="card-body m-xl-3 m-1 text-center">
                      <img src="assets/img/about/chat-light.svg" width="56" alt="Icon" class="d-dark-mode-none d-block mx-auto mb-4">
                      <img src="assets/img/about/chat-dark.svg" width="56" alt="Icon" class="d-dark-mode-block d-none mx-auto mb-4">
                      <h5 class="mb-3 fs-lg fw-normal lh-1">
                        <span class="h1 d-block w-100 mb-0">24/7</span>
                        Customer support
                      </h5>
                    </div>
                  </div>
                  <div class="card border-0 mt-4">
                    <div class="card-body m-xl-3 m-1 bg-repeat-0 bg-position-top-end" style="background-image: url(assets/img/about/graph.svg);">
                      <h5 class="mb-3 fs-lg fw-normal lh-1 mt-5">
                        <span class="h1 d-block w-100 mb-0">+12k</span>
                        new leads for clients
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Brands (carousel) -->
          <div class="swiper mx-n2 mt-lg-5 mt-sm-2 mt-md-4 pt-4" data-swiper-options='{
            "slidesPerView": 2,
            "loop": true,
            "autoplay": {
              "delay": 6000,
              "disableOnInteraction": false
            },
            "breakpoints": {
              "500": {
                "slidesPerView": 3,
                "spaceBetween": 8
              },
              "650": {
                "slidesPerView": 4,
                "spaceBetween": 8
              },
              "900": {
                "slidesPerView": 5,
                "spaceBetween": 8
              },
              "1100": {
                "slidesPerView": 6,
                "spaceBetween": 8
              }
            }
          }'>
            <div class="swiper-wrapper">

              <!-- Item -->
              <div class="swiper-slide py-3">
                <a href="#" class="card card-body bg-none border-0 px-2 mx-2">
                  <img src="assets/img/brands/01.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
              </div>

              <!-- Item -->
              <div class="swiper-slide py-3">
                <a href="#" class="card card-body bg-none border-0 px-2 mx-2">
                  <img src="assets/img/brands/02.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
              </div>

              <!-- Item -->
              <div class="swiper-slide py-3">
                <a href="#" class="card card-body bg-none border-0 px-2 mx-2">
                  <img src="assets/img/brands/03.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
              </div>

              <!-- Item -->
              <div class="swiper-slide py-3">
                <a href="#" class="card card-body bg-none border-0 px-2 mx-2">
                  <img src="assets/img/brands/04.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
              </div>

              <!-- Item -->
              <div class="swiper-slide py-3">
                <a href="#" class="card card-body bg-none border-0 px-2 mx-2">
                  <img src="assets/img/brands/05.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
              </div>

              <!-- Item -->
              <div class="swiper-slide py-3">
                <a href="#" class="card card-body bg-none border-0 px-2 mx-2">
                  <img src="assets/img/brands/06.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                </a>
              </div>
            </div>

            <!-- Pagination (bullets) -->
            <div class="swiper-pagination position-relative pt-2 mt-4"></div>
          </div>
        </div>
      </section>


      <!-- Testimonials -->
      <section class="container mb-5 pb-3 py-lg-4 py-xl-5">
        <div class="row gy-4 gy-md-5 pt-3 py-md-4">
          <div class="col-xl-2 col-lg-3 text-lg-start text-center">
            <h2 class="mb-4 mb-xl-5 pb-2 pb-md-3 pb-lg-4">What Our Clients Say About Us:</h2>
            <button type="button" id="prev" class="btn btn-prev btn-icon btn-sm me-2" aria-label="Previous">
              <i class="bx bx-chevron-left"></i>
            </button>
            <button type="button" id="next" class="btn btn-next btn-icon btn-sm ms-2" aria-label="Next">
              <i class="bx bx-chevron-right"></i>
            </button>
          </div>
          <div class="col-lg-9 offset-xl-1">
            <div class="swiper" data-swiper-options='{
              "loop": true,
              "navigation": {
                "prevEl": "#prev",
                "nextEl": "#next"
              },
              "breakpoints": {
                "0": {
                  "slidesPerView": 1
                },
                "500": {
                  "slidesPerView": 2
                },
                "768": {
                  "slidesPerView": 3
                }
              }
            }'>
              <div class="swiper-wrapper">

                <!-- Item -->
                <div class="swiper-slide h-auto p-2 pb-4">
                  <figure class="d-flex flex-column h-100 mt-4">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Pulvinar urna condimentum amet tempor, ornare integer. Lorem odio justo malesuada suspendisse viverra aliquet quisque turpis non. Feugiat in odio non nunc ornare consectetur.</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center pt-4">
                      <img src="assets/img/avatar/03.jpg" width="48" class="rounded-circle" alt="Annette Black">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Annette Black</h6>
                        <span class="fs-xs text-muted">Co-founder of Lorem Company</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto p-2 pb-4">
                  <figure class="d-flex flex-column h-100 mt-4">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Id mollis consectetur congue egestas egestas suspendisse blandit justo. Tellus augue commodo id quis tempus etiam pulvinar at maecenas.</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bx-star text-muted opacity-75"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center pt-4">
                      <img src="assets/img/avatar/02.jpg" width="48" class="rounded-circle" alt="Robert Fox">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Robert Fox</h6>
                        <span class="fs-xs text-muted">CEO of Ipsum Company</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto p-2 pb-4">
                  <figure class="d-flex flex-column h-100 mt-4">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Sociis sit risus id. Sit facilisis dolor arcu, fermentum vestibulum arcu ele. Pulvinar at maecenas maecenas pharetra, tincidunt sollicitudin in in. Pellentesque vitae mattis aliquet velit arcu risus...</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center pt-4">
                      <img src="assets/img/avatar/10.jpg" width="48" class="rounded-circle" alt="Jerome Bell">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Jerome Bell</h6>
                        <span class="fs-xs text-muted">Founder of the Agency </span>
                      </div>
                    </figcaption>
                  </figure>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto p-2 pb-4">
                  <figure class="d-flex flex-column h-100 mt-4">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Pulvinar urna condimentum amet tempor, ornare integer. Lorem odio justo malesuada suspendisse viverra aliquet quisque turpis non. Feugiat in odio non nunc ornare consectetur.</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bx-star text-muted opacity-75"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center pt-4">
                      <img src="assets/img/avatar/03.jpg" width="48" class="rounded-circle" alt="Annette Black">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Annette Black</h6>
                        <span class="fs-xs text-muted">Co-founder of Lorem Company</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto p-2 pb-4">
                  <figure class="d-flex flex-column h-100 mt-4">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Id mollis consectetur congue egestas egestas suspendisse blandit justo. Tellus augue commodo id quis tempus etiam pulvinar at maecenas.</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center pt-4">
                      <img src="assets/img/avatar/02.jpg" width="48" class="rounded-circle" alt="Robert Fox">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Robert Fox</h6>
                        <span class="fs-xs text-muted">CEO of Ipsum Company</span>
                      </div>
                    </figcaption>
                  </figure>
                </div>

                <!-- Item -->
                <div class="swiper-slide h-auto p-2 pb-4">
                  <figure class="d-flex flex-column h-100 mt-4">
                    <div class="card h-100 position-relative border-0 shadow-sm pt-4">
                      <span class="btn btn-icon btn-primary shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4">
                        <i class="bx bxs-quote-left"></i>
                      </span>
                      <blockquote class="card-body pb-3 mb-0">
                        <p class="mb-0">Sociis sit risus id. Sit facilisis dolor arcu, fermentum vestibulum arcu ele. Pulvinar at maecenas maecenas pharetra, tincidunt sollicitudin in in. Pellentesque vitae mattis aliquet velit arcu risus...</p>
                      </blockquote>
                      <div class="card-footer border-0 text-nowrap pt-0">
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bxs-star text-warning"></i>
                        <i class="bx bx-star text-muted opacity-75"></i>
                      </div>
                    </div>
                    <figcaption class="d-flex align-items-center pt-4">
                      <img src="assets/img/avatar/10.jpg" width="48" class="rounded-circle" alt="Jerome Bell">
                      <div class="ps-3">
                        <h6 class="fs-sm fw-semibold mb-0">Jerome Bell</h6>
                        <span class="fs-xs text-muted">Founder of the Agency </span>
                      </div>
                    </figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- CTA -->
      <section class="container">
        <div class="position-relative bg-dark rounded-3 overflow-hidden px-3 py-5">
          <span class="position-absolute top-0 start-0 w-100 h-100" style="background-color: rgba(255, 255, 255, .05)"></span>
          <div class="position-relative zindex-5 text-center my-xl-3 py-1 py-md-4 py-lg-5">
            <p class="lead text-light opacity-70 mb-3">Ready to get started?</p>
            <h2 class="h1 text-light pb-3 pb-lg-0 mb-lg-5">Launch Your Project with Us</h2>
            <a href="#" class="btn btn-primary btn-lg">Work with us</a>
          </div>
        </div>
      </section>
    </main>

@endsection