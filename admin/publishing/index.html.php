<?php

  require_once '../../templates/headerAdminXxx.php';

?>

  <div class="container">

    <div class="col-lg-12">

      <div class="panel panel-default">

        <div class="panel-heading text-center">Listado de Publicaciones</div>

          <div class="panel-body">

            <?php if (!empty($arrayPublishingUsser)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
                    <th class="text-center">
                      Id
                    </th>
                    <th class="text-center">
                      Contenido
                    </th>
                    <th class="text-center">
                      Apellidos
                    </th>
                    <th class="text-center">
                      Email
                    </th>
                    <th class="text-center">
                      Id Usuario
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

                    <?php foreach ( $arrayPublishingUsser as $publishing ) : ?>
                      <tr class="text-center">
                        <td><?=$publishing['id']?></td>
                        <td><?=$publishing['content']?></td>
                        <td><?=$publishing['name']?></td>
                        <td><?=$publishing['email']?></td>
                        <td><?=$publishing['idUsser']?></td>
                        <td><?=$publishing['created_at']?></td>
                        <td>
                          <form class="" action="?deletePublishing" method="POST">
                            <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h1 class="text-center">No existen publicaciones...</h1>

            <?php endif ; ?>

              <a class="btn btn-primary" href="new" role="button">Nueva</a>

              <a class="btn btn-primary" href="deleted" role="button">Eliminadas</a>

          </div>

        </div>

    </div>

  </div>

</body>
</html>
