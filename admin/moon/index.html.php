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

        <div class="panel-heading text-center"><h1>Listado de T . Lunar</h1></div>

          <div class="panel-body">

            <?php if (!empty($moonList)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
                    <th class="text-center">
                      Id
                    </th>
                    <th class="text-center">
                      Día
                    </th>
                    <th class="text-center">
                      Mes
                    </th>
                    <th class="text-center">
                      Año
                    </th>
                    <th class="text-center">
                      Estado
                    </th>
                    <th class="text-center">
                      Fecha de Creación
                    </th>
                  </tr>

                </thead>

      					<tbody>

                    <?php foreach ( $moonList as $moon ) : ?>
                      <tr class="text-center">

                        <td><?=$moon['id']?></td>
                        <td><?=$moon['day']?></td>
                        <td><?=$moon['month']?></td>
                        <td><?=$moon['year']?></td>
                        <td><?=$moon['status']?></td>
                        <td><?=$moon['created_at']?></td>

                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h2 class="text-center">No existen datos...</h2>

            <?php endif ; ?>

              <a class="btn btn-primary" href="new" role="button">Nuevo</a>

            </div>

      </div>

    </div>

  </div>

</body>
</html>
