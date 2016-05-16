<?php

  require_once '../../templates/headerUsserXxx.php';
  require_once '../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h1>T . Lunar</h1></div>

        <div class="panel-body">

          <?php if (!empty($monthMoon)) : ?>

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
                    Fase Lunar
                  </th>
                </tr>

              </thead>

              <tbody>

                  <?php foreach ( $monthMoon as $moon ) : ?>
                    <tr class="text-center">
                      <td><?=$moon['day']?></td>
                      <td><?=$moon['month']?></td>
                      <td><?=$moon['year']?></td>
                      <td><?=$moon['status']?></td>
                    </tr>
                  <?php endforeach ; ?>

              </tbody>

            </table>

          <?php else : ?>

            <h2 class="text-center">No existen registros...</h2>

          <?php endif ; ?>

          </div>

    </div>

  </div>

</div>

</body>
</html>
