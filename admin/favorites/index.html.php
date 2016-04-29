<?php

  require_once '../../templates/headerAdminXxx.php';

?>

  <div class="container">

    <div class="col-lg-12">

      <div class="panel panel-default">

        <div class="panel-heading text-center">Listado de Favoritos</div>

          <div class="panel-body">

            <?php if (!empty($favorites)) : ?>

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

                    <?php foreach ( $favorites as $favorite ) : ?>
                      <tr class="text-center">
                        <td><?=$favorite['id']?></td>
                        <td><?=$favorite['name']?></td>
                        <td><?=$favorite['email']?></td>
                        <td><?=$favorite['title']?></td>
                        <td><?=$favorite['fecha']?></td>
                        <td>
                          <form class="" action="?deleteFavorite" method="POST">
                            <input type="hidden" name="idFavorite" value="<?=$favorite['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h1 class="text-center">No existen favoritos...</h1>

            <?php endif ; ?>

              <a class="btn btn-primary" href="deleted" role="button">Eliminados</a>

          </div>

        </div>

    </div>

  </div>

</body>
</html>
