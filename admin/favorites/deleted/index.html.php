<?php

  require_once '../../../templates/headerAdminXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['user']) && !isset($_SESSION['userId']) ){

        header("Location: ".$base_url);
        exit();

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

                        <button type="submit" class="btn btn-link btn-sm listiconbutton" data-toggle="modal" data-target="#myModal<?=$favoriteDeleted['id']?>"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>

                        <div class="modal fade" id="myModal<?=$favoriteDeleted['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">¿Estas seguro de que quieres dar de alta un me gusta de la publicación <?=$favoriteDeleted['title']?>?</h4>
                              </div>

                              <div class="modal-footer" style="display: inline-block">
                                <button style="display: inline" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <form style="display: inline" action="?updateFavorite" class="" method="POST">
                                  <input type="hidden" name="idFavorite" value="<?=$favoriteDeleted['id']?>">
                                  <button type="submit" class="btn btn-danger">Aceptar</button>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
