<?php

  require_once '../../../templates/headerUsserXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading text-center"><h1>Mensajes Eliminados</h1></div>

                <div class="panel-body">

                  <?php if (!empty($messagesDeleted)) : ?>

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

                            Enviado por

                          </th>

                          <th class="text-center">

                            Visualizar

                          </th>

                        </tr>

                      </thead>

                      <tbody>

                        <?php foreach($messagesDeleted as $message) : ?>

                        <tr class="text-center">

                          <td>

                            <?=$message['subject']?>

                          </td>

                          <td>

                            <?=$message['deleted_at']?>

                          </td>

                          <td>

                            <?=$message['name']?>

                          </td>

                          <td>

                            <a href="view?id=<?=$message['id']?>"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>

                          </td>

                        </tr>

                        <?php endforeach ; ?>

                      </tbody>

                  </table>

                <?php else : ?>

                  <h2 class="text-center">No existen mensajes eliminados...</h2>

                <?php endif ; ?>

                </div>

            </div>

        </div>

    </div>

</div>
