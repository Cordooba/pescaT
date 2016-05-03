<?php

  require_once '../../../templates/headerAdminXxxXxx.php';

?>

  <div class="container">

    <div class="col-lg-12">

      <div class="panel panel-default">

        <div class="panel-heading text-center">Listado de Peces Eliminadas</div>

          <div class="panel-body">

            <?php if (!empty($fishesDeleted)) : ?>

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
                      Pez
                    </th>
                    <th class="text-center">
                      Tipo
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

                    <?php foreach ( $fishesDeleted as $fish ) : ?>
                      <tr class="text-center">
                        <td><?=$fish['id']?></td>
                        <td><?=$fish['latitud']?></td>
                        <td><?=$fish['longitud']?></td>
                        <td><?=$fish['fish']?></td>
                        <td><?=$fish['fishType']?></td>
                        <td><?=$fish['created_at']?></td>
                        <td>
                          <form class="" action="?updateFish" method="POST">
                            <input type="hidden" name="idFish" value="<?=$fish['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h1 class="text-center">No existen peces eliminados...</h1>

            <?php endif ; ?>

            </div>

      </div>

    </div>

  </div>

</body>
</html>
