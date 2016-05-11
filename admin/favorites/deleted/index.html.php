<?php

  require_once '../../../templates/headerAdminXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['user']) ){

        header("Location: ".$base_url);
        exit();

    }else{

        $user = $_SESSION['user'];

    }

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h1>Listado de Favoritos Eliminados</h1></div>

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
                    Fecha de Eliminación
                  </th>
                  <th class="text-center">
                    Actualizar
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
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach ; ?>

              </tbody>

            </table>

          <?php else : ?>

            <h2 class="text-center">No existen favoritos eliminados...</h2>

          <?php endif ; ?>

        </div>

      </div>

  </div>

</div>

</body>
</html>
