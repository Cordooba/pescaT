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

        <div class="panel-heading text-center">Listado de Publicaciones</div>

          <div class="panel-body">

            <?php if (!empty($arrayPublishingUsser)) : ?>

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
                      Email
                    </th>
                    <th class="text-center">
                      Id Usuario
                    </th>
                    <th class="text-center">
                      Fecha de Creación
                    </th>
                    <th class="text-center">
                      Visualizar
                    </th>
                    <th class="text-center">
                      Eliminar
                    </th>
                  </tr>

                </thead>

      					<tbody>

                    <?php foreach ( $arrayPublishingUsser as $publishing ) : ?>
                      <tr class="text-center">
                        <td><?=$publishing['idPublishing']?></td>
                        <td><?=$publishing['name']?></td>
                        <td><?=$publishing['email']?></td>
                        <td><?=$publishing['idUsuario']?></td>
                        <td><?=$publishing['fecha']?></td>
                        <td>
                          <a href="view?id=<?=$publishing['idPublishing']?>"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
                        </td>
                        <td>
                          <form class="" action="?deletePublishing" method="POST">
                            <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h1 class="text-center">No existen publicaciones...</h1>

            <?php endif ; ?>

              <a class="btn btn-primary" href="new" role="button">Nueva</a>

              <a class="btn btn-primary" href="deleted" role="button">Eliminadas</a>

          </div>

        </div>

    </div>

  </div>

</body>
</html>
