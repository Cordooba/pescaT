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

  <div class="col-lg-8 col-md-offset-2">
    <div class="panel panel-default">

      <div class="panel-heading text-center "></div>

        <div class="panel-body">

          <table class="table table-striped">

              <tbody>

                    <tr>

                      <td class="text-center">

                        <textarea name="" rows="8" cols="80" disabled><?=$comment['content']?></textarea>

                      </td>

                    </tr>

              </tbody>

            </table>

        </div>

      </div>

    </div>

    </div>

  </div>

</div>

</body>
</html>
