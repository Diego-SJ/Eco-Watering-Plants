<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
      Eco Watering Plants | Dashboard
  </title>
  <!-- Favicon -->
  <script src="<?= base_url() ?>assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <link href="<?= base_url() ?>assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= base_url() ?>assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?= base_url() ?>assets/css/argon-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
      <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand pt-0">
          <img src="<?= base_url() ?>assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <!-- User -->
        <ul class="nav align-items-center d-md-none">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= (!empty($profile->photo))?$profile->photo:base_url().'assets/img/brand/user-default.png' ?>">
                </span>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">¡Bienvenido!</h6>
              </div>
              <a href="./profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Mi perfil</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-button-power"></i>
                <span>Cerrar sesión</span>
              </a>
            </div>
          </li>
        </ul>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="index.html">
                  <img src="<?= base_url() ?>assets/img/brand/blue.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navigation -->
          <ul class="navbar-nav">
            <li class="nav-item  class=">
              <a class=" nav-link active " href="<?= base_url() ?>home"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= base_url().'profile' ?>">
                <i class="ni ni-single-02 text-yellow"></i> Perfil
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url().'home/logout' ?>">
                <i class="ni ni-button-power text-red"></i> Cerrar sesión
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  
    <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"><i class="fas fa-spa"></i> Planta 1</a>

        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?= (!empty($profile->photo))?$profile->photo:base_url().'assets/img/brand/user-default.png' ?>">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?= (!empty($profile->name))?ucwords($profile->name):'Usuario invitado' ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">¡Bienvenido!</h6>
              </div>
              <a href="<?= base_url().'profile' ?>" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>Mi perfil</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= base_url().'home/logout' ?>" class="dropdown-item">
                <i class="ni ni-button-power"></i>
                <span>Cerrar sesión</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Header -->
    <div class="header pb-9 pt-sm-1 pt-lg-3 d-flex align-items-center" style="min-height: 600px; background-image: url(<?= base_url() ?>assets/img/theme/profile-cover2.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-teal opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-12 col-md-10">
            <h1 class="display-2 text-white">Planta 1</h1>
            <p class="text-white mt-0">Información sobre la planta</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--9d">
      <div class="row justify-content-center">
        <div class="col-xl-6 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="<?= base_url() ?>assets/img/plants/plant_1.jpeg" class="rounded-circle2">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span id="agua-head" class="heading">50%</span>
                      <span class="description"><i class="fas fa-tint text-teal"></i> Agua</span>
                    </div>
                    <div>
                      <span class="heading">21 C</span>
                      <span class="description"><i class="fas fa-thermometer-half text-red"></i> Temperatura</span>
                    </div>
                    <div>
                      <span class="heading">43%</span>
                      <span class="description"><i class="fas fa-sun text-yellow"></i> Luz</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  Planta 1
                </h3>
                <div class="h5 font-weight-300">
                    <i class="fas fa-calendar"></i> Fecha registro: 21/11/2019
                </div>
                <div class="h5 mt-4">
                  <div class="row">
                      <div class="card-body col-md-12 text-center">
                        <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                      </div>
                  </div>
                </div>
                <hr class="my-4" />
                <button id="plus-chart" class="btn bg-gradient-teal text-white">Editar información</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
      </footer>
    </div>
  </div>
  
  <script src="<?= base_url() ?>assets/js/plugins/chart.js/Chart.min.js"></script>
  <!--   Core   -->
  <script src="<?= base_url() ?>assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(function () {

      var volocity = 1000;

      var donutChartCanvas = $('#donutChart').get(0).getContext('2d');
      var donutData;
      var donutOptions;
      let acum = 0,acum2 = 0,aux = 0;
      let water = 50;
      let wwater = 50;
      let color = '';

      setInterval(function() {
        
        if(water < 100){
          water++;
          wwater--;
          acum = water;
          acum2 = 100 - acum;
          aux = acum - 100;
        } 
        if(aux >= 0) {
          acum = (((100000 - (aux++))/10)/100).toFixed(2);
          console.log('acum= '+acum);
          acum2 = 100 - acum;
          console.log('acum2= '+acum2);
        }

        $('#agua-head').text(acum+'%');

        if(acum >= 0 && acum <= 20){
          color = '#f5365c';
        } else if(acum >= 21 && acum <= 40){
          color = '#fb6340';
        } else if(acum >= 41 && acum <= 60){
          color = '#ffd600';
        } else if(acum >= 61 && acum <= 80){
          color = '#11cdef';
        } else if(acum >= 81 && acum <= 100){
          color = '#2dce89';
        }

        donutData = {
          labels: [
              'Agua '+acum+'%', 
              ''
          ],
          datasets: [
            {
              data: [acum,acum2],
              backgroundColor : [color, '#eee'],
            }
          ]
        }
        var donutOptions = {
          maintainAspectRatio : false,
          responsive : true,
          animation: false,
        }

        console.log('w'+water);
        console.log('ww'+wwater);

        var donutChart = new Chart(donutChartCanvas, {
          type: 'doughnut',
          data: donutData,
          options: donutOptions      
        })
      }, volocity);

      $('#plus-chart').on('click', function(){
        acum = 0;
        acum2 = 0;
        aux = 0;
        water = 0;
        wwater = 100;
      })
    })
  </script>
</body>

</html>