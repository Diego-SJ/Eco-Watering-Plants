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
          <img src="<?= base_url() ?>assets/img/brand/white.png" />
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
              <h1 class="text-white">Actualziar contraseña</h1>
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
                <small>Ingresa tu nueva contraseña.</small>
              </div>
              <div id="resp_reg" class="col-12 mb--20" style="padding:0; margin:0px 0px 0px 0px;">
                <label id="resp_msg" class="text-danger"></label>
                <a href="<?= base_url() ?>" id="success" class="text-success"></a>
              </div>
              <form id="frm-forgot" role="form" method="post" action="<?= base_url().'login/updatePassword/'.$tokenID ?>">
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input id="newPassword" name="newPassword" class="form-control" placeholder="Ingresa tu nueva contraseña" minlength="8" type="text" required>
                  </div>
                </div>
                <div class="text-center">
                  <button id="" type="submit" class="btn btn-primary mt-1">Actualizar contraseña</button>
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

      const base_url = $('#base_url').val();
        $('#resp_reg').hide();
        $("#success").hide();

        $('#frm-forgot').bind("submit",function(){
          // Capturamnos el boton de envío
          var btnEnviar = $("#btn-sendcode");
          $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data:$(this).serialize(),
            beforeSend: function(){
              btnEnviar.text("Actualziando");
              // Para input de tipo button
              btnEnviar.attr("disabled","disabled");
              $("#newPassword").attr("disabled","disabled");
            },complete:function(data){
              btnEnviar.text("Actualizar contraseña");
              btnEnviar.removeAttr("disabled");
              $("#newPassword").removeAttr('disabled');
            },success: function(data){
              if(data == 'ok'){
                $('#frm-forgot').hide();
                $('#resp_reg').show();
                $("#resp_msg").hide()
                $("#success").show();
                $("#success").text('Contraseña actualizada, inicia sesión para continuar.');
              } else {
                $('#resp_reg').show();
                $("#resp_msg").text(data);
                $("#success").hide();
              }
            },error: function(data){
              $('#resp_reg').show();
              $("#success").hide();
              $("#resp_msg").text("Problemas al actualziar la contraseña.");
              btnEnviar.text("Actualizar contraseña");
              btnEnviar.removeAttr("disabled");
            }
          });
          return false;
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