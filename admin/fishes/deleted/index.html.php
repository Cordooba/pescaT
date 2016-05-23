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

        <div class="panel-heading text-center"><h1>Listado de Peces Eliminadas</h1></div>

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
                      Fecha de Eliminación
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
                        <td><?=$fish['deleted_at']?></td>
                        <td>
                          <form class="" action="?updateFish" method="POST">
                            <input type="hidden" name="idFish" value="<?=$fish['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton" onclick="modalUsser()"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h2 class="text-center">No existen peces eliminados...</h2>

            <?php endif ; ?>

            </div>

      </div>

    </div>

  </div>

  <script type="text/javascript">

  function modalUsser() {

    alert('Se va a actualizar o dar de alta un pez eliminado en la aplicacción.');

  }

  </script>

</body>
</html>
