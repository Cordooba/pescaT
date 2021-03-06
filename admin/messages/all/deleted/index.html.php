<?php

  require_once '../../../../templates/headerAdminXxxXxxXxx.php';
  require_once '../../../../db/connectdb.php';

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

                <div class="panel-heading text-center"><h1><strong>Todos los Mensajes Eliminados</strong></h1></div>

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

                        </tr>

                        <?php endforeach ; ?>

                      </tbody>

                  </table>

                <?php else : ?>

                  <h2 class="text-center">No existen mensajes...</h2>

                <?php endif ; ?>

                </div>

            </div>

        </div>

    </div>

</div>
