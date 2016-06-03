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

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading text-center"><h1><strong>Mis Mensajes</strong></h1></div>

                <div class="panel-body">

                  <?php if (!empty($messagesAdmin)) : ?>

                  <table class="table table-hover">

                      <thead>

                        <tr>

                          <th class="text-center">

                            Asunto

                          </th>

                          <th class="text-center">

                            Fecha

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

                        <?php foreach($messagesAdmin as $message) : ?>

                        <tr class="text-center">

                          <td>

                            <?=$message['subject']?>

                          </td>

                          <td>

                            <?=$message['created_at']?>

                          </td>

                          <td>

                            <a href="view?id=<?=$message['id']?>"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>

                          </td>

                          <td>
  
                            <button type="submit" class="btn btn-link btn-sm listiconbutton" data-toggle="modal" data-target="#myModal<?=$message['id']?>"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>

                            <div class="modal fade" id="myModal<?=$message['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">¿Estas seguro de que quieres eliminar el mensaje?</h4>
                                  </div>

                                  <div class="modal-footer" style="display: inline-block">
                                    <button style="display: inline" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <form style="display: inline" action="?deleteMessage" class="" method="POST">
                                      <input type="hidden" name="id" value="<?=$message['id']?>">
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

                  <h2 class="text-center">No existen mensajes...</h2>

                <?php endif ; ?>

                  <a class="btn btn-primary" href="new" role="button">Nuevo</a>

                  <a class="btn btn-primary" href="all" role="button">Todos</a>

                  <a class="btn btn-primary" href="deleted" role="button">Eliminados</a>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>
