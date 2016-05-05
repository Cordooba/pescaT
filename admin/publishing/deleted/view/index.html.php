<?php

  require_once '../../../../templates/headerAdminXxxXxxXxx.php';
  require_once '../../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['user']) ){

        header("Location: ".$base_url);
        exit();

    }else{

        $user = $_SESSION['user'];

    }

?>
<div class="container">

  <div class="col-lg-8 col-md-offset-2">
    <div class="panel panel-default">

      <div class="panel-heading text-center "><strong><?=$publishing['title']?></strong></div>

        <div class="panel-body">

          <table class="table table-striped">

              <tbody>

                    <tr>

                      <td class="text-center">

                        <textarea name="" rows="8" cols="80" disabled><?=$publishing['content']?></textarea>

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
