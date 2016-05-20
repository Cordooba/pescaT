<?php

  require_once '../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
  <title>Inicio PescaT</title>
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="/pescaT/home">
                    PescaT
                    <img src="" alt="" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                  <ul class="nav navbar-nav navbar-center">

                    <li><a href="../home/weather" title="Tiempo"><i class="fa fa-sun-o fa-3x" aria-hidden="true"></i></a></li>

                    <li><a href="../home/wind" title="Viento"><i class="fa fa-flag-o fa-3x" aria-hidden="true"></i></a></li>

                    <li><a href="../home/tide" title="Mareas"><i class="fa fa-anchor fa-3x" aria-hidden="true"></i></a></li>

                    <li><a href="../home/moon" title="Transito lunar"><i class="fa fa-moon-o fa-3x" aria-hidden="true"></i></a></li>

                    <li><a href="../home/profile" title="Perfil"><i class="fa fa-user fa-3x" aria-hidden="true"></i></a></li>

                    <li><a href="../home/friends" title="Amigos"><i class="fa fa-users fa-3x" aria-hidden="true"></i></a></li>

                    <li><a href="../home/messages" title="Mensajes"><i class="fa fa-envelope fa-3x" aria-hidden="true"></i></a></li>

                    <li><a href="../home/maps" title="Ubicaciones"><i class="fa fa-map-o fa-3x" aria-hidden="true"></i></a></li>

                    <li><a href="../home/mapsFish" title="Peces"><i class="fa fa-map fa-3x" aria-hidden="true"></i></a></li>

                  </ul>

                  <ul class="nav navbar-nav navbar-right">

                    <form class="" role="form" action="?logoutUsser" method="POST">

                      <li>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <button type="submit" class="btn btn-primary" style="margin-bottom : 10px;">
                                    Salir  <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                      </li>

                    </form>

                  </ul>

            </div>
        </div>
  </nav>

<div class="container">

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h2>Resultados de Búsqueda</h2></div>

        <?php if (!empty($result)) : ?>

        <div class="panel-body">

          <?php foreach ($result as $res) : ?>

          <table class="table table-striped">

            <thead>

              <tr class="text-center">

                <td>

                  <h1><?=$res['title']?></h1>

                </td>

              </tr>

            </thead>

            <tr class="text-center">

              <td>

                <textarea class="" name="" rows="4" cols="90" style="box-sizing: border-box" disabled><?=$res['content']?></textarea>

                <p>

                  <strong>Creado por : </strong> <?=$res['name']?> <?=$res['subname']?>

                </p>

                <p>

                  <strong>Fecha de Creación : </strong><?=$res['created_at']?>

                </p>

              </td>

            </tr>

          <?php endforeach ; ?>

          </table>

        </div>

        <?php else: ?>

          <h3 class="text-center">No existen resultados relacionados con la búsqueda...</h3>

        <?php endif; ?>

    </div>

  </div>

</div>

</body>
</html>
