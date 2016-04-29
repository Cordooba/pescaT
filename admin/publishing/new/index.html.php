<?php

  require_once '../../../templates/headerAdminXxxXxx.php';

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center">Añadir una publicación</div>

        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="?addUsser">

              <div class="form-group">
                  <label class="col-md-3 control-label">Titulo</label>

                  <div class="col-md-6">
                      <input type="text" class="form-control" name="title" value="<?php if(isset($title)) echo $title;?>" >

                      <?php if ( isset($errores['']) ) : ?>
                        <p class="text-danger"><?=$errores['']?></p>
                      <?php endif ; ?>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-3 control-label">Contenido</label>

                  <div class="col-md-6">
                      <input type="text" class="form-control" name="content" value="<?php if(isset($content)) echo $content;?>" >

                      <?php if ( isset($errores['']) ) : ?>
                        <p class="text-danger"><?=$errores['']?></p>
                      <?php endif ; ?>

                  </div>
              </div>

              <div class="form-group">

                  <label class="col-md-3 control-label">Creado por :</label>

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
                          Añadir  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                      </button>
                  </div>
              </div>

          </form>

        </div>

    </div>

  </div>

</div>
