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

          <!-- Account notifications -->
          <div class="col-md-8 offset-lg-1 pb-5 mb-lg-4 pt-md-5 mt-n3 mt-md-0">
            <form class="ps-md-3 ps-lg-0 mt-md-2 pt-md-4 pb-md-2">
              <div class="d-flex align-items-center justify-content-between pt-xl-1 mb-3 pb-3">
                <h1 class="h2 mb-0">Notifications</h1>
                <button type="button" class="btn btn-outline-danger px-3 px-sm-4">
                  <i class="bx bx-bell-off fs-xl me-sm-1"></i>
                  <span class="d-none d-sm-inline">
                  Suspendre toutes les notifications</span>
                </button>
              </div>
              <div class="row align-items-end pb-3 mb-2 mb-sm-4">
                <div class="col-lg-6 col-sm-7">
                  <label for="notifications-email" class="form-label fs-base">
                  E-mail préféré</label>
                  <select id="notifications-email" class="form-select form-select-lg">
                    <option value="norskyentreprise@gmail.com">norskyentreprise@gmail.com</option>
                    <option value="john_doe@email.com">john_doe@email.com</option>
                  </select>
                </div>
                <div class="col-lg-6 col-sm-5">
                  <button type="button" class="btn btn-link btn-lg px-0">
                    <i class="bx bx-plus fs-xl me-2"></i>
                    Ajouter un nouvel e-mail
                  </button>
                </div>
              </div>
              <div class="form-check form-switch form-switch-success d-flex mb-4">
                <input type="checkbox" id="activity" class="form-check-input flex-shrink-0" checked>
                <label for="activity" class="form-check-label ps-3">
                  <span class="h6 d-block mb-2">Mises à jour d'activité</span>
                  <span class="fs-sm text-muted">Nec, posuere non felis duis massa vitae aliquet interdum scelerisque. Neque ullamcorper.</span>
                </label>
              </div>
              <div class="form-check form-switch form-switch-success d-flex mb-4">
                <input type="checkbox" id="letters" class="form-check-input flex-shrink-0">
                <label for="letters" class="form-check-label ps-3">
                  <span class="h6 d-block mb-2">Lettres d'information de nos partenaires</span>
                  <span class="fs-sm text-muted">Tortor massa porttitor enim tristique neque fermentum sed.</span>
                </label>
              </div>
              <div class="form-check form-switch form-switch-success d-flex mb-4">
                <input type="checkbox" id="account" class="form-check-input flex-shrink-0" checked>
                <label for="account" class="form-check-label ps-3">
                  <span class="h6 d-block mb-2">L'activité du compte</span>
                  <span class="fs-sm text-muted">Maecenas aenean porta sit integer a duis commodo massa pulvinar.</span>
                </label>
              </div>
              <div class="form-check form-switch form-switch-success d-flex mb-4">
                <input type="checkbox" id="promoions" class="form-check-input flex-shrink-0">
                <label for="promoions" class="form-check-label ps-3">
                  <span class="h6 d-block mb-2">Promotions, recommandations &amp; ressources utiles</span>
                  <span class="fs-sm text-muted">Aliquam sagittis fames pharetra placerat tempus. Volutpat orci neque elit malesuada mauris neque, tempus.</span>
                </label>
              </div>
              <div class="form-check form-switch form-switch-success d-flex mb-4">
                <input type="checkbox" id="summary" class="form-check-input flex-shrink-0">
                <label for="summary" class="form-check-label ps-3">
                  <span class="h6 d-block mb-2">E-mails de synthèse quotidiens</span>
                  <span class="fs-sm text-muted">Condimentum nunc, massa, nibh maecenas bibendum morbi neque.</span>
                </label>
              </div>
              <div class="d-flex pt-3 mb-3">
                <button type="reset" class="btn btn-secondary me-3">Restaurer</button>
                <button type="submit" class="btn btn-primary">Sauvegarder les modifications</button>
              </div>
            </form>
          </div>
        </div>
      </section>
    </main>

@endsection