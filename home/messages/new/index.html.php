<?php

  require_once '../../../templates/headerUsserXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h1>Añadir una mensaje</h1></div>

        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="?addMessage">

              <div class="form-group">
                  <label class="col-md-3 control-label">Asunto</label>

                  <div class="col-md-6">
                      <input type="text" class="form-control" name="subject" value="<?php if(isset($subject)) echo $subject;?>" >

                      <?php if ( isset($errores['subject']) ) : ?>
                        <p class="text-danger"><?=$errores['subject']?></p>
                      <?php endif ; ?>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-3 control-label">Contenido</label>

                  <div class="col-md-6">
                      <textarea class="form-control" name="content" rows="8" cols="40"><?php if(isset($content)) echo $content;?></textarea>

                      <?php if ( isset($errores['content']) ) : ?>
                        <p class="text-danger"><?=$errores['content']?></p>
                      <?php endif ; ?>

                  </div>
              </div>

              <div class="form-group">

                  <label class="col-md-3 control-label">Enviar a :</label>

                  <div class="col-md-6">

                    <?php if ( isset($ussers) ) : ?>

                    <select class="form-control" name="idUsser">

                      <?php foreach ( $ussers as $usser ) : ?>
                      <option value="<?=$usser['id']?>"><?=$usser['name']?></option>
                      <?php endforeach ; ?>
                    </select>

                  <?php else : ?>
                    <p class="text-center">No existen usuarios...</p>
                  <?php endif ; ?>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-5">
                      <button type="submit" class="btn btn-primary">
                          Enviar  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                      </button>
                  </div>
              </div>

          </form>

        </div>

    </div>

  </div>

</div>
