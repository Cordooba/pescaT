<?php

  require_once '../templates/headerUsser.php';
  require_once '../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<div class="container">

  <div class="col-lg-8 col-md-offset-5" style="margin-bottom: 10px;">

    <form class="form-inline" action="?search" method="post">

      <div class="form-group">

        <input type="text" class="form-control" placeholder="Buscar..." name="search">

      </div>

      <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>

    </form>

  </div>

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="?addPublishing">

              <div class="form-group">
                  <label class="col-md-3 control-label">Titulo :</label>

                  <div class="col-md-7">
                      <input type="text" class="form-control" name="title" value="<?php if(isset($title)) echo $title;?>" placeholder="Título de la captura...">

                      <?php if ( isset($errores['title']) ) : ?>
                        <p class="text-danger"><?=$errores['title']?></p>
                      <?php endif ; ?>
                  </div>
              </div>

              <div class="form-group">
                  <label class="col-md-3 control-label">Contenido :</label>

                  <div class="col-md-7">
                      <textarea class="form-control" name="content" rows="8" cols="40" placeholder="¿Qué tal esa pesca?"><?php if(isset($content)) echo $content;?></textarea>

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

      <div class="panel-heading text-center "><h2><strong>De actualidad...</strong></h2></div>

        <div class="panel-body">

          <?php if (!empty($arrayPublishingUsser)) : ?>

          <table class="table table-striped">

              <tbody>

                  <?php foreach ( $arrayPublishingUsser as $publishing ) : ?>
                    <tr>

                      <td class="text-center">

                        <input type="hidden" name="id" value="<?=$publishing['id']?>">
                        <strong><h3><?=$publishing['title']?></h3></strong>
                        <textarea rows="10" cols="70" disabled style="display: block-inline;resize: none"><?=$publishing['content']?></textarea>
                        <br / >
                        <strong>Creado por :</strong> <?=$publishing['name']?> - <?=$publishing['email']?>
                        <br />
                        <strong>Fecha :</strong> <?=$publishing['fecha']?>
                        <br />

                        <a href="viewComments?id=<?=$publishing['id']?>"><i class="fa fa-comment fa-2x" aria-hidden="true"></i></a>

                        <form class="" action="?addFavorite" method="POST" style="display: inline-block">
                          <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></button>
                        </form>

                      </td>

                    </tr>
                  <?php endforeach ; ?>

              </tbody>

            </table>

          <?php else : ?>

            <h2 class="text-center">No existen publicaciones...</h2>

          <?php endif ; ?>

        </div>

      </div>

  </div>

</div>

</body>
</html>
