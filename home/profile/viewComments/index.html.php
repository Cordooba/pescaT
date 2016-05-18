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

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

      <div class="panel-heading text-center "><h1 class="text-center">Comentarios</h1></div>

        <div class="panel-body">

          <?php if (!empty($commentsPublishing)) : ?>

          <?php foreach ($commentsPublishing as $comment) : ?>

          <table class="table table-striped">

              <tbody>

                  <tr>

                    <td class="text-center">

                      <textarea class="" name="" rows="10" cols="90" style="box-sizing: border-box;resize: none;" disabled><?=$comment['content']?>.</textarea>

                    </td>

                  </tr>

              </tbody>

              <tfoot>

                <tr>

                  <td class="text-center">

                    <strong>Fecha de Creación : </strong> <?=$comment['created_at']?>

                  </td>

                </tr>

                <tr>

                  <td class="text-center">

                    <strong>Creado por : </strong> <?=$comment['name']?> - <?=$comment['email']?>

                  </td>

                </tr>

              </tfoot>

          </table>

          <?php endforeach ; ?>

          <?php else: ?>

            <h2 class="text-center">No existen comentarios...</h2>

          <?php endif; ?>

        </div>

      </div>

    </div>

  </div>

</div>
