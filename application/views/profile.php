

    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">¡Hola!</h1>
            <p class="text-white mt-0 mb-5">Esta es la página de tu perfil. Puedes agregar tu información</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--9">
      <div class="row">

        <div class="col-xl-12 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="row justify-content-center mb-9">
              <div class="col-lg-1 order-lg-1">
                <div class="card-profile-image">
                  <img id="trigger-photo" src="<?= (!empty($profile->photo))?$profile->photo:base_url().'assets/img/brand/user-default.png' ?>" class="rounded-circle2">
                </div>
              </div>
            </div>
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Mi cuenta</h3>
                  <?php 
                  if(!empty($this->session->flashdata("success"))){
                  echo '<div id="msg" class="msg-alert msg-alert-success txt-white fs-15">
                              <b class="text-success">'.
                              $this->session->flashdata("success")
                              .'</b>
                          </div>';
                  } else if(!empty($this->session->flashdata("error"))){
                  echo '<div id="msg" class="msg-alert msg-alert-error txt-white fs-15">
                              <b class="text-danger">'.
                              $this->session->flashdata("error")
                              .'</b>
                          </div>';
                  }?>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form method="post" action="<?= base_url().'profile/updateProfile' ?>" enctype="multipart/form-data">
                <h6 class="heading-small text-muted mb-4">Información de usuario</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <input id="photo" name="photo" type="file" hidden="hidden">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Nombre (s)</label>
                        <input name="inputName" type="text" id="inputName" class="form-control form-control-alternative" value="<?= (!empty($profile->name))?$profile->name:'' ?>" required>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Correo electrónico</label>
                        <input name="inputEmail" type="email" id="inputEmail" class="form-control form-control-alternative" value="<?= (!empty($profile->email))?$profile->email:'' ?>" required>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Información de contacto</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Dirección</label>
                        <input name="inputAddress" id="inputAddress" class="form-control form-control-alternative" value="<?= (!empty($profile->address))?$profile->address:'' ?>" type="text" maxlength="500">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Estado</label>
                        <input name="inputState" id="inputState" type="text" class="form-control form-control-alternative" value="<?= (!empty($profile->state))?$profile->state:'' ?>" maxlength="50">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Ciudad</label>
                        <input name="inputCity" id="inputCity" type="text" class="form-control form-control-alternative" value="<?= (!empty($profile->city))?$profile->city:'' ?>" maxlength="100">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Código postal</label>
                        <input name="inputZip" id="inputZip" type="number" class="form-control form-control-alternative" value="<?= (!empty($profile->zip))?$profile->zip:'' ?>" maxlength="8">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Biografía</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>Sobre mi</label>
                    <textarea name="inputBio" id="inputBio" rows="4" class="form-control form-control-alternative" placeholder="Cuentanos sobre ti..." maxlength="500"><?= (!empty($profile->bio))?$profile->bio:'' ?></textarea>
                  </div>
                </div>

                <div class="col-12">
                  <button type="submit" class="btn btn-lg btn-block btn-primary">Actualizar perfil</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
  
      <script>
        $(function(){
          $('#msg').on('click', function(){
              $(this).hide();
              $(this).attr('hidden','hidden');
          });

          $('#trigger-photo').on('click', function(){
            console.log('click photo');
            $('#photo').click();
          });
        })
      </script>