<?php

  require_once '../../../templates/headerAdminXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['user']) && !isset($_SESSION['userId']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<div class="container">

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

      <form class="" action="?updatePublishing" method="POST">

      <div class="panel-heading text-center "><input type="text" name="title" value="<?=$publishing['title']?>"></div>

        <div class="panel-body">

          <table class="table table-striped">

              <tbody>

                    <tr>

                      <td class="text-center">

                        <textarea name="content" rows="8" cols="80" style="resize: none;"><?=$publishing['content']?></textarea>

                      </td>

                    </tr>

                    <tr>

                      <td class="text-center">

                        <input type="hidden" name="idPublishing" value="<?=$publishing['id']?>">
                        <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-refresh fa-2x" aria-hidden="true"></i></button>

                      </td>

                    </tr>

              </tbody>

            </table>

        </div>

      </form>

    </div>

  </div>

</div>

</body>
</html>
