<?php

  require_once '../../templates/headerUsserXxx.php';
  require_once '../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>
<div class="container">

  <div class="col-lg-8 col-md-offset-2">
    <div class="panel panel-default">

      <div class="panel-heading text-center ">

        <h1><?=$publishing['title']?></h1>

        <div class="panel-body">

          <table class="table table-striped">

              <tbody>

                    <tr>

                      <td class="text-center">

                        <textarea class="" name="" rows="10" cols="90" style="box-sizing: border-box" disabled><?=$publishing['content']?>.</textarea>

                      </td>

                    </tr>

              </tbody>

              <tfoot>

                <tr>

                  <td class="text-center">

                    <strong>Fecha de Creación : </strong> <?=$publishing['created_at']?>

                  </td>

                </tr>

              </tfoot>

            </table>

        </div>

      </div>

    </div>

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h2>Comentarios</h2></div>

      <div class="panel panel-default">

        <h3 class="text-center">Añadir un comentario...</h3>

        <form class="text-center" action="" method="post">

          <div class="form-group">

            <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">

          </div>

          <div class="form-group">

            <textarea class="" name="content" rows="4" cols="90" style="box-sizing: border-box"></textarea>

          </div>

          <div class="form-group">
                  <button type="submit" class="btn btn-primary">
                      Comentar  <i class="fa fa-comment fa-2x" aria-hidden="true"></i>
                  </button>
          </div>

        </form>

      </div>

        <?php if (!empty($comments)) : ?>

        <div class="panel-body">

          <table class="table table-striped">

            <thead>

              <tr>

                <th class="text-center">

                  <h4>Listado de Comentarios...</h4>

                </th>

              </tr>

            </thead>

          <?php foreach ($comments as $comment) : ?>

            <tr class="text-center">

              <td>

                <textarea class="" name="" rows="4" cols="90" style="box-sizing: border-box" disabled><?=$comment['content']?></textarea>

                <p>

                  <strong>Creado por : </strong> <?=$comment['name']?> <?=$comment['subname']?>

                </p>

                <p>

                  <strong>Fecha de Creación : </strong><?=$comment['created_at']?>

                </p>

              </td>

            </tr>

          <?php endforeach ; ?>

          </table>

        </div>

        <?php else: ?>

          <h3 class="text-center">No existen comentarios</h3>

        <?php endif; ?>

    </div>

  </div>

</div>

</body>
</html>
