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

        <div class="panel-heading text-center"><h1>Listado de Peces Eliminadas</h1></div>

          <div class="panel-body">

            <?php if (!empty($fishesDeleted)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
                    <th class="text-center">
                      Id
                    </th>
                    <th class="text-center">
                      Latitud
                    </th>
                    <th class="text-center">
                      Longuitud
                    </th>
                    <th class="text-center">
                      Pez
                    </th>
                    <th class="text-center">
                      Tipo
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

                    <?php foreach ( $fishesDeleted as $fish ) : ?>
                      <tr class="text-center">
                        <td><?=$fish['id']?></td>
                        <td><?=$fish['latitud']?></td>
                        <td><?=$fish['longitud']?></td>
                        <td><?=$fish['fish']?></td>
                        <td><?=$fish['fishType']?></td>
                        <td><?=$fish['deleted_at']?></td>
                        <td>

                          <button type="submit" class="btn btn-link btn-sm listiconbutton" data-toggle="modal" data-target="#myModal<?=$fish['id']?>"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>

                          <div class="modal fade" id="myModal<?=$fish['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">¿Estas seguro de que quieres dar de alta el pez eliminado <?=$fish['fish']?>?</h4>
                                </div>

                                <div class="modal-footer" style="display: inline-block">
                                  <button style="display: inline" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <form style="display: inline" action="?updateFish" class="" method="POST">
                                    <input type="hidden" name="idFish" value="<?=$fish['id']?>">
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

              </table>

            <?php else : ?>

              <h2 class="text-center">No existen peces eliminados...</h2>

            <?php endif ; ?>

            </div>

      </div>

    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
