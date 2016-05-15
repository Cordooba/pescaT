<?php

  require_once '../../templates/headerUsserXxx.php';
  require_once '../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

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

                  <form class="" action="?addFriend" method="post" style="display: inline-block">

                    <input type="hidden" name="idUsser" value="<?=$usser['id']?>">
                    <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i></button>

                  </form>

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
