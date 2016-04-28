<?php

  require_once '../templates/headerUsser.php';

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading">De actualidad...</div>

        <div class="panel-body">

          <?php if (!empty($arrayPublishingUsser)) : ?>

          <table class="table table-striped">

              <tbody>

                  <?php foreach ( $arrayPublishingUsser as $publishing ) : ?>
                    <tr>
                      <td><?=$publishing['id']?></td>
                      <td><?=$publishing['content']?></td>
                      <td><?=$publishing['name']?></td>
                      <td><?=$publishing['email']?></td>
                      <td><?=$publishing['idUsser']?></td>
                      <td><?=$publishing['created_at']?></td>
                      <td>
                        <form class="" action="" method="POST">
                          <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-comment fa-2x" aria-hidden="true"></i></button>
                        </form>
                      </td>
                      <td>
                        <form class="" action="" method="POST">
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
