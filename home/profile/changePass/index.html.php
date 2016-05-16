<?php

  require_once '../../../templates/headerUsserXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

    header("Location: ".$base_url);
    exit();

  }

  // $salt = 'G=)N3QcjgP8+C-ojEYX0|S+ortn(?C?D1d5VHc|wbT-c(rY^RvL-R m>=LzQ)^';
  // echo md5($_SESSION['pass'], $salt);
  // exit();

?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h1><strong>Cambiar contraseña</strong></h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="?pass">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Contraseña antigua</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="pass" value="" >

                                <?php if ( isset($errores['wrongPass']) ) : ?>
                                  <p class="text-danger"><?=$errores['wrongPass']?></p>
                                <?php endif ; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Contraseña nueva</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="passNew" value="">

                                <?php if ( isset($errores['passNew']) ) : ?>
                                  <p class="text-danger"><?=$errores['passNew']?></p>
                                <?php endif ; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Repita contraseña nueva</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="rePassNew" value="">

                                <?php if ( isset($errores['rePassNew']) ) : ?>
                                  <p class="text-danger"><?=$errores['rePassNew']?></p>
                                <?php endif ; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
