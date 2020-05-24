<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Eco Watering Plants
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

<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <!-- logo -->
        <a class="navbar-brand" href="<?= base_url() ?>">
          <img src="assets/img/brand/white.png" />
        </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
              <div class="row">
                <div class="col-6 collapse-brand">
                  <a href="<?= base_url() ?>">
                    <img src="assets/img/brand/blue.png">
                  </a>
                </div>
                <div class="col-6 collapse-close">
                  <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                    <span></span>
                    <span></span>
                  </button>
                </div>
              </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link nav-link-icon" href="<?= base_url() ?>">
                  <i class="ni ni-key-25"></i>
                  <span class="nav-link-inner--text">Iniciar sesión</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-2">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">¡Te estamos esperando!</h1>
              <p class="text-lead text-light">Unete a la comunidad de Eco Watering Plants</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--7 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-body px-lg-5 py-lg-4">
              <div class="text-center text-muted mb-4">
                <small>Registro</small>
              </div>
              <form id="frm-signup" role="form" method="post" action="<?= base_url().'register/signup' ?>">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                    </div>
                    <input class="form-control" id="signupName" minlength="8" placeholder="Nombre completo" type="text" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" id="signupEmail" placeholder="Correo electrónico" type="email" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id="signupPassword" minlength="8" placeholder="Contraseña" type="password" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" id="signupConfirmPassword" minlength="8" placeholder="Confirmar contraseña" type="password" required>
                  </div>
                </div>
                <div id="resp_reg" class="col-12 mb--20" style="padding:0; margin:0px 0px 0px 0px;">
                  <label id="resp_msg" class="text-danger"></label>
                  <a href="<?= base_url() ?>" id="success" class="text-success"></a>
                </div>
                <!-- <div class="text-muted font-italic"><small>password strength: <span class="text-success font-weight-700">strong</span></small></div> -->
                <div class="row my-4">
                  <div class="col-12">
                    <div class="custom-control custom-control-alternative custom-checkbox">
                      <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                      <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">Acepto la <a href="#!">Política de privacidad</a></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="text-center">
                  <button id="btn-signup" type="submit" class="btn btn-primary mt-4">Crear cuenta</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <input id="base_url" type="text" value="<?= base_url() ?>" hidden="hidden">

  <script>
    $(function(){
      $('#btn-signup').attr('disabled','disabled');
      $('#customCheckRegister').on('change', function(){
        if($('#customCheckRegister').prop('checked') == true){
          console.log('ok');
          $('#btn-signup').removeAttr('disabled');
        } else {
          console.log('no');
          $('#btn-signup').attr('disabled','disabled');
        }
      });

      const base_url = $('#base_url').val();
        $('#resp_reg').hide();
        $('#success').hide();
        
        $('#frm-signup').submit((e) => {
          e.preventDefault();
          const newUser = {
            signupName: $('#signupName').val(),
            signupEmail: $('#signupEmail').val(),
            signupPassword: $('#signupPassword').val(),
            signupConfirmPassword: $('#signupConfirmPassword').val(),
          };
          $.post(
            $('#frm-signup').attr('action'),
            newUser,
            (response) => {
              console.log(response)
              if(response == 'ok'){
                $('#frm-signup').trigger('reset');
                $('#resp_reg').show();
                $('#resp_msg').hide();
                $('#success').show();
                $('#success').text('¡Registro exitoso, inicia sesión para continuar!');
              } else {
                $('#resp_reg').show();
                $('#resp_msg').text(response);
              } 
            }
          );
        });
    })
  </script>
  
  <footer class="py-5">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              © 2019 <a href="<?= base_url() ?>" class="font-weight-bold ml-1">Eco Watering Plants</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.facebook.com/Fix-Stone-106556770680396/" class="nav-link">
                  Developed by: Fix Stone
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core   -->
  
  <script src="<?= base_url() ?>assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="<?= base_url() ?>assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script>
    
  </script>
</body>

</html>