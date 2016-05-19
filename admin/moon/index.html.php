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

      <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

        <form class="form-horizontal" action="?statusAsc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Estado Ascendente">
                  <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                </button>
        </form>

      </div>

      <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

        <form class="form-horizontal" action="?statusDesc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Estado Descendente">
                  <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                </button>
        </form>

      </div>

      <div class="panel panel-default">

        <div class="panel-heading text-center"><h1>Listado de T . Lunar</h1></div>

          <div class="panel-body">

            <?php if (!empty($moonList)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
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

                    <?php foreach ( $moonList as $moon ) :

                      switch ($moon['status']) {
                        case 'Luna Nueva' :
                          $colorStatus = 'danger';
                          break;
                        case 'Luna Llena' :
                          $colorStatus = 'warning';
                          break;
                        case 'Cuarto Creciente' :
                          $colorStatus = 'active';
                          break;
                        case 'Cuarto Menguante' :
                          $colorStatus = 'info';
                          break;
                        default:
                          $colorStatus = '';
                          break;
                      }

                      ?>

                      <tr class="text-center <?=$colorStatus?>">

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
