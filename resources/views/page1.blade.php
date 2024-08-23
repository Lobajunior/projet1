@extends('layouts/app')

@section('container')


      
      <!-- Hero -->
      <section class="position-relative pt-5">

        <!-- Background -->
        <div class="position-absolute top-0 start-0 w-100 bg-position-bottom-center bg-size-cover bg-repeat-0" style="background-image: url(/../assets/img/about/couleur.jpg);">
          <div class="d-lg-none" style="height: 960px;"></div>
          <div class="d-none d-lg-block" style="height: 768px;"></div>
        </div>

        <!-- Content -->
        <div class="container position-relative zindex-5 pt-5">
          <div class="row">
            <div class="col-lg-6">
              
              <!-- Breadcrumb -->
              <nav class="pt-md-2 pt-lg-3 pb-4 pb-md-5 mb-xl-4" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item">
                    <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Presentation page1</li>
                </ol>
              </nav>

              <!-- Text -->
              <h1 class="pb-2 pb-md-3 text-capitalize">C'est Quoi norskyentreprise</h1>
              <p class="fs-xl pb-4 mb-1 mb-md-2 mb-lg-3" style="max-width: 526px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, molestias.</p>
              <!--<img src="" class=" d-dark-mode-none" width="175" alt="Clutch">
              <img src="/assets/img/about/clutch-light.png" class="d-none d-dark-mode-block" width="175" alt="Clutch">-->
              <div class="row row-cols-3 pt-4 pt-md-5 mt-2 mt-xl-4">
                <div class="col">
                  <h3 class="h2 mb-2">2,480</h3>
                  <p class="mb-0"><strong> Nos Experts </strong>en vente à distance</p>
                </div>
                <div class="col">
                  <h3 class="h2 mb-2">760</h3>
                  <p class="mb-0"><strong>nos clients</strong> par mois</p>
                </div>
                <div class="col">
                  <h3 class="h2 mb-2">1,200</h3>
                  <p class="mb-0"><strong>nos demandes</strong>par semaine</p>
                </div>
              </div>
            </div>

            <!-- Images -->
            <div class="col-lg-6 mt-xl-3 pt-5 pt-lg-4">
              <div class="row row-cols-2 gx-3 gx-lg-4">
                <div class="col pt-lg-5 mt-lg-1">
                  <img src="/../assets/img/about/hero/personnel.jpg" class="d-block rounded-3 mb-3 mb-lg-4" alt="Image">
                  <img src="/../assets/img/about/hero/personnel1.jpg" class="d-block rounded-3" alt="Image ">
                </div>
                <div class="col">
                  <img src="/../assets/img/about/hero/personnel2.jpg" class="d-block rounded-3 mb-3 mb-lg-4" alt="Image">
                  <img src="/../assets/img/about/hero/personnel5.jpg" class="d-block rounded-3" alt="Image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
      <!-- Benefits (features) -->
      <section class="container mt-3 mb-5 pt-lg-5" id="benefits">
        <div class="swiper pt-3" data-swiper-options='{
          "slidesPerView": 1,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "991": {
              "slidesPerView": 3
            }
          }
        }'>
          <div class="swiper-wrapper pt-4">

            <!-- Item -->
            <div class="swiper-slide border-end-lg px-2">
              <div class="text-center">
                <img src="/../assets/img/landing/digital-agency/icons/idea.svg" width="48" alt="Bulb icon" class="d-block mb-4 mx-auto">
                <h4 class="mb-2 pb-1">des solutions créatives</h4>
                <p class="mx-auto" style="max-width: 336px;">Sed morbi nulla pulvinar lectus tempor vel euismod accumsan.</p>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide border-end-lg px-2">
              <div class="text-center">
                <img src="/../assets/img/landing/digital-agency/icons/award.svg" width="48" alt="Award icon" class="d-block mb-4 mx-auto">
                <h4 class="mb-2 pb-1">Award Winning</h4>
                <p class="mx-auto" style="max-width: 336px;">Sit facilisis dolor arcu, fermentum vestibulum arcu elementum imperdiet.</p>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide px-2">
              <div class="text-center">
                <img src="" width="48" alt="Team icon" class="d-block mb-4 mx-auto">
                <h4 class="mb-2 pb-1">Team of Professionals</h4>
                <p class="mx-auto" style="max-width: 336px;">Nam venenatis urna aenean quis feugiat et senectus turpis.</p>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
      </section>


      <!-- Video showreel -->
      <section class="container text-center pb-5 mt-n2 mt-md-0 mb-md-2 mb-lg-4">
        <div class="position-relative rounded-3 overflow-hidden">
          <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center zindex-5">
            <a href="https://www.youtube.com/watch?v=zPo5ZaH6sW8" target="_blank" class="btn btn-video btn-icon btn-xl stretched-link bg-white" data-bs-toggle="video" aria-label="Play video">
              <i class="bx bx-play"></i>
            </a>
          </div>
          <span class="position-absolute top-0 start-0 w-100 h-100 bg-black opacity-35"></span>
          <img src="/../assets/img/about/hero/personnel6.jpg" class="d-block w-100" alt="Cover image">
        </div>
      </section>


      <!-- Awards -->
      <section class="container mb-5 pb-3 pb-md-4 pb-lg-5">
        <div class="row gy-4 py-xl-2">
          <div class="col-md-4">
            <h2 class="mb-0 text-md-start text-center text-capitalize">nos designs de créations  </h2>
          </div>
          <div class="col-lg-7 offset-lg-1 col-md-8">
            <div class="row row-cols-sm-4 row-cols-2 gy-4">
              <div class="col">
                <div class="position-relative text-center">
                  <img src="/../assets/img/landing/digital-agency/awards/webby.svg" width="100" alt="Webby" class="d-block mx-auto mb-3">
                  <a href="#" class="text-body justify-content-center fs-sm stretched-link text-decoration-none">Créa 1</a>
                </div>
              </div>
              <div class="col">
                <div class="position-relative text-center">
                  <img src="/../assets/img/landing/digital-agency/awards/cssda.svg" width="100" alt="CSSDA" class="d-block mx-auto mb-3">
                  <a href="#" class="text-body justify-content-center fs-sm stretched-link text-decoration-none">Créa 2</a>
                </div>
              </div>
              <div class="col">
                <div class="position-relative text-center">
                  <img src="/../assets/img/landing/digital-agency/awards/awwwards.svg" width="100" alt="Awwwards" class="d-block mx-auto mb-3">
                  <a href="#" class="text-body justify-content-center fs-sm stretched-link text-decoration-none">Créa 3</a>
                </div>
              </div>
              <div class="col">
                <div class="position-relative text-center">
                  <img src="/../assets/img/landing/digital-agency/awards/fwa.svg" width="100" alt="FWA" class="d-block mx-auto mb-3">
                  <a href="#" class="text-body justify-content-center fs-sm stretched-link text-decoration-none">Créa 4</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      

      <!-- Testimonials -->
      <section class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="card h-100 border-0 overflow-hidden px-md-4">
              <span class="bg-gradient-primary position-absolute top-0 start-0 w-100 h-100 opacity-10 d-none d-md-block"></span>
              <div class="card-body d-flex flex-column align-items-center justify-content-center position-relative zindex-2 p-0 pb-2 p-lg-4">
                <h2 class="h1 text-center text-md-start p-lg-4">Ce que nos clients disent <br> de Norsky Entreprise</h2>
              </div>
            </div>
          </div>
          <div class="col-md-7">
            <div class="card border-0 shadow-sm p-4 p-xxl-5">
              <div class="d-flex justify-content-between pb-4 mb-2">
                <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
                  <i class="bx bxs-quote-left"></i>
                </span>
                <div class="d-flex">
                  <button type="button" id="testimonials-prev" class="btn btn-prev btn-icon btn-sm me-2" aria-label="Previous">
                    <i class="bx bx-chevron-left"></i>
                  </button>
                  <button type="button" id="testimonials-next" class="btn btn-next btn-icon btn-sm ms-2" aria-label="Next">
                    <i class="bx bx-chevron-right"></i>
                  </button>
                </div>
              </div>
              
              <!-- Slider -->
              <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
                "spaceBetween": 24,
                "loop": true,
                "pagination": {
                  "el": ".swiper-pagination",
                  "clickable": true
                },
                "navigation": {
                  "prevEl": "#testimonials-prev",
                  "nextEl": "#testimonials-next"
                }
              }'>
                <div class="swiper-wrapper">

                  <!-- Item -->
                  <div class="swiper-slide h-auto">
                    <figure class="card h-100 position-relative border-0 bg-transparent">
                      <blockquote class="card-body p-0 mb-0">
                        <p class="fs-lg mb-0">Mi semper risus ultricies orci pulvinar in at enim orci. Quis facilisis nunc pellentesque in ullamcorper sit. Lorem blandit arcu sapien, senectus libero, amet dapibus cursus quam. Eget pellentesque eu purus volutpat adipiscing malesuada. Purus nisi, tortor vel lacus.</p>
                      </blockquote>
                      <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                        <img src="/../assets/img/avatar/14.jpg" width="60" class="rounded-circle" alt="Annette Black">
                        <div class="ps-3">
                          <h6 class="fw-semibold lh-base mb-0">Annette Black</h6>
                          <span class="fs-sm text-muted">Strategic Advisor at Company LLC</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide h-auto">
                    <figure class="card h-100 position-relative border-0 bg-transparent">
                      <blockquote class="card-body p-0 mb-0">
                        <p class="fs-lg mb-0">Vestibulum nunc lectus auctor quis. Natoque lectus tortor lacus, eu. Nunc feugiat nisl maecenas nulla hac morbi. Vitae, donec facilisis sed nunc netus. Venenatis posuere faucibus enim est. Vel dignissim morbi blandit morbi tellus. Arcu ullamcorper quis enim.</p>
                      </blockquote>
                      <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                        <img src="/../assets/img/avatar/13.jpg" width="60" class="rounded-circle" alt="Ralph Edwards">
                        <div class="ps-3">
                          <h6 class="fw-semibold lh-base mb-0">Ralph Edwards</h6>
                          <span class="fs-sm text-muted">Head of Marketing at Lorem Ltd. </span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>

                  <!-- Item -->
                  <div class="swiper-slide h-auto">
                    <figure class="card h-100 position-relative border-0 bg-transparent">
                      <blockquote class="card-body p-0 mb-0">
                        <p class="fs-lg mb-0">Ac at sed sit senectus massa. Massa ante amet ultrices magna porta tempor. Aliquet diam in et magna ultricies mi at. Lectus enim, vel enim egestas nam pellentesque et leo. Elit mi faucibus laoreet aliquam pellentesque sed aliquet integer massa. Orci leo tortor ornare.</p>
                      </blockquote>
                      <figcaption class="card-footer border-0 d-flex align-items-center w-100 pb-2">
                        <img src="/../assets/img/avatar/11.jpg" width="60" class="rounded-circle" alt="Darrell Steward">
                        <div class="ps-3">
                          <h6 class="fw-semibold lh-base mb-0">Darrell Steward</h6>
                          <span class="fs-sm text-muted">Project Manager at Ipsum Ltd.</span>
                        </div>
                      </figcaption>
                    </figure>
                  </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative mt-5"></div>
              </div>        
            </div>
          </div>
        </div>
      </section>



      <!-- Team -->
      <section class="container py-5 my-md-3 my-lg-5">
        <h2 class="h1 text-center pt-1 pb-3 mb-3 mb-lg-4 text-capitalize">notre direction </h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="/../assets/img/equipe/personnel-equipe.webp" class="rounded-3" alt="Jenny Wilson">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
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
                <p class="fs-sm mb-0">Co-Founder &amp; CEO</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="/../assets/img/equipe/p1_equipe.jpg" class="rounded-3" alt="Ralph Edwards">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
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
                <p class="fs-sm mb-0">Co-Founder</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="/../assets/img/equipe/p2_equipe.webp" class="rounded-3" alt="Cameron Williamson">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white me-2" aria-label="Dribbble">
                      <i class="bx bxl-dribbble"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Cameron Williamson</h3>
                <p class="fs-sm mb-0">Creative Director</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="/../assets/img/equipe/p3_equipe.jpeg" class="rounded-3" alt="Jerome Bell">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Jerome Bell</h3>
                <p class="fs-sm mb-0">Marketing Director</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="/../assets/img/team/05.jpg" class="rounded-3" alt="Marvin McKinney">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-behance btn-sm bg-white me-2" aria-label="Behance">
                      <i class="bx bxl-behance"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white" aria-label="Dribbble">
                      <i class="bx bxl-dribbble"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Marvin McKinney</h3>
                <p class="fs-sm mb-0">Lead Designer</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="/../assets/img/team/06.jpg" class="rounded-3" alt="Esther Howard">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white me-2" aria-label="Dribbble">
                      <i class="bx bxl-dribbble"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-behance btn-sm bg-white" aria-label="Behance">
                      <i class="bx bxl-behance"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Esther Howard</h3>
                <p class="fs-sm mb-0">Motion Designer</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="/../assets/img/team/07.jpg" class="rounded-3" alt="Darrell Steward">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                  <div class="position-relative d-flex zindex-2">
                    <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-stack-overflow btn-sm bg-white me-2" aria-label="Stack Overflow">
                      <i class="bx bxl-stack-overflow"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-secondary btn-github btn-sm bg-white" aria-label="GitHub">
                      <i class="bx bxl-github"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="card-body text-center p-3">
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Darrell Steward</h3>
                <p class="fs-sm mb-0">Lead Developer</p>
              </div>
            </div>
          </div>

          <!-- Item -->
          <div class="col">
            <div class="card card-hover border-0 bg-transparent">
              <div class="position-relative">
                <img src="/../assets/img/team/08.jpg" class="rounded-3" alt="Jane Cooper">
                <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
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
                <h3 class="fs-lg fw-semibold pt-1 mb-2">Jane Cooper</h3>
                <p class="fs-sm mb-0">Senior Project Manager</p>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Contact CTA -->
     


      <!-- Social networks (Carousel on narrow screens) -->
      <section class="container text-center py-5 my-2 my-md-4 my-lg-5">
        <h2 class="h1 mb-4">Nous avons des réseaux sociaux</h2>
        <p class="fs-lg text-muted pb-2 mb-5">Suivez-nous et restez informé des dernières nouvelles </p>
        <div class="swiper" data-swiper-options='{
          "slidesPerView": 2,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3
            },
            "650": {
              "slidesPerView": 4
            },
            "900": {
              "slidesPerView": 5
            },
            "1100": {
              "slidesPerView": 6
            }
          }
        }'>
          <div class="swiper-wrapper">

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-lg stretched-link" aria-label="Facebook">
                  <i class="bx bxl-facebook"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Facebook</h6>
                  <p class="fs-sm text-muted mb-0">Norsky</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-instagram btn-lg stretched-link" aria-label="Instagram">
                  <i class="bx bxl-instagram"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Instagram</h6>
                  <p class="fs-sm text-muted mb-0">@Norsky</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-lg stretched-link" aria-label="Twitter">
                  <i class="bx bxl-twitter"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Twitter</h6>
                  <p class="fs-sm text-muted mb-0">@silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-lg stretched-link" aria-label="LinkedIn">
                  <i class="bx bxl-linkedin"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">LinkedIn</h6>
                  <p class="fs-sm text-muted mb-0">Silicon Inc.</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-youtube btn-lg stretched-link" aria-label="Twitter">
                  <i class="bx bxl-youtube"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">YouTube</h6>
                  <p class="fs-sm text-muted mb-0">Silicon</p>
                </div>
              </div>
            </div>

            <!-- Item -->
            <div class="swiper-slide">
              <div class="position-relative text-center border-end mx-n1">
                <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-lg stretched-link" aria-label="Dribbble">
                  <i class="bx bxl-dribbble"></i>
                </a>
                <div class="pt-4">
                  <h6 class="mb-1">Dribbble</h6>
                  <p class="fs-sm text-muted mb-0">Silicon</p>
                </div>
              </div>
            </div>
          </div>

          <!-- Pagination (bullets) -->
          <div class="swiper-pagination position-relative bottom-0 pt-3 mt-4"></div>
        </div>
      </section>
    </main>

    @endsection