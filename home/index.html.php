<?php

  require_once '../templates/headerUsser.php';

?>

<div class="container">

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="?addPublishing">

              <div class="form-group">
                  <label class="col-md-3 control-label">Titulo</label>

                  <div class="col-md-7">
                      <input type="text" class="form-control" name="title" value="" >

                      <?php if ( isset($errores['title']) ) : ?>
                        <p class="text-danger"><?=$errores['title']?></p>
                      <?php endif ; ?>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-3 control-label">Contenido</label>

                  <div class="col-md-7">
                      <textarea class="form-control" name="content" rows="8" cols="40" placeholder="¿Qué tal esa pesca?"></textarea>

                      <?php if ( isset($errores['content']) ) : ?>
                        <p class="text-danger"><?=$errores['content']?></p>
                      <?php endif ; ?>

                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-7 col-md-offset-3">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                          Publicar  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                      </button>
                  </div>
              </div>

          </form>

        </div>

    </div>


    <div class="panel panel-default">

      <div class="panel-heading text-center "><strong>De actualidad...</strong></div>

        <div class="panel-body">

          <?php if (!empty($arrayPublishingUsser)) : ?>

          <table class="table table-striped">

              <tbody>

                  <?php foreach ( $arrayPublishingUsser as $publishing ) : ?>
                    <tr>

                      <td class="text-center">

                          <input type="hidden" name="id" value="<?=$publishing['id']?>">
                          <strong><?=$publishing['title']?></strong>
                          <br />
                          <strong>Creado por :</strong> <?=$publishing['name']?> - <?=$publishing['email']?>
                          <br />
                          <strong>Fecha :</strong> <?=$publishing['fecha']?>
                          <br />

                        <strong>Más</strong>
                        <form class="" action="" method="POST" style="display: inline">
                          <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-commenting fa-2x" aria-hidden="true"></i></button>
                        </form>
                        <strong>Comentar</strong>
                        <form class="" action="" method="POST" style="display: inline">
                          <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-comment fa-2x" aria-hidden="true"></i></button>
                        </form>
                        <strong>Lo pesco</strong>
                        <form class="" action="" method="POST" style="display: inline">
                          <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></button>
                        </form>

                      </td>

                    </tr>
                  <?php endforeach ; ?>

              </tbody>

            </table>

          <?php else : ?>

            <h1>No existen publicaciones...</h1>

          <?php endif ; ?>

        </div>

      </div>

  </div>

</div>

</body>
</html>
