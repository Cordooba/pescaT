<?php

  require_once '../../../templates/headerAdminXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['user']) ){

        header("Location: ".$base_url);
        exit();

    }else{

        $user = $_SESSION['user'];

    }

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h1>Añadir una ubicación</h1></div>

        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="?addLocation">

              <div class="form-group">
                  <label class="col-md-3 control-label">Ubicación</label>

                  <div class="col-md-6">
                      <input type="text" class="form-control" name="location" value="<?php if(isset($location)) echo $location;?>" >

                      <?php if ( isset($errores['locationEmpty']) ) : ?>
                        <p class="text-danger"><?=$errores['locationEmpty']?></p>
                      <?php endif ; ?>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-3 control-label">Latitud</label>

                  <div class="col-md-6">
                      <input type="text" class="form-control" name="latitud" value="<?php if(isset($latitud)) echo $latitud;?>" >

                      <?php if ( isset($errores['latitudEmpty']) ) : ?>
                        <p class="text-danger"><?=$errores['latitudEmpty']?></p>
                      <?php endif ; ?>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-3 control-label">Longitud</label>

                  <div class="col-md-6">
                      <input type="text" class="form-control" name="longitud" value="<?php if(isset($longitud)) echo $longitud;?>" >

                      <?php if ( isset($errores['longitudEmpty']) ) : ?>
                        <p class="text-danger"><?=$errores['longitudEmpty']?></p>
                      <?php endif ; ?>

                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-5">
                      <button type="submit" class="btn btn-primary">
                          Añadir  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                      </button>
                  </div>
              </div>

          </form>

        </div>

    </div>

  </div>

</div>
