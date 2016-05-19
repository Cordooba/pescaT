<?php

  require_once '../templates/headerAdmin.php';
  require_once '../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['user']) && !isset($_SESSION['userId']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<div class="container">

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

        <div class="panel-body">

          <table class="table table-hover">

            <thead>

              <tr class="info">

                <th class="text-center">

                  Panel de Administración

                </th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <td class="text-center">

                  <a href="logins"><i class="fa fa-laptop" aria-hidden="true"></i>   Administración de Loggins</a>

                </td>

              </tr>

              <tr>

                <td class="text-center">

                  <a href="ussers"><i class="fa fa-users" aria-hidden="true"></i>   Administración de Usuarios</a>

                </td>

              </tr>

              <tr>

                <td class="text-center">

                  <a href="publishing"><i class="fa fa-comments-o" aria-hidden="true"></i>   Administración de Publicaciones</a>

                </td>

              </tr>

              <tr>

                <td class="text-center">

                  <a href="comments"><i class="fa fa-comment" aria-hidden="true"></i>   Administración de Comentarios</a>

                </td>

              </tr>

              <tr>

                <td class="text-center">

                  <a href="favorites"><i class="fa fa-plus-square" aria-hidden="true"></i>   Administración de Favoritos</a>

                </td>

              </tr>

              <tr>

                <td class="text-center">

                  <a href="messages"><i class="fa fa-envelope" aria-hidden="true"></i>   Administración de Mensajes</a>

                </td>

              </tr>

              <tr>

                <td class="text-center">

                  <a href="locations"><i class="fa fa-map" aria-hidden="true"></i>   Administración de Ubicaciones</a>

                </td>

              </tr>

              <tr>

                <td class="text-center">

                  <a href="fishes"><i class="fa fa-map-marker" aria-hidden="true"></i>   Administración de Peces</a>

                </td>

              </tr>

              <tr>

                <td class="text-center">

                  <a href="moon"><i class="fa fa-moon-o" aria-hidden="true"></i>   Administración de T . Lunar</a>

                </td>

              </tr>

              <tr>

                <td class="text-center">

                  <a href="tide"><i class="fa fa-anchor" aria-hidden="true"></i>   Administración de Mareas</a>

                </td>

              </tr>

            </tbody>

            <thead>

              <tr>

                <td class="text-center">

                  <strong>PescaT &copy;</strong>

                </td>

              </tr>

            </thead>

          </table>

        </div>

        </div>

  </div>

</div>

</body>
</html>
