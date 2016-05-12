<?php

  require_once '../../templates/headerAdminXxx.php';
  require_once '../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['user']) && !isset($_SESSION['userId']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

  <div class="container">

    <div class="col-lg-12">

      <div class="panel panel-default">

        <div class="panel-heading text-center"><h1>Listado de Peces</h1></div>

          <div class="panel-body">

            <?php if (!empty($fishes)) : ?>

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
                      Eliminar
                    </th>
                  </tr>

                </thead>

      					<tbody>

                    <?php foreach ( $fishes as $fish ) : ?>
                      <tr class="text-center">
                        <td><?=$fish['id']?></td>
                        <td><?=$fish['latitud']?></td>
                        <td><?=$fish['longitud']?></td>
                        <td><?=$fish['fish']?></td>
                        <td><?=$fish['fishType']?></td>
                        <td><?=$fish['created_at']?></td>
                        <td>
                          <form class="" action="?deleteFish" method="POST">
                            <input type="hidden" name="idFish" value="<?=$fish['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h2 class="text-center">No existen peces...</h2>

            <?php endif ; ?>

              <a class="btn btn-primary" href="new" role="button">Nuevo</a>

              <a class="btn btn-primary" href="deleted" role="button">Eliminados</a>

            </div>

      </div>

    </div>

  </div>

</body>
</html>
