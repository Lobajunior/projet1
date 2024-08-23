@extends('layouts/app')

@section('container')


      <!-- Breadcrumb -->
      <nav class="container py-4 mb-lg-2" aria-label="breadcrumb">
        <ol class="breadcrumb pt-lg-3 mb-0">
          <li class="breadcrumb-item">
            <a href="index.html"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">Services v.2</li>
        </ol>
      </nav>
      
      <!-- Page title -->
      <h1 class="container pb-4 mt-n1 mt-lg-0">Services v.2</h1>


      <!-- Service -->
      <section class="container mb-md-3 mb-lg-5 pb-5">
        <div class="row">
          <div class="col-md-6 pb-2 pb-md-0 mb-4 mb-md-0">
            <div class="pe-lg-5">
              <img src="assets/img/services/service01.jpg" class="rounded-3" alt="Image">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="h3 mb-sm-4">Consulting Services</h2>
            <p class="d-md-none d-xl-block pb-2 pb-md-3 mb-3">Orci, ac libero sit ultrices enim volutpat augue. Congue sit nulla velit ornare cras. Facilisis tempus non erat ornare imperdiet. In ac ullamcorper proin urna, lacus, tortor, ullamcorper egestas mattis mauris.</p>
            <div class="border rounded-3 mb-4 mb-lg-5">
              <div class="row row-cols-1 row-cols-sm-2 g-0">
                <div class="col d-flex align-items-center border-end-sm border-bottom p-3">
                  <img src="assets/img/services/icons/digital.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Digital transformation</h3>
                    <p class="fs-xs mb-0">Aliquam quis odio senectus.</p>
                  </div>
                </div>
                <div class="col d-flex align-items-center border-bottom p-3">
                  <img src="assets/img/services/icons/chart.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Analytics services</h3>
                    <p class="fs-xs mb-0">Curabitur neque ut morbi sapien.</p>
                  </div>
                </div>
                <div class="col d-flex align-items-center border-end-sm p-3">
                  <img src="assets/img/services/icons/marketing.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Marketing &amp; sales</h3>
                    <p class="fs-xs mb-0">At faucibus molestie egestas sed.</p>
                  </div>
                </div>
                <hr class="d-sm-none">
                <div class="col d-flex align-items-center p-3">
                  <img src="assets/img/services/icons/cybersecurity.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Cybersecurity &amp; strategy</h3>
                    <p class="fs-xs mb-0">Orci bibendum ullamcorper lorem.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column flex-sm-row">
              <a href="#" class="btn btn-primary mb-3 mb-sm-0 me-sm-3">Send request</a>
              <a href="#" class="btn btn-outline-primary">
                Learn more
                <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
              </a>
            </div>
          </div>
        </div>
      </section>


      <!-- Service -->
      <section class="container pt-2 pt-lg-3 mb-md-3 mb-lg-5 pb-5">
        <div class="row">
          <div class="col-md-6 order-md-2 pb-2 pb-md-0 mb-4 mb-md-0">
            <div class="ps-lg-5">
              <img src="assets/img/services/service02.jpg" class="rounded-3" alt="Image">
            </div>
          </div>
          <div class="col-md-6 ordr-md-1">
            <h2 class="h3 mb-sm-4">Banking Expertise</h2>
            <ul class="list-unstyled d-md-none d-xl-block pb-2 pb-md-3 mb-3">
              <li class="d-flex align-items-center mb-2">
                <i class="bx bx-check lead text-primary me-2"></i>
                Sagittis quam egestas sit sit convallis turpis sit augue interdum morbi.
              </li>
              <li class="d-flex align-items-center mb-2">
                <i class="bx bx-check lead text-primary me-2"></i>
                Sollicitudin cursus habitasse adipiscing est sed aenean sapien.
              </li>
              <li class="d-flex align-items-center">
                <i class="bx bx-check lead text-primary me-2"></i>
                At arcu arcu morbi scelerisque nibh. Quam velit fermentum porta facilisi massa.
              </li>
            </ul>
            <div class="border rounded-3 mb-4 mb-lg-5">
              <div class="row row-cols-1 row-cols-sm-2 g-0">
                <div class="col d-flex align-items-center border-end-sm border-bottom p-3">
                  <img src="assets/img/services/icons/insurance.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Insurance</h3>
                    <p class="fs-xs mb-0">Nunc dui aliquam volutpat augue.</p>
                  </div>
                </div>
                <div class="col d-flex align-items-center border-bottom p-3">
                  <img src="assets/img/services/icons/banking.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Banking risk</h3>
                    <p class="fs-xs mb-0">Habitasse adipiscing aenean sapien.</p>
                  </div>
                </div>
                <div class="col d-flex align-items-center border-end-sm p-3">
                  <img src="assets/img/services/icons/payments.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Payments</h3>
                    <p class="fs-xs mb-0">At faucibus molestie egestas sed.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column flex-sm-row">
              <a href="#" class="btn btn-primary mb-3 mb-sm-0 me-sm-3">Send request</a>
              <a href="#" class="btn btn-outline-primary">
                Learn more
                <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
              </a>
            </div>
          </div>
        </div>
      </section>


      <!-- Service -->
      <section class="container pt-2 pt-lg-3 mb-md-3 mb-lg-5 pb-5">
        <div class="row">
          <div class="col-md-6 pb-2 pb-md-0 mb-4 mb-md-0">
            <div class="pe-lg-5">
              <img src="assets/img/services/service03.jpg" class="rounded-3" alt="Image">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="h3 mb-sm-4">Product Solutions</h2>
            <p class="d-md-none d-xl-block pb-2 pb-md-3 mb-3">Sem scelerisque laoreet commodo velit. Fringilla tempor egestas mattis mauris eu dui in. Viverra enim velit fringilla turpis suspendisse amet ipsum, nisi sed.</p>
            <div class="border rounded-3 mb-4 mb-lg-5">
              <div class="row row-cols-1 row-cols-sm-2 g-0">
                <div class="col d-flex align-items-center border-end-sm border-bottom p-3">
                  <img src="assets/img/services/icons/asset.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Asset management</h3>
                    <p class="fs-xs mb-0">Mattis sodales tellus risus placerat in.</p>
                  </div>
                </div>
                <div class="col d-flex align-items-center border-bottom p-3">
                  <img src="assets/img/services/icons/operations.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Operations &amp; technology</h3>
                    <p class="fs-xs mb-0">Viverra volutpat tellus orci enim.</p>
                  </div>
                </div>
                <div class="col d-flex align-items-center border-end-sm p-3">
                  <img src="assets/img/services/icons/finance.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Corporate finance</h3>
                    <p class="fs-xs mb-0">Aliquet amet pharetra fermentum sem.</p>
                  </div>
                </div>
                <hr class="d-sm-none">
                <div class="col d-flex align-items-center p-3">
                  <img src="assets/img/services/icons/audit.svg" width="48" alt="Icon">
                  <div class="ps-2 ms-1">
                    <h3 class="h6 mb-0">Audit services</h3>
                    <p class="fs-xs mb-0">Venenatis congue iaculis malesuada.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex flex-column flex-sm-row">
              <a href="#" class="btn btn-primary mb-3 mb-sm-0 me-sm-3">Send request</a>
              <a href="#" class="btn btn-outline-primary">
                Learn more
                <i class="bx bx-right-arrow-alt fs-xl ms-2 me-n1"></i>
              </a>
            </div>
          </div>
        </div>
      </section>


      <!-- Industries -->
      <section class="container pt-2 pt-lg-0 pb-5 mb-md-4 mb-lg-5">
        <h2 class="h1 text-center pb-3 pb-lg-4">Industries We Serve</h2>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs flex-nowrap justify-content-lg-center overflow-auto pb-2 mb-3 mb-lg-4" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap active" id="education-tab" data-bs-toggle="tab" data-bs-target="#education" type="button" role="tab" aria-controls="education" aria-selected="true">
              <i class="bx bxs-graduation fs-xl opacity-60 me-2"></i>
              Education
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="ecommerce-tab" data-bs-toggle="tab" data-bs-target="#ecommerce" type="button" role="tab" aria-controls="ecommerce" aria-selected="false">
              <i class="bx bx-cart-alt fs-lg opacity-60 me-2"></i>
              E-Commerce
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="sports-tab" data-bs-toggle="tab" data-bs-target="#sports" type="button" role="tab" aria-controls="sports" aria-selected="false">
              <i class="bx bx-run fs-xl opacity-60 me-2"></i>
              Sports
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="construction-tab" data-bs-toggle="tab" data-bs-target="#construction" type="button" role="tab" aria-controls="construction" aria-selected="false">
              <i class="bx bx-paint-roll fs-lg opacity-60 me-2"></i>
              Construstion
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="medicine-tab" data-bs-toggle="tab" data-bs-target="#medicine" type="button" role="tab" aria-controls="medicine" aria-selected="false">
              <i class="bx bx-plus-medical fs-bse opacity-60 me-2"></i>
              Medicine
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="real-estate-tab" data-bs-toggle="tab" data-bs-target="#real-estate" type="button" role="tab" aria-controls="real-estate" aria-selected="false">
              <i class="bx bx-buildings fs-lg opacity-60 me-2"></i>
              Real Estate
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link text-nowrap" id="wellness-tab" data-bs-toggle="tab" data-bs-target="#wellness" type="button" role="tab" aria-controls="wellness" aria-selected="false">
              <i class="bx bx-spa fs-lg opacity-60 me-2"></i>
              Wellness
            </button>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content bg-secondary rounded-3 py-4">

          <!-- Education -->
          <div class="tab-pane fade show active" id="education" role="tabpanel" aria-labelledby="education-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Education</h3>
                <p>Vestibulum nunc lectus auctor quis. Natoque lectus tortor lacus, eu. Nunc feugiat nisl maecenas nulla hac morbi. Vitae, donec facilisis sed nunc netus. Venenatis posuere faucibus enim est. Vel dignissim morbi blandit morbi tellus. Arcu ullamcorper quis enim.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="assets/img/services/industries/education.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>

          <!-- E-Commerce -->
          <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">E-Commerce</h3>
                <p>Curabitur auctor quam ut iaculis suscipit. Morbi ullamcorper tellus eu purus dictum convallis. Duis posuere dui sit amet pellentesque malesuada. Morbi ultrices tortor ut diam molestie, vel pharetra lectus lacinia. Lorem ipsum dolor sit amet.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="assets/img/services/industries/ecommerce.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>

          <!-- Sports -->
          <div class="tab-pane fade" id="sports" role="tabpanel" aria-labelledby="sports-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Sports</h3>
                <p>Etiam vehicula commodo nunc, ut tincidunt risus aliquam sit amet. Vivamus ut velit ut odio malesuada tincidunt ut non eros. Curabitur vel quam varius, ullamcorper mi quis, ultrices eros. Nam eget mi ut diam elementum facilisis vehicula eget augue.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="assets/img/services/industries/sports.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>

          <!-- Construction -->
          <div class="tab-pane fade" id="construction" role="tabpanel" aria-labelledby="construction-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Construction</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus, nunc in iaculis vestibulum, nunc ex convallis est, ut viverra velit sapien ac erat. Vivamus aliquet mi tellus, vel viverra ex blandit sed. Sed blandit lobortis risus. Aliquam blandit cursus ex sed iaculis.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="assets/img/services/industries/construction.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>

          <!-- Medicine -->
          <div class="tab-pane fade" id="medicine" role="tabpanel" aria-labelledby="medicine-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Medicine</h3>
                <p>In vel nulla ac enim pellentesque tristique vel non dui. Integer vulputate ex leo, in accumsan purus consectetur quis. Cras scelerisque orci vel dapibus volutpat. In et consectetur enim. Maecenas lobortis viverra tortor, quis fermentum sem volutpat sit amet.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="assets/img/services/industries/medicine.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>

          <!-- Real Estate -->
          <div class="tab-pane fade" id="real-estate" role="tabpanel" aria-labelledby="real-estate-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Real Estate</h3>
                <p>Donec consequat nibh at urna tincidunt tempor. Integer quis lobortis felis. Nulla id quam vestibulum, aliquam mauris vitae, auctor ex. Aliquam augue nulla, faucibus sed lacus ac, placerat elementum nisi. Curabitur enim nunc, dictum et accumsan.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="assets/img/services/industries/real-estate.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>

          <!-- Wellness -->
          <div class="tab-pane fade" id="wellness" role="tabpanel" aria-labelledby="wellness-tab">
            <div class="row align-items-center pt-3 pt-sm-4 pt-md-0 px-3 px-sm-4 px-lg-0">
              <div class="col-lg-4 col-md-5 offset-lg-1 text-center text-md-start">
                <h3 class="mb-lg-4">Wellness</h3>
                <p>Morbi ullamcorper tellus eu purus dictum convallis. Duis posuere dui sit amet pellentesque malesuada. Morbi ultrices tortor ut diam molestie, vel pharetra lectus lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius lectus lectus.</p>
              </div>
              <div class="col-lg-6 col-md-7 mt-2 mb-3 mt-md-3">
                <img src="assets/img/services/industries/wellness.jpg" class="d-block rounded-3 my-lg-2 mx-auto me-md-0" width="564" alt="Image">
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Contact form -->
      <section class="position-relative pt-2 pt-lg-0 pb-5">
        <div class="container position-relative zindex-5 pb-2 pb-md-4 pb-lg-5">
          <div class="row justify-content-center text-center pt-xl-2 pb-4 mb-1 mb-lg-3">
            <div class="col-xl-6 col-lg-7 col-md-8 col-sm-11">
              <h2 class="mb-4">Let's Change the Game Together</h2>
              <p class="text-muted mb-0">Like what you have seen? Let’s get started. Just fill in a few details and we will get in touch as soon as possible.</p>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
              <form class="row needs-validation" novalidate>
                <div class="col-sm-6 mb-4">
                  <label for="fn" class="form-label">First name</label>
                  <input type="text" id="fn" class="form-control" required>
                  <div class="invalid-feedback">Please, enter your first name!</div>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="ln" class="form-label">Last name</label>
                  <input type="text" id="ln" class="form-control" required>
                  <div class="invalid-feedback">Please, enter your last name!</div>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" id="email" class="form-control" required>
                  <div class="invalid-feedback">Please, provide a valid email address!</div>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="text" id="phone" class="form-control" data-format='{"numericOnly": true, "delimiters": ["+1 ", " ", " "], "blocks": [0, 3, 3, 2]}' placeholder="+1 ___ ___ __">
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="city" class="form-label">City</label>
                  <select id="city" class="form-select" required>
                    <option value="" disabled selected>Choose city</option>
                    <option value="Boston">Boston</option>
                    <option value="Chicago">Chicago</option>
                    <option value="Los Angeles">Los Angeles</option>
                    <option value="Miami">Miami</option>
                    <option value="New York">New York</option>
                    <option value="Philadelphia">Philadelphia</option>
                  </select>
                  <div class="invalid-feedback">Please, choose your city!</div>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="company" class="form-label">Your company</label>
                  <input type="text" id="company" class="form-control">
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="position" class="form-label">Your position</label>
                  <select id="position" class="form-select">
                    <option value="Owner">Owner</option>
                    <option value="CEO">CEO</option>
                    <option value="Manager">Manager</option>
                    <option value="Accountant">Accountant</option>
                  </select>
                </div>
                <div class="col-sm-6 mb-4">
                  <label for="people" class="form-label">People in company</label>
                  <select id="people" class="form-select">
                    <option value="0-10">0-10</option>
                    <option value="10-25">10-25</option>
                    <option value="25-50">25-50</option>
                    <option value="50-100">50-100</option>
                  </select>
                </div>
                <div class="col-12 mb-4">
                  <label for="message" class="form-label">Message</label>
                  <textarea id="message" class="form-control" rows="4" required></textarea>
                  <div class="invalid-feedback">Please, enter your message!</div>
                </div>
                <div class="col-12 text-center pt-2 pt-md-3 pt-lg-4">
                  <button type="submit" class="btn btn-primary shadow-primary btn-lg">Send a request</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- BG shape -->
        <div class="position-absolute end-0 bottom-0 text-primary">
          <svg width="469" height="343" viewBox="0 0 469 343" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M273.631 680.872C442.436 768.853 639.315 708.216 717.593 558.212C795.871 408.208 732.941 212.157 564.137 124.176C395.333 36.195 198.453 96.8326 120.175 246.836C41.8972 396.84 104.827 592.891 273.631 680.872ZM236.335 752.344C440.804 858.914 688.289 788.686 789.109 595.486C889.928 402.286 805.903 159.274 601.433 52.7043C396.964 -53.8654 149.479 16.3623 48.6595 209.562C-52.1598 402.762 31.8652 645.774 236.335 752.344Z" fill="currentColor"/><path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd" d="M298.401 633.404C434.98 704.59 598.31 656.971 664.332 530.451C730.355 403.932 675.946 242.827 539.367 171.642C402.787 100.457 239.458 148.076 173.435 274.595C107.413 401.114 161.822 562.219 298.401 633.404ZM288.455 652.464C434.545 728.606 611.369 678.429 683.403 540.391C755.437 402.353 695.402 228.725 549.312 152.583C403.222 76.4404 226.398 126.617 154.365 264.655C82.331 402.693 142.365 576.321 288.455 652.464Z" fill="currentColor"/></svg>
        </div>
      </section>
    </main>

@endsection