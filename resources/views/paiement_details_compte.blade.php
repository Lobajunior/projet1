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


          <!-- Account collections -->
          <div class="col-md-8 offset-lg-1 pb-5 mb-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
            <div class="ps-md-3 ps-lg-0 mt-md-2 pt-md-4 pb-md-2">
              <h1 class="h2 pt-xl-1 mb-3 pb-2 pb-lg-3">Details Paiement</h1>
              <h2 class="h5 text-primary mb-4">Vos moyens de paiement enregistrés</h2>

              <!-- Item -->
              <div class="card d-sm-flex flex-sm-row align-items-sm-center justify-content-between border-0 shadow-sm p-3 p-md-4 mb-4">
                <div class="d-flex align-items-center pe-sm-3">
                  <img src="/../assets/img/account/mastercard.svg" width="84" alt="Mastercard">
                  <div class="ps-3 ps-sm-4">
                    <h6 class="mb-2">**** **** **** 4298 <span class="badge bg-success ms-1">Primaire</span></h6>
                    <div class="fs-sm">Expiration 09/26</div>
                  </div>
                </div>
                <div class="d-flex justify-content-end pt-3 pt-sm-0">
                  <button type="button" class="btn btn-outline-secondary px-3 px-xl-4 me-3">
                    <i class="bx bx-edit fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Modifier</span>
                  </button>
                  <button type="button" class="btn btn-outline-danger px-3 px-xl-4">
                    <i class="bx bx-trash-alt fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Supprimer</span>
                  </button>
                </div>
              </div>

              <!-- Item -->
              <div class="card d-sm-flex flex-sm-row align-items-sm-center justify-content-between border-0 shadow-sm p-3 p-md-4 mb-4">
                <div class="d-flex align-items-center pe-sm-3">
                  <img src="/../assets/img/account/visa.svg" width="84" alt="Visa">
                  <div class="ps-3 ps-sm-4">
                    <h6 class="mb-2">**** **** **** 9276</h6>
                    <div class="fs-sm">Expiration 11/25</div>
                  </div>
                </div>
                <div class="d-flex justify-content-end pt-3 pt-sm-0">
                  <button type="button" class="btn btn-outline-secondary px-3 px-xl-4 me-3">
                    <i class="bx bx-edit fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Modifier</span>
                  </button>
                  <button type="button" class="btn btn-outline-danger px-3 px-xl-4">
                    <i class="bx bx-trash-alt fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Supprimer</span>
                  </button>
                </div>
              </div>

              <!-- Item -->
              <div class="card d-sm-flex flex-sm-row align-items-sm-center justify-content-between border-0 shadow-sm p-3 p-md-4 mb-4">
                <div class="d-flex align-items-center pe-sm-3">
                  <img src="/../assets/img/account/amex.svg" width="84" alt="Amex">
                  <div class="ps-3 ps-sm-4">
                    <h6 class="mb-2">**** **** **** 3854</h6>
                    <div class="fs-sm">Expiration 03/26</div>
                  </div>
                </div>
                <div class="d-flex justify-content-end pt-3 pt-sm-0">
                  <button type="button" class="btn btn-outline-secondary px-3 px-xl-4 me-3">
                    <i class="bx bx-edit fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Modifier</span>
                  </button>
                  <button type="button" class="btn btn-outline-danger px-3 px-xl-4">
                    <i class="bx bx-trash-alt fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Supprimer</span>
                  </button>
                </div>
              </div>

              <!-- Item -->
              <div class="card d-sm-flex flex-sm-row align-items-sm-center justify-content-between border-0 shadow-sm p-3 p-md-4 mb-4">
                <div class="d-flex align-items-center pe-sm-3">
                  <img src="/../assets/img/account/bitcoin.svg" width="84" alt="Bitcoin">
                  <div class="ps-3 ps-sm-4">
                    <h6 class="mb-2">Bitcoin (BTC)</h6>
                    <div class="fs-sm">•••••••••• UNky</div>
                  </div>
                </div>
                <div class="d-flex justify-content-end pt-3 pt-sm-0">
                  <button type="button" class="btn btn-outline-secondary px-3 px-xl-4 me-3">
                    <i class="bx bx-edit fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Modifier</span>
                  </button>
                  <button type="button" class="btn btn-outline-danger px-3 px-xl-4">
                    <i class="bx bx-trash-alt fs-xl me-lg-1 me-xl-2"></i>
                    <span class="d-none d-lg-inline">Supprimer</span>
                  </button>
                </div>
              </div>
              <div class="py-2">
                <button type="button" class="btn btn-primary ps-4">
                  <i class="bx bx-plus fs-xl me-2"></i>
                  Add new payment method
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>


   @endsection