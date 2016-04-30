<?php

  require_once '../../../templates/headerAdminXxxXxx.php';

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

                        <textarea name="" rows="8" cols="80"><?=$comment['content']?></textarea>

                        <form class="" action="?updatePublishing" method="POST">
                          <input type="hidden" name="idPublishing" value="<?=$comment['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-refresh fa-2x" aria-hidden="true"></i></button>
                        </form>

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
