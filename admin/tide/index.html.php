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

        <form class="form-horizontal" action="?seaAsc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Mar/Océano Ascendente">
                  <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                </button>
        </form>

      </div>

      <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

        <form class="form-horizontal" action="?seaDesc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Mar/Océano Descendente">
                  <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                </button>
        </form>

      </div>

      <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

        <form class="form-horizontal" action="?statusAsc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Estado Ascendente">
                  <span class="glyphicon glyphicon-sort-by-attributes"></span>
                </button>
        </form>

      </div>

      <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

        <form class="form-horizontal" action="?statusDesc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Estado Descendente">
                  <span class="glyphicon glyphicon-sort-by-attributes-alt"></span>
                </button>
        </form>

    </div>

      <div class="panel panel-default">

        <div class="panel-heading text-center"><h1>Listado de Mareas</h1></div>

          <div class="panel-body">

            <?php if (!empty($tideList)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
                    <th class="text-center">
                      Mar / Océano
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
                      Hora
                    </th>
                    <th class="text-center">
                      Estado
                    </th>
                    <th class="text-center">
                      Altura
                    </th>
                    <th class="text-center">
                      Fecha
                    </th>
                  </tr>

                </thead>

      					<tbody>

                    <?php foreach ( $tideList as $tide ) :

                        switch ($tide['status']) {
                          case 'BM' :
                            $colorStatus = 'active';
                            break;
                          case 'PM' : 
                            $colorStatus = 'warning';
                            break;
                          default:
                            $colorStatus = '';
                            break;

                        }
                      ?>
                      <tr class="text-center <?=$colorStatus?>">

                        <td><?=$tide['sea']?></td>
                        <td><?=$tide['day']?></td>
                        <td><?=$tide['month']?></td>
                        <td><?=$tide['year']?></td>
                        <td><?=$tide['hour']?></td>
                        <td><?=$tide['status']?></td>
                        <td><?=$tide['high']?></td>
                        <td><?=$tide['created_at']?></td>

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
