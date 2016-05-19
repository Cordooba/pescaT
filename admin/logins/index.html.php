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

        <div class="panel-heading text-center"><h1>Listado de Publicaciones</h1></div>

          <div class="panel-body">

            <?php if (!empty($loggins)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
                    <th class="text-center">
                      Id
                    </th>
                    <th class="text-center">
                      Servidor
                    </th>
                    <th class="text-center">
                      Protocolo
                    </th>
                    <th class="text-center">
                      IP
                    </th>
                    <th class="text-center">
                      Fecha de Creación
                    </th>
                  </tr>

                </thead>

      					<tbody>

                    <?php foreach ( $loggins as $loggin ) : ?>
                      <tr class="text-center">

                        <td><?=$loggin['id']?></td>
                        <td><?=$loggin['serverSoftware']?></td>
                        <td><?=$loggin['serverProtocol']?></td>
                        <td><?=$loggin['remoteAddr']?></td>
                        <td><?=$loggin['created_at']?></td>

                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h2 class="text-center">No existen loggins...</h2>

            <?php endif ; ?>

          </div>

        </div>

    </div>

  </div>

</body>
</html>
