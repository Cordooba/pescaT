<?php

  require_once '../../templates/headerUsserXxx.php';
  require_once '../../db/connectdb.php';

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

                <div class="panel-heading text-center"><h1><strong>Perfil</strong></h1></div>

                <div class="panel-body">

                  <table class="table table-striped">

                      <tbody>

                        <tr class="text-center">
                          <td>
                            <strong>Nombre</strong>
                          </td>
                          <td>
                            <?=$_SESSION['name']?> <?=$_SESSION['subname']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Correo electrónico</strong>
                          </td>
                          <td>
                            <?=$_SESSION['email']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Fecha de nacimiento</strong>
                          </td>
                          <td>
                            <?=$_SESSION['bday']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Localidad</strong>
                          </td>
                          <td>
                            <?=$_SESSION['locality']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Sexo</strong>
                          </td>
                          <td>
                            <?=$_SESSION['sex']?>
                          </td>
                        </tr>

                        <tr class="text-center">
                          <td>
                            <strong>Tipo de pesca</strong>
                          </td>
                          <td>
                            <?=$_SESSION['typeFishing']?>
                          </td>
                        </tr>

                        <tr class="text-center">

                          <td colspan="2">

                            <p>

                              <a href="edit?id=<?=$_SESSION['id']?>">Editar <i class="fa fa-wrench fa-2x" aria-hidden="true"></i></a>

                            </p>

                            <p>

                              <a href="changePass?id=<?=$_SESSION['id']?>">Cambiar mi contraseña <i class="fa fa-user-secret fa-2x" aria-hidden="true"></i></a>

                            </p>

                            <p>

                              <a href="viewFriends">Mis amigos <i class="fa fa-users fa-2x" aria-hidden="true"></i></a>

                            </p>

                          </td>

                        </tr>

                      </tbody>

                  </table>

                </div>

            </div>

        </div>

    </div>

    <div class="col-md-8 col-md-offset-2">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h2>Mis Publicaciones</h2></div>

        <?php if (!empty($publishingList)) : ?>

        <div class="panel-body">

          <table class="table table-striped">

          <?php foreach ($publishingList as $publishing) : ?>

            <thead>

              <tr>

                <th class="text-center">

                  <h3><?=$publishing['title']?></h3>

                </th>

              </tr>

            </thead>

            <tr class="text-center">

              <td>

                <textarea class="" name="" rows="4" cols="90" style="box-sizing: border-box;resize: none;" disabled><?=$publishing['content']?></textarea>

                <p>

                  <strong>Fecha de Creación : </strong><?=$publishing['created_at']?>

                </p>

                <a href="viewComments?id=<?=$publishing['id']?>"><i class="fa fa-comment fa-2x" aria-hidden="true"></i></a>

                <form class="" action="?addFavorite" method="POST" style="display: inline-block">
                  <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                  <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-plus-square fa-2x" aria-hidden="true"></i></button>
                </form>

              </td>

            </tr>

          <?php endforeach ; ?>

          </table>

        </div>

        <?php else: ?>

          <h3 class="text-center">No tienes publicaciones...</h3>

        <?php endif; ?>

    </div>

  </div>

</div>

</div>
