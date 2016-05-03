<?php

  require_once '../../../templates/headerAdminXxxXxx.php';

?>

  <div class="container">

    <div class="col-lg-12">

      <div class="panel panel-default">

        <div class="panel-heading text-center">Listado de Ubicaciones Eliminadas</div>

          <div class="panel-body">

            <?php if (!empty($locationsDeleted)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
                    <th class="text-center">
                      Id
                    </th>
                    <th class="text-center">
                      Latitud
                    </th>
                    <th class="text-center">
                      Longuitud
                    </th>
                    <th class="text-center">
                      Ubicación
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

                    <?php foreach ( $locationsDeleted as $location ) : ?>
                      <tr class="text-center">
                        <td><?=$location['id']?></td>
                        <td><?=$location['latitud']?></td>
                        <td><?=$location['longitud']?></td>
                        <td><?=$location['location']?></td>
                        <td><?=$location['created_at']?></td>
                        <td>
                          <form class="" action="?updateLocation" method="POST">
                            <input type="hidden" name="idLocation" value="<?=$location['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h1 class="text-center">No existen ubicaciones eliminadas...</h1>

            <?php endif ; ?>

            </div>

      </div>

    </div>

  </div>

</body>
</html>
