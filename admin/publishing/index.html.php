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

          <form class="form-horizontal" action="?ussersAsc" method="post" class="orderbutton">
  								<button type="submit" class="btn btn-primary" title="Usuario Ascendente">
  									<span class="glyphicon glyphicon-sort-by-alphabet"></span>
  								</button>
  				</form>

        </div>

        <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

          <form class="form-horizontal" action="?ussersDesc" method="post" class="orderbutton">
  								<button type="submit" class="btn btn-primary" title="Usuario Descendente">
  									<span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
  								</button>
  				</form>

        </div>

        <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

          <form class="form-horizontal" action="?idAsc" method="post" class="orderbutton">
                  <button type="submit" class="btn btn-primary" title="Id Ascendente">
                    <span class="glyphicon glyphicon-sort-by-order"></span>
                  </button>
          </form>

        </div>

        <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

          <form class="form-horizontal" action="?idDesc" method="post" class="orderbutton">
                  <button type="submit" class="btn btn-primary" title="Id Ascendente">
                    <span class="glyphicon glyphicon-sort-by-order-alt"></span>
                  </button>
          </form>

        </div>

      <div class="panel panel-default">

        <div class="panel-heading text-center"><h1>Listado de Publicaciones</h1></div>

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

                          <button type="submit" class="btn btn-link btn-sm listiconbutton" data-toggle="modal" data-target="#myModal<?=$publishing['idPublishing']?>"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>

                          <div class="modal fade" id="myModal<?=$publishing['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                  <h4 class="modal-title" id="myModalLabel">¿Estas seguro de que quieres eliminar la publicacción?</h4>
                                </div>

                                <div class="modal-footer" style="display: inline-block">
                                  <button style="display: inline" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                  <form style="display: inline" action="?deletePublishing" class="" method="POST">
                                    <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
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

              <h2 class="text-center">No existen publicaciones...</h2>

            <?php endif ; ?>

              <a class="btn btn-primary" href="new" role="button">Nueva</a>

              <a class="btn btn-primary" href="deleted" role="button">Eliminadas</a>

          </div>

        </div>

    </div>

  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>
