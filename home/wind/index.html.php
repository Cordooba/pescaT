<?php

  require_once '../../templates/headerUsserXxx.php';
  require_once '../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['pass']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>

<div class="container">

  <div class="col-lg-8 col-md-offset-2">

    <div class="panel panel-default">

        <div class="panel-body">

          <form class="form-group" action="" method="get">

            <div class="form-group">
                <label class="col-md-4 control-label">Provincia</label>

                <div class="col-md-6">
                  <select class="form-control" name="c">
                    <option value="2520600">Cádiz</option>
                    <option value="3675605">Málaga</option>
                    <option value="6362115">Valencia</option>
                    <option value="2510911">Sevilla</option>
                    <option value="6356055">Barcelona</option>
                    <option value="6357300">A Coruña</option>
                    <option value="1730032">Asturias</option>
                    <option value="6358217">Huelva</option>
                    <option value="6533961">Palma de Mallorca</option>
                  </select>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-5">
                    <button type="submit" class="btn btn-primary">
                        Consultar  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

          </form>

<?php

  if(isset($_GET["c"])) {

    $html = file_get_contents("http://api.openweathermap.org/data/2.5/forecast/city?id=".$_GET["c"]."&APPID=7be428c80e2671f1f3181098c51860ad");

    $json = json_decode($html, true);

    echo "<br />";
    echo "<br />";
    echo "<h3>Ciudad: ".$json['city']['name']." [lat = ".$json['city']['coord']['lat']. ", lon = ".$json['city']['coord']['lon']. " ]</h3>";
    echo "<b>Estado del cielo: </b>".$json['list'][0]['weather'][0]['main']."<br>";
    echo "<b>Porcentaje de nubes : </b>".$json['list'][0]['clouds']['all']."% <br>";
    echo "<b>Descripción: </b>".$json['list'][0]['weather'][0]['description']."<br>";
    echo "<br>";
    echo $json['cod'];
    echo "<b>Velocidad del viento : </b>".$json['list'][0]['wind']['speed']."<br/>";
    echo "<b>Dirección del viento : </b>".$json['list'][0]['wind']['deg']."<br/>";
    echo "<b>Fecha de consulta: </b>".$json['list'][0]['dt_txt']."<br/>";
    echo "<br>";

  }


?>

        </div>

    </div>

  </div>

</div>

</body>
</html>
