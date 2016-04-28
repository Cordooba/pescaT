<?php

  require_once '../../templates/headerAdminXxx.php';

?>

  <div class="container">

    <div class="col-lg-12">

      <div class="panel panel-default">

        <div class="panel-heading">Listado de Usuarios</div>

          <div class="panel-body">

            <?php if (!empty($ussers)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
                    <th>
                      Id
                    </th>
                    <th>
                      Nombre
                    </th>
                    <th>
                      Apellidos
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Password
                    </th>
                    <th>
                      Fecha de Creación
                    </th>
                    <th>
                      Eliminar
                    </th>
                  </tr>

                </thead>

      					<tbody>

                    <?php foreach ( $ussers as $usser ) : ?>
                      <tr>
                        <td><?=$usser['id']?></td>
                        <td><?=$usser['name']?></td>
                        <td><?=$usser['subname']?></td>
                        <td><?=$usser['email']?></td>
                        <td><?=$usser['pass']?></td>
                        <td><?=$usser['created_at']?></td>
                        <td>
                          <form class="" action="?deleteUsser" method="POST">
                            <input type="hidden" name="idUsser" value="<?=$usser['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h1>No existen usuarios...</h1>

            <?php endif ; ?>

              <a class="btn btn-primary" href="deleted" role="button">Eliminados</a>

            </div>

      </div>

    </div>

  </div>

</body>
</html>
