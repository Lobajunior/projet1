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
          <div class="col-md-8 offset-lg-1 pb-5 mb-lg-2 pt-md-5 mt-n3 mt-md-0">
            <div class="ps-md-3 ps-lg-0 mt-md-2 pt-md-4 pb-md-2">
              <div class="d-sm-flex align-items-center justify-content-between pt-xl-1 mb-3 pb-3">
                <h1 class="h2 mb-sm-0">Mes collections</h1>
                <select class="form-select" style="max-width: 15rem;">
                  <option value="Publié">Publié</option>
                  <option value="Catégorie">Catégorie</option>
                  <option value="Titre AZ">Titre AZ</option>
                  <option value="Titre ZA">Titre ZA </option>
                </select>
              </div>

              <!-- Item -->
              <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="row g-0">
                  <a href="#" class="col-sm-4 bg-repeat-0 bg-position-center bg-size-cover" style="background-image: url(assets/img/account/collection01.jpg); min-height: 13rem;" aria-label="Cover image"></a>
                  <div class="col-sm-8">
                    <div class="card-body">
                      <div class="fs-sm text-muted mb-1">Nov 30, 2023</div>
                      <h2 class="h4 pb-1 mb-2">
                        <a href="#">Illustration de forme 3D</a>
                      </h2>
                      <p class="mb-4 mb-lg-5">
                      NFT / Conception graphique / Motion Design</p>
                      <div class="d-flex">
                        <button type="button" class="btn btn-outline-primary px-3 px-lg-4 me-3">
                          <i class="bx bx-edit fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Modifier</span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary px-3 px-lg-4 me-3">
                          <i class="bx bx-power-off fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Desactiver</span>
                        </button>
                        <button type="button" class="btn btn-outline-danger px-3 px-lg-4">
                          <i class="bx bx-trash-alt fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Supprimer</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="row g-0">
                  <a href="#" class="col-sm-4 bg-repeat-0 bg-position-center bg-size-cover" style="background-image: url(assets/img/account/collection02.jpg); min-height: 13rem;" aria-label="Cover image"></a>
                  <div class="col-sm-8">
                    <div class="card-body">
                      <div class="fs-sm text-muted mb-1">Oct 18, 2023</div>
                      <h2 class="h4 pb-1 mb-2">
                        <a href="#">scène de lunettes de soleil&amp; Casque sur tête humaine</a>
                      </h2>
                      <p class="mb-4 mb-lg-5">G
                      Design raphique / Art / Identité / Motion Design</p>
                      <div class="d-flex">
                        <button type="button" class="btn btn-outline-primary px-3 px-lg-4 me-3">
                          <i class="bx bx-edit fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Modifier</span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary px-3 px-lg-4 me-3">
                          <i class="bx bx-power-off fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Desactiver</span>
                        </button>
                        <button type="button" class="btn btn-outline-danger px-3 px-lg-4">
                          <i class="bx bx-trash-alt fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Supprimer</span>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Item -->
              <div class="card border-0 shadow-sm overflow-hidden mb-4">
                <div class="row g-0">
                  <a href="#" class="col-sm-4 bg-repeat-0 bg-position-center bg-size-cover" style="background-image: url(assets/img/account/collection03.jpg); min-height: 13rem;" aria-label="Cover image"></a>
                  <div class="col-sm-8">
                    <div class="card-body">
                      <div class="fs-sm text-muted mb-1">Aug 05, 2023</div>
                      <h2 class="h4 pb-1 mb-2">
                        <a href="#">Mannequin mains tenant le téléphone</a>
                      </h2>
                      <p class="mb-4 mb-lg-5">NFT / Conception d'applications mobiles / Conception graphique / Art</p>
                      <div class="d-flex">
                        <button type="button" class="btn btn-outline-primary px-3 px-lg-4 me-3">
                          <i class="bx bx-edit fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Modifier</span>
                        </button>
                        <button type="button" class="btn btn-outline-secondary px-3 px-lg-4 me-3">
                          <i class="bx bx-power-off fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Desactiver</span>
                        </button>
                        <button type="button" class="btn btn-outline-danger px-3 px-lg-4">
                          <i class="bx bx-trash-alt fs-xl me-xl-2"></i>
                          <span class="d-none d-xl-inline">Supprimer</span>
                        </button>
                      </div>
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