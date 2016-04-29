<?php

  require_once '../templates/headerUsser.php';

?>

<div class="container">

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

      <div class="panel-heading text-center">De actualidad...</div>

        <div class="panel-body">

          <?php if (!empty($arrayPublishingUsser)) : ?>

          <table class="table table-striped">

              <tbody>

                  <?php foreach ( $arrayPublishingUsser as $publishing ) : ?>
                    <tr>

                      <td class="text-center">

                        <?=$publishing['content']?>
                        <br />
                        <strong>Creado por :</strong> <?=$publishing['name']?> - <?=$publishing['email']?>
                        <br />
                        <strong>Fecha :</strong> <?=$publishing['fecha']?>
                        <br />
                        Comentar
                        <form class="" action="" method="POST" style="display: inline">
                          <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-comment fa-2x" aria-hidden="true"></i></button>
                        </form>
                        Lo pesco
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
