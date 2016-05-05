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

        <div class="panel-heading text-center">Listado de Usuarios</div>

          <div class="panel-body">

            <?php if (!empty($ussers)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
                    <th class="text-center">
                      Id
                    </th>
                    <th class="text-center">
                      Nombre
                    </th>
                    <th class="text-center">
                      Apellidos
                    </th>
                    <th class="text-center">
                      Email
                    </th>
                    <th class="text-center">
                      Password
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

                    <?php foreach ( $ussers as $usser ) : ?>
                      <tr class="text-center">
                        <td><?=$usser['id']?></td>
                        <td><?=$usser['name']?></td>
                        <td><?=$usser['subname']?></td>
                        <td><?=$usser['email']?></td>
                        <td><?=$usser['pass']?></td>
                        <td><?=$usser['created_at']?></td>
                        <td>
                          <form class="" action="?deleteUsser" method="POST">
                            <input type="hidden" name="idUsser" value="<?=$usser['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-user-times fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h1 class="text-center">No existen usuarios...</h1>

            <?php endif ; ?>

              <a class="btn btn-primary" href="deleted" role="button">Eliminados</a>

            </div>

      </div>

    </div>

  </div>

</body>
</html>
