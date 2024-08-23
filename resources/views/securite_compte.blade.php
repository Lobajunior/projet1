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


          <!-- Account security -->
          <div class="col-md-8 offset-lg-1 pb-5 mb-lg-2 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
            <div class="ps-md-3 ps-lg-0 mt-md-2 pt-md-4 pb-md-2">
              <h1 class="h2 pt-xl-1 pb-3">Securité</h1>

              <!-- Password -->
              <h2 class="h5 text-primary mb-4">
              Mot de passe</h2>
              <form class="needs-validation border-bottom pb-3 pb-lg-4" novalidate>
                <div class="row">
                  <div class="col-sm-6 mb-4">
                    <label for="cp" class="form-label fs-base">Mot de passe actuel</label>
                    <div class="password-toggle">
                      <input type="password" id="cp" class="form-control form-control-lg" value="jonnyPass" required>
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                      </label>
                      <div class="invalid-tooltip position-absolute top-100 start-0">Mot de passe incorrect</div>
                    </div>
                  </div>
                </div>
                <div class="row pb-2">
                  <div class="col-sm-6 mb-4">
                    <label for="np" class="form-label fs-base">Nouvequ mot de passe </label>
                    <div class="password-toggle">
                      <input type="password" id="np" class="form-control form-control-lg" required>
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                      </label>
                      <div class="invalid-tooltip position-absolute top-100 start-0">Mot de passe incorrect!</div>
                    </div>
                  </div>
                  <div class="col-sm-6 mb-4">
                    <label for="cnp" class="form-label fs-base">Confirmer le mpot de passe</label>
                    <div class="password-toggle">
                      <input type="password" id="cnp" class="form-control form-control-lg" required>
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox">
                        <span class="password-toggle-indicator"></span>
                      </label>
                      <div class="invalid-tooltip position-absolute top-100 start-0">Mot de passe incorrect!</div>
                    </div>
                  </div>
                </div>
                <div class="d-flex mb-3">
                  <button type="reset" class="btn btn-secondary me-3">Annuler</button>
                  <button type="submit" class="btn btn-primary">Sauvegarder les modifications</button>
                </div>
              </form>

              <!-- Sessions -->
              <h2 class="h5 text-primary pt-1 pt-lg-3 mt-4">
              Vos séances</h2>
              <p class="pb-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, nesciunt!</p>
              <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-between mb-4">
                  <div class="d-flex align-items-start me-3">
                    <div class="bg-secondary rounded-1 p-2">
                      <i class="bx bx-desktop fs-xl text-primary d-block"></i>
                    </div>
                    <div class="ps-3">
                      <div class="fw-medium text-nav mb-1">Mac – Abidjo, côte d'ivoir</div>
                      <span class="d-inline-block fs-sm text-muted border-end pe-2 me-2">Chrome</span>
                      <span class="badge bg-success shadow-success">
                      Actif maintenant</span>
                    </div>
                  </div>
                  <button type="button" class="btn btn-outline-secondary px-3 px-sm-4">
                    <i class="bx bx-x fs-xl ms-sm-n1 me-sm-1"></i>
                    <span class="d-none d-sm-inline">Retirer</span>
                  </button>
                </li>
                <li class="d-flex align-items-center justify-content-between mb-4">
                  <div class="d-flex align-items-start me-3">
                    <div class="bg-secondary rounded-1 p-2">
                      <i class="bx bx-mobile fs-xl text-primary d-block"></i>
                    </div>
                    <div class="ps-3">
                      <div class="fw-medium text-nav mb-1">Iphone 12 – Abidjan, côte d'ivoire</div>
                      <span class="d-inline-block fs-sm text-muted border-end pe-2 me-2">norskyentreprise App</span>
                      <span class="d-inline-block fs-sm text-muted">Il y a 12 h</span>
                    </div>
                  </div>
                  <button type="button" class="btn btn-outline-secondary px-3 px-sm-4">
                    <i class="bx bx-x fs-xl ms-sm-n1 me-sm-1"></i>
                    <span class="d-none d-sm-inline">Retirer</span>
                  </button>
                </li>
                <li class="d-flex align-items-center justify-content-between mb-4">
                  <div class="d-flex align-items-start me-3">
                    <div class="bg-secondary rounded-1 p-2">
                      <i class="bx bx-desktop fs-xl text-primary d-block"></i>
                    </div>
                    <div class="ps-3">
                      <div class="fw-medium text-nav mb-1">Windows 10.1 – Abidjan, côte d'ivoire</div>
                      <span class="d-inline-block fs-sm text-muted border-end pe-2 me-2">Chrome</span>
                      <span class="d-inline-block fs-sm text-muted">il y a 19 h </span>
                    </div>
                  </div>
                  <button type="button" class="btn btn-outline-secondary px-3 px-sm-4">
                    <i class="bx bx-x fs-xl ms-sm-n1 me-sm-1"></i>
                    <span class="d-none d-sm-inline">Retirer</span>
                  </button>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection