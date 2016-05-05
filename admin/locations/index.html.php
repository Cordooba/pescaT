<?php

  require_once '../../templates/headerAdminXxx.php';
  require_once '../../db/connectdb.php';

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

        <div class="panel-heading text-center">Listado de Ubicaciones</div>

          <div class="panel-body">

            <?php if (!empty($locations)) : ?>

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
                      Eliminar
                    </th>
                  </tr>

                </thead>

      					<tbody>

                    <?php foreach ( $locations as $location ) : ?>
                      <tr class="text-center">
                        <td><?=$location['id']?></td>
                        <td><?=$location['latitud']?></td>
                        <td><?=$location['longitud']?></td>
                        <td><?=$location['location']?></td>
                        <td><?=$location['created_at']?></td>
                        <td>
                          <form class="" action="?deleteLocation" method="POST">
                            <input type="hidden" name="idLocation" value="<?=$location['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h1 class="text-center">No existen ubicaciones...</h1>

            <?php endif ; ?>

              <a class="btn btn-primary" href="new" role="button">Nueva</a>

              <a class="btn btn-primary" href="deleted" role="button">Eliminadas</a>

            </div>

      </div>

    </div>

  </div>

</body>
</html>
