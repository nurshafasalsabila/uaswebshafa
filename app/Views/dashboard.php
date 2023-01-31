<?= $this->include('header'); ?>
<?= $this->include('sidemenu'); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <li class="dropdown-header text-start">
                </div>

                <div class="card-body">
                  <h5 class="card-title">TOTAL MAHASISWA</h5>

                  <div class="d-flex align-items-center">
                    <div class=" rounded-circle d-flex align-items-center justify-content-center">
                    </div>
                    <div class="ps-3">
                      <h6>200</h6>

                      </div>
                  </div>
                </div>

              </div>
            </div>
            
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card">

                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <li class="dropdown-header text-start">
                </div>

                <div class="card-body">
                  <h5 class="card-title">PROGRAM STUDI</h5>

                  <div class="d-flex align-items-center">
                    <div class="rounded-circle d-flext align-items-center justify-content-center">
                    </div>
                     <div class="ps-3 ">
                      <h6>2</h6>

                      </div>
                  </div>
                </div>

              </div>
            </div>
              
                  <div class="col-xxl-4 col-md-6">
                      <div class="card info-card">

                      <div class="filter">
                      <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                      <li class="dropdown-header text-start">
                    </div>

                  <div class="card-body">
                       <h5 class="card-title">Agama</h5>

                  <div class="d-flex align-items-center">
                        <div class="rounded-circle d-flext align-items-center justify-content-center">
                      </div>
                        <div class="ps-3 ">
                          <h6>8</h6>

                      </div>
                  </div>
                </div>

              </div>
            </div>
              
              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->


  <?= $this->include('footer'); ?>