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

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading text-center"><h1><strong>T . Lunar</strong></h1></div>

                <div class="panel-body">


                  <form class="form-horizontal" role="form" method="POST" action="?selectMonthMoon">

                      <div class="form-group">
                          <label class="col-md-4 control-label">Mes</label>

                          <div class="col-md-6">
                            <select class="form-control" name="month">
                              <option value="Abril">Abril</option>
                              <option value="Mayo">Mayo</option>
                              <option value="Junio">Junio</option>
                              <option value="Julio">Julio</option>
                              <option value="Agosto">Agosto</option>
                              <option value="Septiembre">Septiembre</option>
                              <option value="Octubre">Octubre</option>
                              <option value="Noviembre">Noviembre</option>
                              <option value="Diciembre">Diciembre</option>
                            </select>

                          </div>
                      </div>


                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-5">
                              <button type="submit" class="btn btn-primary">
                                  Consultar    <i class="fa fa-calendar fa-2x" aria-hidden="true"></i>
                              </button>
                          </div>
                      </div>
                  </form>


                </div>

            </div>

        </div>

    </div>

</div>
