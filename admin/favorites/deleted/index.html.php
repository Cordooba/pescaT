<?php

  require_once '../../../templates/headerAdminXxxXxx.php';

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center">Listado de Favoritos</div>

        <div class="panel-body">

          <?php if (!empty($favoritesDeleted)) : ?>

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
                    Eliminar
                  </th>
                </tr>

              </thead>

              <tbody>

                  <?php foreach ( $favoritesDeleted as $favoriteDeleted ) : ?>
                    <tr class="text-center">
                      <td><?=$favoriteDeleted['id']?></td>
                      <td><?=$favoriteDeleted['name']?></td>
                      <td><?=$favoriteDeleted['email']?></td>
                      <td><?=$favoriteDeleted['title']?></td>
                      <td><?=$favoriteDeleted['fecha']?></td>
                      <td>
                        <form class="" action="?updateFavorite" method="POST">
                          <input type="hidden" name="idFavorite" value="<?=$favoriteDeleted['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach ; ?>

              </tbody>

            </table>

          <?php else : ?>

            <h1 class="text-center">No existen favoritos eliminados...</h1>

          <?php endif ; ?>

        </div>

      </div>

  </div>

</div>

</body>
</html>
