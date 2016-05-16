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

      <div class="panel-heading text-center"><h1>Añadir un T . Lunar</h1></div>

        <div class="panel-body">

          <form class="form-horizontal" role="form" method="POST" action="?addMoon">

            <div class="form-group">
                <label class="col-md-4 control-label">Día</label>

                <div class="col-md-4">
                  <select class="form-control" name="day">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Mes</label>

                <div class="col-md-4">
                  <select class="form-control" name="month">
                    <option value="Enero">Enero</option>
                    <option value="Febrero">Febrero</option>
                    <option value="Marzo">Marzo</option>
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
                <label class="col-md-4 control-label">Mes</label>

                <div class="col-md-4">
                  <select class="form-control" name="year">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                  </select>

                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label">Fase Lunar</label>

                <div class="col-md-4">
                  <select class="form-control" name="status">
                    <option value="Luna Llena">Luna Llena</option>
                    <option value="Luna Nueva">Luna Nueva</option>
                    <option value="Cuarto Creciente">Cuarto Creciente</option>
                    <option value="Cuarto Menguante">Cuarto Menguante</option>
                  </select>

                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-5">
                    <button type="submit" class="btn btn-primary">
                        Añadir  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                    </button>
                </div>
            </div>

          </form>

        </div>

    </div>

  </div>

</div>
