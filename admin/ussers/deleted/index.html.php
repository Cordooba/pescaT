<?php

  require_once '../../../templates/headerAdminXxxXxx.php';

?>

<div class="container">

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center">Listado de Usuarios Eliminados</div>

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
                        <form class="" action="?updateUsser" method="POST">
                          <input type="hidden" name="idUsser" value="<?=$usser['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach ; ?>

              </tbody>

          <?php else : ?>

            <h1 class="text-center">No existen usuarios eliminados...</h1>

          <?php endif ; ?>

          </div>

      </div>

  </div>

</div>
