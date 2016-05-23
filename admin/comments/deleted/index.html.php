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

  <div class="col-lg-12">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h1>Listado de Comentarios Eliminados</h1></div>

        <div class="panel-body">

          <?php if (!empty($commentsDeleted)) : ?>

          <table class="table table-striped">

              <thead>

                <tr>
                  <th class="text-center">
                    Id
                  </th>
                  <th class="text-center">
                    Nombre
                  </th>
                  <th class="text-center">
                    Email
                  </th>
                  <th class="text-center">
                    Título de Publicación
                  </th>
                  <th class="text-center">
                    Fecha de Eliminación
                  </th>
                  <th class="text-center">
                    Visualizar
                  </th>
                  <th class="text-center">
                    Actualizar
                  </th>
                </tr>

              </thead>

              <tbody>

                  <?php foreach ( $commentsDeleted as $commentDeleted ) : ?>
                    <tr class="text-center">
                      <td><?=$commentDeleted['id']?></td>
                      <td><?=$commentDeleted['name']?></td>
                      <td><?=$commentDeleted['email']?></td>
                      <td><?=$commentDeleted['title']?></td>
                      <td><?=$commentDeleted['fecha']?></td>
                      <td>
                        <a href="view?id=<?=$commentDeleted['id']?>"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
                      </td>
                      <td>
                        <form class="" action="?updateComment" method="POST">
                          <input type="hidden" name="idComment" value="<?=$commentDeleted['id']?>">
                          <button type="submit" class="btn btn-link btn-sm listiconbutton" onclick="modalUsser()"><i class="fa fa-check fa-2x" aria-hidden="true"></i></button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach ; ?>

              </tbody>

            </table>

          <?php else : ?>

            <h2 class="text-center">No existen comentarios eliminados...</h2>

          <?php endif ; ?>

        </div>

      </div>

  </div>

</div>

<script type="text/javascript">

function modalUsser() {

  alert('Se va a actualizar o dar de alta un comentario eliminado en la aplicacción.');

}

</script>

</body>
</html>
