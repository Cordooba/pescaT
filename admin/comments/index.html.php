<?php

  require_once '../../templates/headerAdminXxx.php';
  require_once '../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['user']) && !isset($_SESSION['userId']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

  <div class="container">

    <div class="col-lg-12">

      <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

        <form class="form-horizontal" action="?ussersAsc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Usuario Ascendente">
                  <span class="glyphicon glyphicon-sort-by-alphabet"></span>
                </button>
        </form>

      </div>

      <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

        <form class="form-horizontal" action="?ussersDesc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Usuario Descendente">
                  <span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
                </button>
        </form>

      </div>

      <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

        <form class="form-horizontal" action="?publishingAsc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Id Ascendente">
                  <span class="glyphicon glyphicon-sort-by-order"></span>
                </button>
        </form>

      </div>

      <div class="btn-group" role="group" aria-label="order" style="margin-bottom: 5px">

        <form class="form-horizontal" action="?publishingDesc" method="post" class="orderbutton">
                <button type="submit" class="btn btn-primary" title="Id Ascendente">
                  <span class="glyphicon glyphicon-sort-by-order-alt"></span>
                </button>
        </form>

      </div>

      <div class="panel panel-default">

        <div class="panel-heading text-center"><h1>Listado de Comentarios</h1></div>

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

              <h2 class="text-center">No existen comentarios...</h2>

            <?php endif ; ?>

              <a class="btn btn-primary" href="deleted" role="button">Eliminados</a>

          </div>

        </div>

    </div>

  </div>

</body>
</html>
