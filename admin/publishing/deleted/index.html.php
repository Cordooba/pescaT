<?php

  require_once '../../../templates/headerAdminXxxXxx.php';
  require_once '../../../db/connectdb.php';

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

      <div class="panel-heading text-center">Listado de Publicaciones Eliminadas</div>

        <div class="panel-body">

          <?php if (!empty($arrayPublishingUsserDeleted)) : ?>

          <table class="table table-striped">

            <thead>

              <tr>
                <th class="text-center">
                  Id
                </th>
                <th class="text-center">
                  Apellidos
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
                  Actualizar
                </th>
              </tr>

            </thead>

              <tbody>

                  <?php foreach ( $arrayPublishingUsserDeleted as $publishing ) : ?>
                    <tr class="text-center">
                      <td><?=$publishing['id']?></td>
                      <td><?=$publishing['name']?></td>
                      <td><?=$publishing['email']?></td>
                      <td><?=$publishing['idUsser']?></td>
                      <td><?=$publishing['created_at']?></td>
                      <td>
                        <a href="view?id=<?=$publishing['id']?>"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
                      </td>
                      <td>
                        <form class="" action="?updatePublishing" method="POST">
                          <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach ; ?>

              </tbody>

          <?php else : ?>

            <h1 class="text-center">No existen publicaciones eliminadas...</h1>

          <?php endif ; ?>

        </div>

    </div>

  </div>

</div>
