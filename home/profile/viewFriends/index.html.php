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

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

      <div class="panel-heading text-center "><h1 class="text-center">Mis amigos</h1></div>

        <div class="panel-body">

          <?php if (!empty($friends)) : ?>

          <?php foreach ($friends as $friend) : ?>

          <table class="table table-hover">

            <tbody>

              <!-- <tr class="text-center">

                <td>

                  <img src="../../../images/image002.jpg" alt="FotoPerfil" />

                </td>

              </tr> -->

              <tr class="text-center">

                <td class="text-center">

                  <img style="height: 50px; width: 50px;margin-right: 20px" src="../../../images/image002.jpg" alt="FotoPerfil" />

                  <a style="margin-left: 20px" href="viewProfile?id=<?=$friend['id']?>"><?=$friend['name']?> <?=$friend['subname']?></a>

                  <button type="submit" class="btn btn-link btn-sm listiconbutton" data-toggle="modal" data-target="#myModal<?=$friend['id']?>"><i class="fa fa-user-times fa-2x" aria-hidden="true"></i></button>

                    <div class="modal fade" id="myModal<?=$friend['id']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">¿Estas seguro de que quieres dejar de seguir a este usuario?</h4>
                          </div>

                          <div class="modal-footer" style="display: inline-block">
                            <button style="display: inline" type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <form style="display: inline" action="?deleteFriend" class="" method="POST">
                              <input type="hidden" name="idUsserAdd" value="<?=$friend['id']?>">
                              <button type="submit" class="btn btn-danger">Aceptar</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                  <a href="sendMessage?id=<?=$friend['id']?>"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>

                </td>

              </tr>

            </tbody>

          </table>

          <?php endforeach ; ?>

          <?php else: ?>

            <h2 class="text-center">No tienes añadidos amigos...</h2>

          <?php endif; ?>

        </div>

      </div>

    </div>

  </div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>

</html>
