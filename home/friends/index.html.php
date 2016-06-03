<?php

  require_once '../../templates/headerUsserXxx.php';
  require_once '../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<?php if (!empty($ussers)) : ?>

<div class="container">

  <?php foreach ($ussers as $usser) : ?>

  <div class="panel panel-default col-lg-6 col-md-offset-3">

    <div class="panel-heading text-center "><strong><?=$usser['name']?> <?=$usser['subname']?></strong></div>

      <div class="panel-body">

        <table class="table">

            <tbody>

              <tr class="text-center">

                <td>

                  <img src="../../images/image002.jpg" alt="FotoPerfil" />

                </td>

              </tr>

              <tr class="text-center">

                <td>

                  <strong>Fecha de nacimiento :</strong> <?=$usser['bday']?>

                </td>

              </tr>

              <tr class="text-center">

                <td>

                  <strong>Sexo :</strong> <?=$usser['sex']?>

                </td>

              </tr>

              <tr class="text-center">

                <td>

                  <strong>Localidad :</strong> <?=$usser['locality']?>

                </td>

              </tr>

              <tr class="text-center">

                <td>

                  <a href="sendMessage?id=<?=$usser['id']?>" style="margin-right: 10px"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>

                  <a href="viewUsserProfile?id=<?=$usser['id']?>"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>

                  <button type="submit" class="btn btn-link btn-sm listiconbutton" data-toggle="modal" data-target="#myModal<?=$usser['id']?>"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></button>

                    <div class="modal fade" id="myModal<?=$usser['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">¿Estas seguro de que quieres seguir al usuario <?=$usser['name']?> <?=$usser['subname']?>?</h4>
                          </div>

                          <div class="modal-footer" style="display: inline-block">
                            <button style="display: inline" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <form style="display: inline" action="?addFriend" class="" method="POST">
                              <input type="hidden" name="idUsser" value="<?=$usser['id']?>">
                              <button type="submit" class="btn btn-danger">Aceptar</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                </td>

              </tr>

            </tbody>

        </table>

      </div>

  </div>

  <?php endforeach ; ?>

</div>

<?php else : ?>

  <div class="container">

    <div class="panel panel-default">

      <div class="panel-heading text-center "><strong>No existen usuarios...</strong></div>

        <div class="panel-body">

        </div>

    </div>

  </div>

<?php endif ; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>
