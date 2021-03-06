<?php

  require_once '../../../templates/headerAdminXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['user']) && !isset($_SESSION['userId']) ){

        header("Location: ".$base_url);
        exit();

    }

?>
<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h1>Listado de Usuarios Eliminados</h1></div>

        <div class="panel-body">

          <?php if (!empty($ussersDeleted)) : ?>

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
                    Fecha de Eliminación
                  </th>
                  <th class="text-center">
                    Actualizar
                  </th>
                </tr>

              </thead>

              <tbody>

                  <?php foreach ( $ussersDeleted as $usser ) : ?>
                    <tr class="text-center">
                      <td><?=$usser['id']?></td>
                      <td><?=$usser['name']?></td>
                      <td><?=$usser['subname']?></td>
                      <td><?=$usser['email']?></td>
                      <td><?=$usser['pass']?></td>
                      <td><?=$usser['deleted_at']?></td>
                      <td>

                          <button type="submit" class="btn btn-link btn-sm listiconbutton" data-toggle="modal" data-target="#myModal<?=$usser['id']?>"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></button>

                          <div class="modal fade" id="myModal<?=$usser['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">¿Estas seguro de que quieres volver a dar de alta el usuario <?=$usser['name']?> <?=$usser['subname']?>?</h4>
                                </div>

                                <div class="modal-footer" style="display: inline-block">
                                  <button style="display: inline" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <form style="display: inline" action="?updateUsser" class="" method="POST">
                                    <input type="hidden" name="idUsser" value="<?=$usser['id']?>">
                                    <button type="submit" class="btn btn-danger">Aceptar</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>

                      </td>
                    </tr>
                  <?php endforeach ; ?>

              </tbody>

          <?php else : ?>

            <h2 class="text-center">No existen usuarios eliminados...</h2>

          <?php endif ; ?>

          </div>

      </div>

  </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
