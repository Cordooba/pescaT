<?php

  require_once '../../../templates/headerUsserXxxXxx.php';
  require_once '../../../db/connectdb.php';

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

                <div class="panel-heading text-center"><h1><strong>Perfil</strong></h1></div>

                <div class="panel-body">

                  <table class="table table-striped">

                      <tbody>

                        <tr class="text-center">
                          <td>
                            <strong>Nombre</strong>
                          </td>
                          <td>
                            <?=$usser['name']?> <?=$usser['subname']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Correo electrónico</strong>
                          </td>
                          <td>
                            <?=$usser['email']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Fecha de nacimiento</strong>
                          </td>
                          <td>
                            <?=$usser['bday']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Localidad</strong>
                          </td>
                          <td>
                            <?=$usser['locality']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Sexo</strong>
                          </td>
                          <td>
                            <?=$usser['sex']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Tipo de pesca</strong>
                          </td>
                          <td>
                            <?=$usser['typeFishing']?>
                          </td>
                        </tr>

                      </tbody>

                  </table>

                </div>

            </div>

        </div>

    </div>

</div>
