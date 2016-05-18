<?php

  require_once '../../../templates/headerUsserXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h1>Añadir un mensaje</h1></div>

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
                      <textarea class="form-control" name="content" rows="8" cols="40" style="resize: none;"><?php if(isset($content)) echo $content;?></textarea>

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
                      <option value="<?=$usser['id']?>"><?=$usser['name']?> <?=$usser['subname']?></option>
                      <?php endforeach ; ?>
                    </select>

                  <?php else : ?>
                    <div class="col-md-12" style="margin-top: 8px">
                      <p class="text-center"><strong>No tienes amigos para enviar un mensaje...</strong></p>
                    </div>
                  <?php endif ; ?>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-5">
                    <?php if ( isset($ussers) ) : ?>
                      <button type="submit" class="btn btn-primary">
                          Enviar  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                      </button>
                    <?php else : ?>
                      <button type="submit" class="btn btn-primary" disabled>
                          Enviar  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                      </button>
                    <?php endif ; ?>
                  </div>
              </div>

          </form>

        </div>

    </div>

  </div>

</div>
