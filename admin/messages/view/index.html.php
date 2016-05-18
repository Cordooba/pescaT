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

      <div class="panel-heading text-center ">

        <strong><?=$message['subject']?></strong>

        <div class="panel-body">

          <table class="table table-striped">

              <tbody>

                    <tr>

                      <td class="text-center">

                        <textarea class="" name="" rows="10" cols="90" style="box-sizing: border-box;resize: none;" disabled><?=$message['content']?>.</textarea>

                      </td>

                    </tr>

              </tbody>

              <tfoot>

                <tr>

                  <td class="text-center">

                    <strong>Creado por : </strong> <?=$message['name']?>, <?=$message['created_at']?>

                  </td>

                </tr>

              </tfoot>

            </table>

        </div>

      </div>

    </div>

    </div>

  </div>

</div>

</body>
</html>
