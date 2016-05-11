<?php

  require_once '../../templates/headerUsserXxx.php';
  require_once '../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading text-center"><h1><strong>Mensajes</strong></h1></div>

                <div class="panel-body">

                  <?php if (!empty($messages)) : ?>

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

                        <?php foreach($messages as $message) : ?>

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
                            <form class="" action="?deleteMessage" method="POST">
                              <input type="hidden" name="id" value="<?=$message['id']?>">
                              <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                            </form>
                          </td>

                        </tr>

                        <?php endforeach ; ?>

                      </tbody>

                  </table>

                <?php else : ?>

                  <h2 class="text-center">No existen mensajes...</h2>

                <?php endif ; ?>

                  <a class="btn btn-primary" href="new" role="button">Nuevo</a>

                  <a class="btn btn-primary" href="deleted" role="button">Eliminados</a>

                </div>

            </div>

        </div>

    </div>

</div>
