
    <!-- End Navbar -->

    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6 pointer">
              <a href="<?= base_url().'home/plant1' ?>" class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Planta 1</h5>
                      <span class="h2 font-weight-bold mb-0"><i class="fas fa-tint text-teal"></i> 50%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-teal text-white rounded-circle shadow">
                        <i class="fas fa-spa"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-lg-6 pointer">
              <a href="<?= base_url().'home/plant2' ?>" class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Planta 2</h5>
                      <span class="h2 font-weight-bold mb-0"><i class="fas fa-tint text-green"></i> 5%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                        <i class="fas fa-spa"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-lg-6 pointer">
              <a href="<?= base_url().'home/plant3' ?>" class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Planta 3</h5>
                      <span class="h2 font-weight-bold mb-0"><i class="fas fa-tint text-red"></i> 43%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
                        <i class="fas fa-spa"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-xl-3 col-lg-6 pointer">
              <a href="<?= base_url().'home/plant4' ?>" class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Planta 4</h5>
                      <span class="h2 font-weight-bold mb-0"><i class="fas fa-tint text-orange"></i> 73%</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                        <i class="fas fa-spa"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid mt--6">

      <div class="row justify-content-center">

        <div class="col-xl-6 col-sm-8 col-lg-6">
          <div class="card shadow">
            <div class="card-header bg-transparent">
              <div class="row align-items-center">
                <div class="col">
                  <H2 class="text-uppercase text-muted ls-1 mb-1">Código QR</h2>
                  <h3 class="mb-0 text-justify ">
                    <?= (!empty($profile->qr))?'Con este código podrás acceder directamente a 
                    tu cuenta de forma más rápida y sencilla. Da click en la imágen para descargar.':'Ups! no hemos podido cargar el qr, intenta más tarde.' ?>
                  </h3>
                </div>
              </div>
            </div>
            <div class="card-body align-items-center">
                <a download="mi qr - EWP.png" href="<?= (!empty($profile->qr))?$profile->qr:'' ?>">
                  <img  alt="Image placeholder" src="<?= (!empty($profile->qr))?$profile->qr:'' ?>" style="width: 100%;">
                </a>
            </div>
          </div>
        </div>

      </div>
      
      