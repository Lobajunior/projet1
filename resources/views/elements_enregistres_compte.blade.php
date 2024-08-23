@extends('layouts/app')

@section('container')


      <!-- Page content -->
      <section class="container pt-5">
        <div class="row">

  
               <!-- Sidebar (User info + Account menu) -->
               <aside class="col-lg-3 col-md-4 border-end pb-5 mt-n5">
            <div class="position-sticky top-0">
              <div class="text-center pt-5">
                <div class="d-table position-relative mx-auto mt-2 mt-lg-4 pt-5 mb-3">
                  <img src="/../assets/img/avatar/baddest.webp" class="d-block rounded-circle" width="120" alt="John Doe">
                  <button type="button" class="btn btn-icon btn-light bg-white btn-sm border rounded-circle shadow-sm position-absolute bottom-0 end-0 mt-4" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Change picture" aria-label="Change picture">
                    <i class="bx bx-refresh"></i>
                  </button>
                </div>
                <h2 class="h5 mb-1">Norsky</h2>
                <p class="mb-3 pb-3">norskyentreprise@email.com</p>
                <button type="button" class="btn btn-secondary w-100 d-md-none mt-n2 mb-3" data-bs-toggle="collapse" data-bs-target="#account-menu">
                  <i class="bx bxs-user-detail fs-xl me-2"></i>
                    Menu du compte  
                  <i class="bx bx-chevron-down fs-lg ms-1"></i>
                </button>
                <div id="account-menu" class="list-group list-group-flush collapse d-md-block">
                  <a href="/page/detail_compte/norskyentreprise" class="list-group-item list-group-item-action d-flex align-items-center active">
                    <i class="bx bx-cog fs-xl opacity-60 me-2"></i>
                    Details du compte
                  </a>
                  <a href="/page/securite_compte/norskyentreprise" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-lock-alt fs-xl opacity-60 me-2"></i>
                    Securité
                  </a>
                  <a href="/page/notification_compte/norskyentreprise" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-bell fs-xl opacity-60 me-2"></i>
                    Notifications
                  </a>
                  <a href="/page/message_compte/norskyentreprise" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-chat fs-xl opacity-60 me-2"></i>
                    Messages
                  </a>
                  <a href="/page/enregistrements_elements_compte/norskyentreprise" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-bookmark fs-xl opacity-60 me-2"></i>
                        Éléments enregistrés
                  </a>
                  <a href="/page/collection_compte/norskyentreprise" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-collection fs-xl opacity-60 me-2"></i>
                    Mes collections
                  </a>
                  <a href="/page/paeiment_details_compte/norskyentreprise" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-credit-card-front fs-xl opacity-60 me-2"></i>
                    Détails de paiement
                  </a>
                  <a href="account-signin.html" class="list-group-item list-group-item-action d-flex align-items-center">
                    <i class="bx bx-log-out fs-xl opacity-60 me-2"></i>
                    
Se déconnecter
                  </a>
                </div>
              </div>
            </div>
          </aside>

          <!-- Account saved items -->
          <div class="col-md-8 offset-lg-1 pb-5 mb-lg-2 pt-md-5 mt-n3 mt-md-0">
            <div class="ps-md-3 ps-lg-0 mt-md-2 pt-md-4 pb-md-2">
              <div class="d-flex align-items-center justify-content-between pt-xl-1 mb-3 pb-3">
                <h1 class="h2 mb-0">Éléments enregistrés</h1>
                <button type="button" class="btn btn-outline-danger px-3 px-sm-4">
                  <i class="bx bx-trash-alt fs-xl me-sm-2"></i>
                  <span class="d-none d-sm-inline">Enlever tout</span>
                </button>
              </div>
              <div class="row row-cols-1 row-cols-sm-2 gx-3 gx-lg-4">
  
                <!-- Item -->
                <div class="col pb-lg-2 mb-4">
                  <article class="card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                      <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Cover image"></a>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove" aria-label="Remove">
                        <i class="bx bxs-bookmark"></i>
                      </a>
                      <img src="/../assets/img/portfolio/courses/07.jpg" class="card-img-top" alt="Image">
                    </div>
                    <div class="card-body pb-3">
                      <h3 class="h5 mb-2">
                        <a href="portfolio-single-course.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa, doloremque?</a>
                      </h3>
                      <p class="fs-sm mb-2">By Ralph Edwards</p>
                      <p class="fs-lg fw-semibold text-primary mb-0">25.000Fcfa</p>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                      <div class="d-flex align-items-center me-4">
                        <i class="bx bx-time fs-xl me-1"></i>
                       200 heures
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-like fs-xl me-1"></i>
                        93% (4.5K)
                      </div>
                    </div>
                  </article>
                </div>
  
                <!-- Item -->
                <div class="col pb-lg-2 mb-4">
                  <article class="card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                      <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Cover image"></a>
                      <span class="badge bg-success position-absolute top-0 start-0 zindex-2 mt-3 ms-3">Best Seller</span>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove" aria-label="Remove">
                        <i class="bx bxs-bookmark"></i>
                      </a>
                      <img src="/../assets/img/portfolio/courses/01.jpg" class="card-img-top" alt="Image">
                    </div>
                    <div class="card-body pb-3">
                      <h3 class="h5 mb-2">
                        <a href="portfolio-single-course.html">Cours de développeur Web Fullstack à partir de zéro</a>
                      </h3>
                      <p class="fs-sm mb-2">Yao</p>
                      <p class="fs-lg fw-semibold text-primary mb-0">30.000 Fcfa</p>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                      <div class="d-flex align-items-center me-4">
                        <i class="bx bx-time fs-xl me-1"></i>
                        220 heures
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-like fs-xl me-1"></i>
                        94% (4.2K)
                      </div>
                    </div>
                  </article>
                </div>
  
                <!-- Item -->
                <div class="col pb-lg-2 mb-4">
                  <article class="card h-100 border-0 shadow-sm">
                    <div class="position-relative">
                      <a href="portfolio-single-course.html" class="d-block position-absolute w-100 h-100 top-0 start-0" aria-label="Cover image"></a>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-2 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Remove" aria-label="Remove">
                        <i class="bx bxs-bookmark"></i>
                      </a>
                      <img src="/../assets/img/portfolio/courses/09.jpg" class="card-img-top" alt="Image">
                    </div>
                    <div class="card-body pb-3">
                      <h3 class="h5 mb-2">
                        <a href="portfolio-single-course.html">Learn JMETER from Scratch on Live Apps-Performance Testing</a>
                      </h3>
                      <p class="fs-sm mb-2">By Jenny Wilson</p>
                      <p class="fs-lg fw-semibold text-primary mb-0">$14.50</p>
                    </div>
                    <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                      <div class="d-flex align-items-center me-4">
                        <i class="bx bx-time fs-xl me-1"></i>
                        120 hours
                      </div>
                      <div class="d-flex align-items-center">
                        <i class="bx bx-like fs-xl me-1"></i>
                        92% (3.8K)
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection