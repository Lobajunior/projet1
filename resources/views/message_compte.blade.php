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

          <!-- Account messages -->
          <div class="col-md-8 col-lg-9 pb-5 mb-lg-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
            <div class="ps-md-3 mt-md-2 pt-md-4 pb-md-2">
              <div class="row g-0 border rounded-3 shadow-sm position-relative overflow-hidden">

                <!-- Contacts list -->
                <div class="col-lg-4">
                  <div id="contactsList" class="offcanvas-lg offcanvas-start d-flex flex-column position-absolute position-lg-relative h-100 bg-secondary shadow-none border-end" data-bs-scroll="true" data-bs-backdrop="false" style="max-height: 712px;">
                    <div class="card-header w-100 border-0 p-4">
                      <div class="d-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0">Messages</h1>
                        <button type="button" class="btn btn-link nav-link bg-faded-primary-hover d-lg-none py-2 ps-2 pe-3 me-n3" data-bs-dismiss="offcanvas" data-bs-target="#contactsList">
                          <i class="bx bx-x fs-xl me-1"></i>
                          Fermer
                        </button>
                      </div>
                      <div class="position-relative">
                        <input type="text" class="form-control pe-5" placeholder="Search">
                        <i class="bx bx-search fs-xl text-nav position-absolute top-50 end-0 translate-middle-y me-3"></i>
                      </div>
                    </div>
                    <div class="card-body swiper scrollbar-hover overflow-hidden w-100 p-0" data-swiper-options='{
                      "direction": "vertical",
                      "slidesPerView": "auto",
                      "freeMode": true,
                      "scrollbar": {
                        "el": ".swiper-scrollbar"
                      },
                      "mousewheel": true
                    }'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide h-auto">

                          <!-- Contact -->
                          <a href="#" class="d-flex align-items-start border-bottom text-decoration-none bg-faded-primary-hover py-3 px-4">
                            <img src="/../assets/img/avatar/Davido.jpeg" class="rounded-circle" width="40" alt="image">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Davido</h6>
                                <span class="fs-xs text-muted">18:02</span>
                              </div>
                              <p class="fs-sm text-body mb-0">je vous aimes </p>
                            </div>
                          </a>

                          <!-- Contact (active) -->
                          <a href="#" class="position-relative d-flex align-items-start border-bottom text-decoration-none bg-light pe-none py-3 px-4">
                            <div class="position-absolute top-0 start-0 bg-primary w-2 h-100"></div>
                            <img src="/../assets/img/avatar/neymar 1.jpg" class="rounded-circle" width="40" alt="image">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Neymar Jr</h6>
                                <span class="fs-xs text-muted">17:33</span>
                              </div>
                              <p class="fs-sm text-body mb-0">Vous êtes bienvenue  😊</p>
                            </div>
                          </a>

                          <!-- Contact -->
                          <a href="#" class="d-flex align-items-start border-bottom text-decoration-none bg-faded-primary-hover py-3 px-4">
                            <img src="/../assets/img/avatar/drogba.jpg" class="rounded-circle" width="40" alt="image">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Drogba</h6>
                                <span class="fs-xs text-muted">12:04</span>
                              </div>
                              <p class="fs-sm text-body mb-0">merci frère</p>
                            </div>
                          </a>

                          <!-- Contact -->
                          <a href="#" class="d-flex align-items-start border-bottom text-decoration-none bg-faded-primary-hover py-3 px-4">
                            <img src="/../assets/img/avatar/22.jpg" class="rounded-circle" width="40" alt="yasmine">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Yasmine</h6>
                                <span class="fs-xs text-muted">08:00</span>
                              </div>
                              <p class="fs-sm text-body mb-0">Ok 👌</p>
                            </div>
                          </a>

                          <!-- Contact -->
                          <a href="#" class="d-flex align-items-start border-bottom text-decoration-none bg-faded-primary-hover py-3 px-4">
                            <img src="/../assets/img/avatar/gims.jpg" class="rounded-circle" width="40" alt="image">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Gims</h6>
                                <span class="fs-xs text-muted">14 Nov</span>
                              </div>
                              <p class="fs-sm text-body mb-0">Salut</p>
                            </div>
                          </a>

                          <!-- Contact -->
                          <a href="#" class="d-flex align-items-start border-bottom text-decoration-none bg-faded-primary-hover py-3 px-4">
                            <img src="/../assets/img/avatar/24.jpg" class="rounded-circle" width="40" alt="Jerome Bell">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Jerome Bell</h6>
                                <span class="fs-xs text-muted">8 Oct</span>
                              </div>
                              <p class="fs-sm text-body mb-0">In pretium a eget nunc...</p>
                            </div>
                          </a>

                          <!-- Contact -->
                          <a href="#" class="d-flex align-items-start border-bottom text-decoration-none bg-faded-primary-hover py-3 px-4">
                            <img src="/../assets/img/avatar/25.jpg" class="rounded-circle" width="40" alt="Kathryn Murphy">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Kathryn Murphy</h6>
                                <span class="fs-xs text-muted">16 Sep</span>
                              </div>
                              <p class="fs-sm text-body mb-0">Tempor amet?</p>
                            </div>
                          </a>

                          <!-- Contact -->
                          <a href="#" class="d-flex align-items-start border-bottom text-decoration-none bg-faded-primary-hover py-3 px-4">
                            <img src="/../assets/img/avatar/26.jpg" class="rounded-circle" width="40" alt="Dianne Russell">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Dianne Russell</h6>
                                <span class="fs-xs text-muted">27 Aug</span>
                              </div>
                              <p class="fs-sm text-body mb-0">Vehicula accumsan leo.</p>
                            </div>
                          </a>

                          <!-- Contact -->
                          <a href="#" class="d-flex align-items-start border-bottom text-decoration-none bg-faded-primary-hover py-3 px-4">
                            <img src="/../assets/img/avatar/27.jpg" class="rounded-circle" width="40" alt="Cody Fisher">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Cody Fisher</h6>
                                <span class="fs-xs text-muted">18 Aug</span>
                              </div>
                              <p class="fs-sm text-body mb-0">Erat cum amet viverra...</p>
                            </div>
                          </a>

                          <!-- Contact -->
                          <a href="#" class="d-flex align-items-start text-decoration-none bg-faded-primary-hover py-3 px-4">
                            <img src="/../assets/img/avatar/28.jpg" class="rounded-circle" width="40" alt="Darlene Robertson">
                            <div class="w-100 ps-2 ms-1">
                              <div class="d-flex align-items-center justify-content-between mb-1">
                                <h6 class="mb-0 me-2">Darlene Robertson</h6>
                                <span class="fs-xs text-muted">13 Jul</span>
                              </div>
                              <p class="fs-sm text-body mb-0">Orci convallis eget sit...</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="swiper-scrollbar end-0"></div>
                    </div>
                  </div>
                </div>

                <!-- Chat window -->
                <div class="col-lg-8" style="max-height: 712px;">
                  <div class="card h-100 border-0 bg-transparent pb-3">

                    <!-- Header -->
                    <div class="navbar card-header d-flex align-items-center justify-content-between w-100 p-sm-4 p-3">
                      <div class="d-flex align-items-center pe-3">
                        <button type="button" class="navbar-toggler d-lg-none me-3" data-bs-toggle="offcanvas" data-bs-target="#contactsList" aria-controls="contactsList" aria-label="Toggle contacts list">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <img src="/../assets/img/avatar/neymar 1.jpg" class="rounded-circle" width="40" alt="images">
                        <h6 class="mb-0 px-1 mx-2">Neymar Jr</h6>
                        <div class="bg-success rounded-circle" style="width: 8px; height: 8px;"></div>
                      </div>
                      <div class="d-flex">
                        <div class="dropdown me-sm-2">
                          <button type="button" class="btn btn-outline-primary px-2 px-sm-3" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-horizontal-rounded fs-xl mx-1 mx-sm-0 me-xl-2"></i>
                            <span class="d-none d-xl-inline">Plus</span>
                          </button>
                          <div class="dropdown-menu dropdown-menu-end my-1">
                            <a href="#" class="dropdown-item">View profile</a>
                            <a href="#" class="dropdown-item">Disable notifications</a>
                            <a href="#" class="dropdown-item">Edit contact</a>
                            <a href="#" class="dropdown-item">Delete contact</a>
                            <a href="#" class="dropdown-item">Delete chat</a>
                            <a href="#" class="dropdown-item">Clear history</a>
                            <a href="#" class="dropdown-item">Block user</a>
                          </div>
                        </div>
                        <button type="button" class="btn btn-outline-danger d-none d-sm-inline-flex px-2 px-sm-3 ms-1">
                          <i class="bx bx-trash-alt fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Effacer le chat</span>
                        </button>
                      </div>
                    </div>

                    <!-- Messages -->
                    <div class="card-body swiper scrollbar-hover overflow-hidden w-100 pb-0" data-swiper-options='{
                      "direction": "vertical",
                      "slidesPerView": "auto",
                      "freeMode": true,
                      "scrollbar": {
                        "el": ".swiper-scrollbar"
                      },
                      "mousewheel": true
                    }'>
                      <div class="swiper-wrapper">
                        <div class="swiper-slide h-auto">
                          <div class="fs-sm text-muted text-center mb-3">November 27, 2023</div>

                          <!-- User message -->
                          <div class="d-flex align-items-start mb-3">
                            <img src="/../assets/img/avatar/neymar 1.jpg" class="rounded-circle" width="40" alt="Albert Flores">
                            <div class="ps-2 ms-1" style="max-width: 348px;">
                              <div class="bg-secondary p-3 mb-1" style="border-top-right-radius: .5rem; border-bottom-right-radius: .5rem; border-bottom-left-radius: .5rem;">Tellus, ipsum, commodo, dui ac. Ultrices mi arcu orci aliquam et.</div>
                              <div class="fs-sm text-muted">09:04 am</div>
                            </div>
                          </div>

                          <!-- Own message -->
                          <div class="d-flex align-items-start justify-content-end mb-3">
                            <div class="pe-2 me-1" style="max-width: 348px;">
                              <div class="bg-primary text-light p-3 mb-1" style="border-top-left-radius: .5rem; border-bottom-right-radius: .5rem; border-bottom-left-radius: .5rem;">Orci convallis eget sit ultricies rutrum.</div>
                              <div class="d-flex justify-content-end align-items-center fs-sm text-muted">
                                10:36 am
                                <i class="bx bx-check-double fs-xl text-primary ms-2"></i>
                              </div>
                            </div>
                            <img src="/../assets/img/avatar/drogba.jpg" class="rounded-circle" width="40" alt="image">
                          </div>

                          <!-- User message -->
                          <div class="d-flex align-items-start mb-3">
                            <img src="/../assets/img/avatar/neymar 1.jpg" class="rounded-circle" width="40" alt="image">
                            <div class="ps-2 ms-1" style="max-width: 348px;">
                              <div class="bg-secondary p-3 mb-1" style="border-top-right-radius: .5rem; border-bottom-right-radius: .5rem; border-bottom-left-radius: .5rem;">Blandit tempus, erat cum amet viverra pharetra, morbi. Vivamus pretium tristique amet, nulla aenean sed blandit?</div>
                              <div class="fs-sm text-muted">14:48 pm</div>
                            </div>
                          </div>

                          <!-- Own message -->
                          <div class="d-flex align-items-start justify-content-end mb-3">
                            <div class="pe-2 me-1" style="max-width: 348px;">
                              <div class="bg-primary text-light p-3 mb-1" style="border-top-left-radius: .5rem; border-bottom-right-radius: .5rem; border-bottom-left-radius: .5rem;">Vel enim lacus, ac, fermentum, id. Aliquet faucibus pellentesque egestas.</div>
                              <div class="bg-primary text-light p-3 mb-1" style="border-top-left-radius: .5rem; border-bottom-right-radius: .5rem; border-bottom-left-radius: .5rem;">Thank you!</div>
                              <div class="d-flex justify-content-end align-items-center fs-sm text-muted">
                                16:29 pm
                                <i class="bx bx-check fs-xl text-primary ms-2"></i>
                              </div>
                            </div>
                            <img src="/../assets/img/avatar/neymar1.jpg" class="rounded-circle" width="40" alt="image">
                          </div>

                          <div class="fs-sm text-muted text-center mb-3">November 28, 2023</div>

                          <!-- User message -->
                          <div class="d-flex align-items-start mb-3">
                            <img src="/../assets/img/avatar/neymar1.jpg" class="rounded-circle" width="40" alt="image">
                            <div class="ps-2 ms-1" style="max-width: 348px;">
                              <div class="bg-secondary p-3 mb-1" style="border-top-right-radius: .5rem; border-bottom-right-radius: .5rem; border-bottom-left-radius: .5rem;">You are welcome 😊</div>
                              <div class="fs-sm text-muted">17:33 pm</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="swiper-scrollbar end-0"></div>
                    </div>

                    <!-- Footer (Send message form) -->
                    <div class="card-footer d-sm-flex w-100 border-0 pt-3 pb-3 px-4">
                      <div class="position-relative w-100 me-2 mb-3 mb-sm-0">
                        <input type="text" class="form-control form-control-lg" style="padding-right: 85px;">
                        <div class="position-absolute top-50 end-0 translate-middle-y d-flex zindex-3 me-2">
                          <button type="button" class="btn btn-icon btn-sm btn-link nav-link bg-faded-primary-hover me-1" aria-label="Attachment">
                            <i class="bx bx-paperclip fs-4"></i>
                          </button>
                          <button type="button" class="btn btn-icon btn-sm btn-link nav-link bg-faded-primary-hover" aria-label="Emoji">
                            <i class="bx bx-smile fs-4"></i>
                          </button>
                        </div>
                      </div>
                      <button type="button" class="btn btn-primary btn-icon btn-lg d-none d-sm-inline-flex ms-1" aria-label="Send">
                        <i class="bx bx-send"></i>
                      </button>
                      <button type="button" class="btn btn-primary btn-lg w-100 d-sm-none">
                        <i class="bx bx-send fs-xl me-2"></i>
                        Send
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection