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

      <div class="panel-heading text-center">Añadir un pez</div>

        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="?addFish">

              <div class="form-group">
                  <label class="col-md-3 control-label">Pez</label>

                  <div class="col-md-6">
                      <input type="text" class="form-control" name="fish" value="<?php if(isset($location)) echo $location;?>" >

                      <?php if ( isset($errores['fishEmpty']) ) : ?>
                        <p class="text-danger"><?=$errores['fishEmpty']?></p>
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
                  <label class="col-md-3 control-label">Tipo de pez</label>

                  <div class="col-md-6">
                    <select class="form-control" name="typeFish">
                      <option value="A Coruña" <?php if(isset($typeFish) && $typeFish == 'Agua dulce') echo 'selected' ;?>>Agua dulce</option>
                      <option value="Álava" <?php if(isset($typeFish) && $typeFish == 'Agua salada') echo 'selected' ;?>>Agua salada</option>
                    </select>

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
