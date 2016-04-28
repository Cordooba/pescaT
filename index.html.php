<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <title>PescaT</title>
</head>
<body>
  <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="/pescaT">
                    PescaT
                    <img src="" alt="" />
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                        <form class="" role="form" action="?login" method="POST">

                          <div class="form-inline">

                            <div class="form-group">
                                <label class="col-md-6 control-label">Correo electrónico</label>

                                    <div class="col-md-6">
                                      <input type="email" class="form-control" name="emailLogin">
                                    </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-6 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="passLogin">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-5">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>Entrar
                                    </button>
                                </div>
                            </div>

                          </div>

                        </form>

                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Registro de usuario</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="?addUsser">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Nombre</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="<?php if(isset($name)) echo $name;?>" >

                                    <?php if ( isset($errores['name']) ) : ?>
                                      <p class="text-danger"><?=$errores['name']?></p>
                                    <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Apellidos</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="subname" value="<?php if(isset($subname)) echo $subname;?>">

                                    <?php if ( isset($errores) ) : ?>
                                      <p class="text-danger"><?=$errores['subname']?></p>
                                    <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Correo electrónico</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email">

                                    <?php if ( isset($errores) ) : ?>
                                      <p class="text-danger"><?=$errores['email']?></p>
                                    <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="pass">

                                    <?php if ( isset($errores) ) : ?>
                                      <p class="text-danger"><?=$errores['pass']?></p>
                                    <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirme la contraseña</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="repass">

                                    <?php if ( isset($errores) ) : ?>
                                      <p class="text-danger"><?=$errores['repass']?></p>
                                    <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Fecha de nacimiento</label>

                                <div class="col-md-6 form-inline">
                                  <input type="date" name="bday"  />

                                  <?php if ( isset($errores) ) : ?>
                                    <p class="text-danger"><?=$errores['bday']?></p>
                                  <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Sexo</label>

                                <div class="col-md-6">
                                  <input type="radio" name="sex" value="Hombre">Hombre
                                  <input type="radio" name="sex" value="Mujer">Mujer

                                  <?php if ( isset($errores) ) : ?>
                                    <p class="text-danger"><?=$errores['sex']?></p>
                                  <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Localidad</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="locality">
                                    <option value="A Coruña">A Coruña</option>
                                    <option value="Álava">Álava</option>
                                    <option value="Albacete">Albacete</option>
                                    <option value="Alicante">Alicante</option>
                                    <option value="Almería">Almería</option>
                                    <option value="Asturias">Asturias</option>
                                    <option value="Ávila">Ávila</option>
                                    <option value="Badajoz">Badajoz</option>
                                    <option value="Barcelona">Barcelona</option>
                                    <option value="Burgos">Burgos</option>
                                    <option value="Cáceres">Cáceres</option>
                                    <option value="Cádiz">Cádiz</option>
                                    <option value="Cantabria">Cantabria</option>
                                    <option value="Castellón">Castellón</option>
                                    <option value="Ceuta">Ceuta</option>
                                    <option value="Ciudad Real">Ciudad Real</option>
                                    <option value="Córdoba">Córdoba</option>
                                    <option value="Cuenca">Cuenca</option>
                                    <option value="Gerona">Gerona</option>
                                    <option value="Granada">Granada</option>
                                    <option value="Guadalajara">Guadalajara</option>
                                    <option value="Guipúzcoa">Guipúzcoa</option>
                                    <option value="Huelva">Huelva</option>
                                    <option value="Huesca">Huesca</option>
                                    <option value="Jaén">Jaén</option>
                                    <option value="La Rioja">La Rioja</option>
                                    <option value="Las Palmas">Las Palmas</option>
                                    <option value="León">León</option>
                                    <option value="Lleida">Lleida</option>
                                    <option value="Lugo">Lugo</option>
                                    <option value="Madrid">Madrid</option>
                                    <option value="Málaga">Málaga</option>
                                    <option value="Melilla">Melilla</option>
                                    <option value="Murcia">Murcia</option>
                                    <option value="Navarra">Navarra</option>
                                    <option value="Orense">Orense</option>
                                    <option value="Palma de Mallorca">Palma de Mallorca</option>
                                    <option value="Palencia">Palencia</option>
                                    <option value="Pontevedra">Pontevedra</option>
                                    <option value="Salamanca">Salamanca</option>
                                    <option value="Santa Cruz de Tenerife">Santa Cruz de Tenerife</option>
                                    <option value="Segovia">Segovia</option>
                                    <option value="Sevilla">Sevilla</option>
                                    <option value="Soria">Soria</option>
                                    <option value="Tarragona">Tarragona</option>
                                    <option value="Teruel">Teruel</option>
                                    <option value="Toledo">Toledo</option>
                                    <option value="Valencia">Valencia</option>
                                    <option value="Valladolid">Valladolid</option>
                                    <option value="Vizcaya">Vizcaya</option>
                                    <option value="Zamora">Zamora</option>
                                    <option value="Zaragoza">Zaragoza</option>
                                  </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Tipo de pesca</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="typeFishing">
                                    <option value="Surfcasting">Surfcasting</option>
                                    <option value="Spinning">Spinning</option>
                                    <option value="Casting">Casting</option>
                                    <option value="Casting Semipesado">Casting Semipesado</option>
                                    <option value="Casting Pesado">Casting Pesado</option>
                                    <option value="Legering">Legering</option>
                                    <option value="Pulso">Pulso</option>
                                    <option value="Inglesa">Inglesa</option>
                                    <option value="Boloñesa">Boloñesa</option>
                                  </select>

                                </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                Al hacer clic en Registro, aceptas las Condiciones y confirmas que has leído nuestra Política de datos, incluido el Uso de cookies.
                              </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-5">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-user"></i>Registro
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
