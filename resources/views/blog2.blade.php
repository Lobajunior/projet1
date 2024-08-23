@extends('layouts/app')


@section('container')

      <!-- Breadcrumb -->
      <nav class="container mt-lg-4 pt-5" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0 pt-5">
          <li class="breadcrumb-item">
            <a href="/"><i class="bx bx-home-alt fs-lg me-1"></i>Accueil</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Grille de blog avec barre latérale</li>
        </ol>
      </nav>


      <!-- Page content -->
      <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">

        <!-- Page title + Layout switcher -->
        <div class="d-flex align-items-center justify-content-between mb-4 pb-1 pb-md-3">
          <h1 class="mb-0">
          Grille de blog avec barre latérale</h1>
          <div class="nav flex-nowrap ms-sm-4 ms-3">
            <a href="blog-list-with-sidebar.html" class="nav-link me-2 p-0" aria-label="List view">
              <i class="bx bx-list-ul fs-4"></i>
            </a>
            <a href="blog-grid-with-sidebar.html" class="nav-link p-0 active" aria-label="Grid view">
              <i class="bx bx-grid-alt fs-4"></i>
            </a>
          </div>
        </div>


        <!-- Blog grid + Sidebar -->
        <div class="row">
          <div class="col-xl-9 col-lg-8">
            <div class="pe-xl-5">
              <div class="masonry-grid row row-cols-sm-2 row-cols-1 g-4">

                <!-- Item -->
                <div class="masonry-grid-item col pb-2 pb-lg-3">
                  <article class="card border-0 bg-transparent">
                    <div class="position-relative overflow-hidden rounded-3">
                      <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later" aria-label="Read later">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src="/../assets/img/blog/05.jpg" alt="Image">
                    </div>
                    <div class="card-body pb-1 px-0">
                      <a href="#" class="badge fs-sm text-white bg-info shadow-info text-decoration-none mb-3">Digital</a>
                      <h3 class="h4">
                        <a href="blog-single.html">Marketing inclusif : pourquoi et comment ça marche ?</a>
                      </h3>
                      <p class="mb-4">Nunc aliquet scelerisque pellentesque imperdiet tortor elit, dictum. Tristique odio at dignissim viverra aliquet eleifend erat. Tellus, at arcu, egestas praesent.</p>
                      <div class="d-flex align-items-center text-muted">
                        <div class="fs-sm border-end pe-3 me-3">Oct 9, 2023</div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-like fs-lg me-1"></i>
                          <span class="fs-sm">5</span>
                        </div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-comment fs-lg me-1"></i>
                          <span class="fs-sm">0</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="bx bx-share-alt fs-lg me-1"></i>
                          <span class="fs-sm">2</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="masonry-grid-item col pb-2 pb-lg-3">
                  <article class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between mb-3">
                        <a href="#" class="badge fs-sm text-white bg-warning shadow-warning text-decoration-none">
                        Entreprise</a>
                        <a href="#" class="btn btn-icon btn-secondary btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later" aria-label="Read later">
                          <i class="bx bx-bookmark"></i>
                        </a>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html">Une étude sur les qualités de conception des montres intelligentes et les préférences des gens</a>
                      </h3>
                      <p class="mb-3">Dignissim varius vehicula sagittis, cursus purus, congue. Tempor aliquam ut ridiculus dolor nibh felis. Feugiat in ut neque pellentesque. Urna adipiscing sodales pretium, pretium ornare enim lacus, ultrices amet. Enim in facilisis sit scelerisque sit.</p>
                      <div class="d-flex align-items-center text-muted">
                        <div class="fs-sm border-end pe-3 me-3">Sep 3, 2023</div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-like fs-lg me-1"></i>
                          <span class="fs-sm">8</span>
                        </div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-comment fs-lg me-1"></i>
                          <span class="fs-sm">7</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="bx bx-share-alt fs-lg me-1"></i>
                          <span class="fs-sm">4</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="masonry-grid-item col pb-2 pb-lg-3">
                  <article class="card border-0 bg-transparent">
                    <div class="position-relative overflow-hidden rounded-3">
                      <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later" aria-label="Read later">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src="/../assets/img/blog/02.jpg" alt="Image">
                    </div>
                    <div class="card-body pb-1 px-0">
                      <a href="#" class="badge fs-sm text-white bg-danger shadow-danger text-decoration-none mb-3">Technologie</a>
                      <h3 class="h4">
                        <a href="blog-single.html">
                        Pourquoi la conception UX est importante et comment elle affecte le classement</a>
                      </h3>
                      <p class="mb-4">In mauris porttitor tincidunt mauris massa sit lorem sed scelerisque. Fringilla pharetra vel massa enim sollicitudin cras. At pulvinar eget sociis adipiscing eget donec ultricies nibh tristique.</p>
                      <div class="d-flex align-items-center text-muted">
                        <div class="fs-sm border-end pe-3 me-3">Aug 19, 2023</div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-like fs-lg me-1"></i>
                          <span class="fs-sm">5</span>
                        </div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-comment fs-lg me-1"></i>
                          <span class="fs-sm">3</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="bx bx-share-alt fs-lg me-1"></i>
                          <span class="fs-sm">9</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="masonry-grid-item col pb-2 pb-lg-3">
                  <article class="card border-0 bg-transparent">
                    <div class="position-relative overflow-hidden rounded-3">
                      <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-35"></span>
                      <div class="d-flex align-items-center justify-content-center position-absolute top-0 start-0 w-100 h-100 zindex-2">
                        <a href="https://www.youtube.com/watch?v=vTgKtoU--Z8" class="btn btn-video btn-icon btn-lg bg-white stretched-link" data-bs-toggle="video" aria-label="Play video">
                          <i class="bx bx-play"></i>
                        </a>
                      </div>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later" aria-label="Read later">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src="/../assets/img/blog/01.jpg" alt="Image">
                    </div>
                    <div class="card-body pb-1 px-0">
                      <a href="#" class="badge fs-sm text-white bg-success shadow-success text-decoration-none mb-3">Startups</a>
                      <h3 class="h4">
                        <a href="blog-single.html">5 exemples de mauvaises pages de destination &amp; Comment nous les réparerions</a>
                      </h3>
                      <p class="mb-4">In mauris porttitor tincidunt mauris massa sit lorem sed scelerisque. Fringilla pharetra vel massa enim sollicitudin cras. At pulvinar eget sociis adipiscing eget donec ultricies nibh tristique.</p>
                      <div class="d-flex align-items-center text-muted">
                        <div class="fs-sm border-end pe-3 me-3">Aug 19, 2023</div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-like fs-lg me-1"></i>
                          <span class="fs-sm">5</span>
                        </div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-comment fs-lg me-1"></i>
                          <span class="fs-sm">3</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="bx bx-share-alt fs-lg me-1"></i>
                          <span class="fs-sm">9</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="masonry-grid-item col pb-2 pb-lg-3">
                  <article class="card border-0 bg-transparent">
                    <div class="position-relative overflow-hidden rounded-3">
                      <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100" aria-label="Read more"></a>
                      <a href="#" class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later" aria-label="Read later">
                        <i class="bx bx-bookmark"></i>
                      </a>
                      <img src="/../assets/img/blog/03.jpg" alt="Image">
                    </div>
                    <div class="card-body pb-1 px-0">
                      <a href="#" class="badge fs-sm text-white bg-info shadow-info text-decoration-none mb-3">Digital</a>
                      <h3 class="h4">
                        <a href="blog-single.html">
                        Cette semaine en recherche : nouvelles limites et fonctionnalités intéressantes</a>
                      </h3>
                      <p class="mb-4">Aliquet donec cras amet orci in in neque. Ut sed diam quis consectetur purus lorem eu, sit. Aliquam eget arcu sed urna feugiat. In integer nisl at dui malesuada. Diam pellentesque lobortis elementum lacus.</p>
                      <div class="d-flex align-items-center text-muted">
                        <div class="fs-sm border-end pe-3 me-3">Sep 16, 2023</div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-like fs-lg me-1"></i>
                          <span class="fs-sm">5</span>
                        </div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-comment fs-lg me-1"></i>
                          <span class="fs-sm">7</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="bx bx-share-alt fs-lg me-1"></i>
                          <span class="fs-sm">4</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>

                <!-- Item -->
                <div class="masonry-grid-item col pb-2 pb-lg-3">
                  <article class="card">
                    <div class="card-body">
                      <div class="d-flex justify-content-between mb-3">
                        <a href="#" class="badge fs-sm text-white bg-warning shadow-warning text-decoration-none">
                        Entreprise</a>
                        <a href="#" class="btn btn-icon btn-secondary btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3" data-bs-toggle="tooltip" data-bs-placement="left" title="Read later" aria-label="Read later">
                          <i class="bx bx-bookmark"></i>
                        </a>
                      </div>
                      <h3 class="h4">
                        <a href="blog-single.html">Cette technologie tant attendue pourrait enfin changer le monde</a>
                      </h3>
                      <p class="mb-3">Diam dui, aliquet tortor, cras aliquet pulvinar at lacus. Viverra iaculis eget scelerisque ac facilisi nulla quisque. Facilisi elementum eget sollicitudin sed dignissim feugiat amet, aliquam. Sed leo diam, euismod elementum. Gravida tristique rhoncus, vitae cum cras sagittis, tortor eu. Leo, urna suspendisse lorem quis volutpat.</p>
                      <div class="d-flex align-items-center text-muted">
                        <div class="fs-sm border-end pe-3 me-3">Sep 3, 2023</div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-like fs-lg me-1"></i>
                          <span class="fs-sm">0</span>
                        </div>
                        <div class="d-flex align-items-center me-3">
                          <i class="bx bx-comment fs-lg me-1"></i>
                          <span class="fs-sm">1</span>
                        </div>
                        <div class="d-flex align-items-center">
                          <i class="bx bx-share-alt fs-lg me-1"></i>
                          <span class="fs-sm">2</span>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
              </div>

              <!-- Load more button -->
              <button type="button" class="btn btn-lg btn-outline-primary w-100 mt-4">
                <i class="bx bx-down-arrow-alt fs-xl me-2"></i>
                Show more
              </button>
            </div>
          </div>


          <!-- Sidebar (Offcanvas below lg breakpoint) -->
          <aside class="col-xl-3 col-lg-4">
            <div class="offcanvas-lg offcanvas-end" id="blog-sidebar" tabindex="-1">

              <!-- Header -->
              <div class="offcanvas-header border-bottom">
                <h3 class="offcanvas-title fs-lg">Sidebar</h3>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#blog-sidebar" aria-label="Close"></button>
              </div>

              <!-- Body -->
              <div class="offcanvas-body">

                <!-- Search form -->
                <form class="input-group mb-4">
                  <input type="text" placeholder="Recherchez sur le blog.." class="form-control rounded pe-5">
                  <i class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 fs-lg zindex-5"></i>
                </form>

                <!-- Categories -->
                <div class="card card-body mb-4">
                  <h3 class="h5">Categories</h3>
                  <ul class="nav flex-column fs-sm">
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0 active">Tous les sujets <span class="fw-normal opacity-60 ms-1">(48)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Digital <span class="fw-normal opacity-60 ms-1">(12)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Marketing <span class="fw-normal opacity-60 ms-1">(5)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Startups <span class="fw-normal opacity-60 ms-1">(10)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Technologie <span class="fw-normal opacity-60 ms-1">(9)</span></a>
                    </li>
                    <li class="nav-item mb-1">
                      <a href="#" class="nav-link py-1 px-0">Entreprise<span class="fw-normal opacity-60 ms-1">(4)</span></a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link py-1 px-0">
                      Processus &amp; Tools <span class="fw-normal opacity-60 ms-1">(3)</span></a>
                    </li>
                  </ul>
                </div>

                <!-- Popular posts -->
                <div class="card card-body border-0 position-relative mb-4">
                  <span class="position-absolute top-0 start-0 w-100 h-100 bg-gradient-primary opacity-10 rounded-3"></span>
                  <div class="position-relative zindex-2">
                    <h3 class="h5">
                    Articles populaires</h3>
                    <ul class="list-unstyled mb-0">
                      <li class="border-bottom pb-3 mb-3">
                        <h4 class="h6 mb-2">
                          <a href="#">5 exemples de mauvaises pages de destination &amp; Comment nous les réparerions</a>
                        </h4>
                        <div class="d-flex align-items-center text-muted pt-1">
                          <div class="fs-xs border-end pe-3 me-3">il ya 17 heures</div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-like fs-base me-1"></i>
                            <span class="fs-xs">8</span>
                          </div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-comment fs-base me-1"></i>
                            <span class="fs-xs">4</span>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="bx bx-share-alt fs-base me-1"></i>
                            <span class="fs-xs">2</span>
                          </div>
                        </div>
                      </li>
                      <li class="border-bottom pb-3 mb-3">
                        <h4 class="h6 mb-2">
                          <a href="#">
                          Dans quelle mesure votre processus de prévision est-il agile ?</a>
                        </h4>
                        <div class="d-flex align-items-center text-muted pt-1">
                          <div class="fs-xs border-end pe-3 me-3">Oct 9, 2023</div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-like fs-base me-1"></i>
                            <span class="fs-xs">4</span>
                          </div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-comment fs-base me-1"></i>
                            <span class="fs-xs">1</span>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="bx bx-share-alt fs-base me-1"></i>
                            <span class="fs-xs">0</span>
                          </div>
                        </div>
                      </li>
                      <li>
                        <h4 class="h6 mb-2">
                          <a href="#">Marketing inclusif : pourquoi et comment ça marche ?</a>
                        </h4>
                        <div class="d-flex align-items-center text-muted pt-1">
                          <div class="fs-xs border-end pe-3 me-3">Sep 13, 2023</div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-like fs-base me-1"></i>
                            <span class="fs-xs">5</span>
                          </div>
                          <div class="d-flex align-items-center me-3">
                            <i class="bx bx-comment fs-base me-1"></i>
                            <span class="fs-xs">2</span>
                          </div>
                          <div class="d-flex align-items-center">
                            <i class="bx bx-share-alt fs-base me-1"></i>
                            <span class="fs-xs">4</span>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>

                <!-- Tags -->
                <div class="card card-body mb-4">
                  <h3 class="h5">Tags</h3>
                  <div class="d-flex flex-wrap">
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#lifestyle</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#ux</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#tech</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#user</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#software</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#it</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#network</a>
                    <a href="#" class="btn btn-outline-secondary btn-sm px-3 my-1 me-2">#engineering</a>
                  </div>
                </div>

                <!-- Follow Us -->
                <div class="card mb-4">
                  <div class="card-body">
                    <h5 class="mb-4">Nous Suivre</h5>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-linkedin me-2 mb-2" aria-label="LinkedIn">
                      <i class="bx bxl-linkedin"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-facebook me-2 mb-2" aria-label="Facebook">
                      <i class="bx bxl-facebook"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-twitter me-2 mb-2" aria-label="Twitter">
                      <i class="bx bxl-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-icon btn-sm btn-secondary btn-instagram me-2 mb-2" aria-label="Instagram">
                      <i class="bx bxl-instagram"></i>
                    </a>
                  </div>
                </div>

                <!-- Advertising -->
                <div class="card border-0 bg-faded-primary bg-repeat-0 bg-size-cover" style="min-height: 25rem; background-image: url(assets/img/blog/banner.png);">
                  <div class="card-body">
                    <h5 class="h3 mb-4 pb-2 text-center">Bannière publicitaire</h5>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </section>


      <!-- Subscription CTA -->
      <section class="py-5 bg-secondary">
        <div class="container py-md-3 py-lg-5">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-9 col-md-11">
              <h2 class="h1 d-md-inline-block position-relative mb-md-5 mb-sm-4 text-sm-start text-center">
                
Vous ne voulez rien manquer ?
  
                <!-- Arrow shape -->
                <svg class="d-md-block d-none position-absolute top-0 ms-4 ps-1" style="left: 100%;" xmlns="http://www.w3.org/2000/svg" width="65" height="68" fill="#6366f1"><path d="M53.9527 51.0012c8.396-10.5668 2.0302-26.0134-11.7481-26.7511-.6899-.0646-1.4612.0015-2.1258.0431.1243 9.0462-4.1714 18.8896-11.5618 21.3814-6.6695 2.2133-10.3337-4.2224-7.5813-9.676 3.2966-6.4755 9.103-11.8504 16.1678-13.8189-.5654-5.6953-3.3436-10.7672-9.485-12.48517C17.2678 6.8204 6.49364 16.3681 4.98841 26.127c-.09276 1.0297-1.68569.9497-1.59293-.0801C3.98732 12.9139 19.7395 2.55212 31.9628 8.5787c4.7253 2.3813 7.2649 7.3963 7.9368 13.067 7.4237-.9311 14.5154 3.3683 18.3422 9.5422 4.3988 7.1623 2.3584 15.1401-2.6322 21.1108-.7826.9653-2.3331-.3572-1.6569-1.2975zM26.7754 32.1845c-1.9411 2.2411-4.076 5.0872-4.3542 8.1764-.3036 2.9829 3.7601 3.0525 5.4905 2.7645 2.1568-.3863 3.7221-2.3164 4.8863-4.0419 2.6228-3.6308 4.3657-9.0752 4.4844-14.2563-4.0808 1.279-7.6514 4.2327-10.507 7.3573zm24.6311 25.592c-.7061-2.9738-1.2243-6.1031-1.1591-9.143.0423-1.242 1.767-1.0805 1.8313.1372.1284 2.435.815 4.8532 1.4764 7.1651l4.1619-1.4098c1.0153-.4586 2.4373-1.5714 3.6544-1.1804.6087.1954.7347.7264.6475 1.3068-.2302 1.3976-2.4683 1.9147-3.5901 2.398-1.8429.7619-3.6293 1.2865-5.5477 1.7298-.6391.1476-1.3233-.3665-1.4746-1.0037z"/></svg>
              </h2>
  
              <!-- Title + checkboxes -->
              <div class="row gy-4 align-items-center mb-lg-5 mb-4 pb-3">
                <div class="col-md-3">
                  <h3 class="h5 mb-0 text-sm-start text-center">Inscrivez-vous aux newsletters</h3>
                </div>
                <div class="col-md-9">
                  <div class="row row-cols-sm-3 row-cols-2 gy-2">
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-daily-newsletter" class="form-check-input">
                        <label for="s-daily-newsletter" class="form-check-label">
                        Newsletter quotidienne</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-advertising-updates" class="form-check-input" checked>
                        <label for="s-advertising-updates" class="form-check-label">
                        Mises à jour publicitaires</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-week-in-review" class="form-check-input">
                        <label for="s-week-in-review" class="form-check-label">
                        Bilan de la semaine</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-event-updates" class="form-check-input">
                        <label for="s-event-updates" class="form-check-label">Mises à jour des événements</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input type="checkbox" id="s-startups-weekly" class="form-check-input">
                        <label for="s-startups-weekly" class="form-check-label">
                        Startups hebdomadaires</label>
                      </div>
                    </div>
                    <div class="col">
                      <div class="form-check mb-0">
                        <input id="s-podcasts" type="checkbox" class="form-check-input">
                        <label for="s-podcasts" class="form-check-label">
                        Baladodiffusions</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  
              <!-- Email field -->
              <form class="d-flex flex-sm-row flex-column mb-3 needs-validation" novalidate>
                <div class="input-group me-sm-3 mb-sm-0 mb-3">
                  <input type="email" class="form-control form-control-lg rounded-3 ps-5" placeholder="Your email" required>
                  <i class="bx bx-envelope position-absolute start-0 top-50 translate-middle-y ms-3 zindex-5 fs-5 text-muted"></i>
                  <div class="invalid-tooltip position-absolute start-0 top-0 mt-n4">Veuillez fournir une adresse email valide!</div>
                </div>
                <button type="submit" class="btn btn-lg btn-primary">S'abonner</button>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

@endsection