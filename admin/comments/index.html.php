<?php

  require_once '../../templates/headerAdminXxx.php';

?>


  <div class="container">

    <div class="col-lg-12">

      <div class="panel panel-default">

        <div class="panel-heading text-center">Listado de Comentarios</div>

          <div class="panel-body">

            <?php if (!empty($comments)) : ?>

            <table class="table table-striped">

                <thead>

                  <tr>
                    <th class="text-center">
                      Id
                    </th>
                    <th class="text-center">
                      Usuario
                    </th>
                    <th class="text-center">
                      Email
                    </th>
                    <th class="text-center">
                      Título de Publicación
                    </th>
                    <th class="text-center">
                      Fecha de Creación
                    </th>
                    <th class="text-center">
                      Visualizar
                    </th>
                    <th class="text-center">
                      Eliminar
                    </th>
                  </tr>

                </thead>

      					<tbody>

                    <?php foreach ( $comments as $comment ) : ?>
                      <tr class="text-center">
                        <td><?=$comment['id']?></td>
                        <td><?=$comment['name']?></td>
                        <td><?=$comment['email']?></td>
                        <td><?=$comment['title']?></td>
                        <td><?=$comment['fecha']?></td>
                        <td>
                          <a href="view?id=<?=$comment['id']?>"><i class="fa fa-eye fa-2x" aria-hidden="true"></i></a>
                        </td>
                        <td>
                          <form class="" action="?deleteComment" method="POST">
                            <input type="hidden" name="idComment" value="<?=$comment['id']?>">
                            <button type="submit" class="btn btn-link btn-sm listiconbutton"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></button>
                          </form>
                        </td>
                      </tr>
                    <?php endforeach ; ?>

                </tbody>

              </table>

            <?php else : ?>

              <h1 class="text-center">No existen comentarios...</h1>

            <?php endif ; ?>

              <a class="btn btn-primary" href="deleted" role="button">Eliminados</a>

          </div>

        </div>

    </div>

  </div>

</body>
</html>
