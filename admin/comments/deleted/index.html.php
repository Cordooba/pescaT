<?php

  require_once '../../../templates/headerAdminXxxXxx.php';

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center">Listado de Comentarios</div>

        <div class="panel-body">

          <?php if (!empty($commentsDeleted)) : ?>

          <table class="table table-striped">

              <thead>

                <tr>
                  <th class="text-center">
                    Id
                  </th>
                  <th class="text-center">
                    Nombre
                  </th>
                  <th class="text-center">
                    Email
                  </th>
                  <th class="text-center">
                    Título de Publicación
                  </th>
                  <th class="text-center">
                    Fecha de Creación
                  </th>
                  <th class="text-center">
                    Actualizar
                  </th>
                </tr>

              </thead>

              <tbody>

                  <?php foreach ( $commentsDeleted as $commentDeleted ) : ?>
                    <tr class="text-center">
                      <td><?=$commentDeleted['id']?></td>
                      <td><?=$commentDeleted['name']?></td>
                      <td><?=$commentDeleted['email']?></td>
                      <td><?=$commentDeleted['title']?></td>
                      <td><?=$commentDeleted['fecha']?></td>
                      <td>
                        <form class="" action="?updateComment" method="POST">
                          <input type="hidden" name="idComment" value="<?=$commentDeleted['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach ; ?>

              </tbody>

            </table>

          <?php else : ?>

            <h1 class="text-center">No existen comentarios eliminados...</h1>

          <?php endif ; ?>

        </div>

      </div>

  </div>

</div>

</body>
</html>
