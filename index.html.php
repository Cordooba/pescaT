<?php

    $stringSearch = '@admin.com';

    if( isset($_SESSION['user']) && strstr($_SESSION['user'], $stringSearch) ){

        header("Location: admin");
        exit();

    }elseif ( isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['subname']) && isset($_SESSION['email']) && isset($_SESSION['pass']) && isset($_SESSION['bday']) && isset($_SESSION['sex']) && isset($_SESSION['locality']) && isset($_SESSION['typeFishing']) ) {

      header("Location: home");
      exit();

    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
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
                                <label class="col-md-6 control-label text-center">Correo electrónico</label>

                                    <div class="col-md-6">
                                      <input type="email" class="form-control" name="emailLogin" required>
                                    </div>

                            </div>

                            <div class="form-group">
                                <label class="col-md-6 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="passLogin" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button type="submit" class="btn btn-primary" style="margin-top : 4px;">
                                        Entrar   <i class="fa fa-sign-in fa-2x" aria-hidden="true"></i>
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
            <div class="col-md-8 col-md-offset-4">
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

                                    <?php if ( isset($errores['subname']) ) : ?>
                                      <p class="text-danger"><?=$errores['subname']?></p>
                                    <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Correo electrónico</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="<?php if(isset($email)) echo $email;?>">

                                    <?php if ( isset($errores['email']) ) : ?>
                                      <p class="text-danger"><?=$errores['email']?></p>
                                    <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Contraseña</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="pass">

                                    <?php if ( isset($errores['pass']) ) : ?>
                                      <p class="text-danger"><?=$errores['pass']?></p>
                                    <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirme la contraseña</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="repass">

                                    <?php if ( isset($errores['repass']) ) : ?>
                                      <p class="text-danger"><?=$errores['repass']?></p>
                                    <?php endif ; ?>
                                    <?php if ( isset($errores['incorrectPass']) ) : ?>
                                      <p class="text-danger"><?=$errores['incorrectPass']?></p>
                                    <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Fecha de nacimiento</label>

                                <div class="col-md-6 form-inline">
                                  <input type="date" name="bday"  value="<?php if(isset($bday)) echo $bday;?>"/>

                                  <?php if ( isset($errores['bday']) ) : ?>
                                    <p class="text-danger"><?=$errores['bday']?></p>
                                  <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Sexo</label>

                                <div class="col-md-6">
                                  <input type="radio" name="sex" value="Hombre" checked <?php if(isset($sex) && $sex == 'Hombre') echo 'checked' ;?>>Hombre
                                  <input type="radio" name="sex" value="Mujer" <?php if(isset($sex) && $sex == 'Mujer') echo 'checked' ;?>>Mujer

                                  <?php if ( isset($errores['sex']) ) : ?>
                                    <p class="text-danger"><?=$errores['sex']?></p>
                                  <?php endif ; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Localidad</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="locality">
                                    <option value="A Coruña" <?php if(isset($locality) && $locality == 'A Coruña') echo 'selected' ;?>>A Coruña</option>
                                    <option value="Álava" <?php if(isset($locality) && $locality == 'Álava') echo 'selected' ;?>>Álava</option>
                                    <option value="Albacete" <?php if(isset($locality) && $locality == 'Albacete') echo 'selected' ;?>>Albacete</option>
                                    <option value="Alicante" <?php if(isset($locality) && $locality == 'Alicante') echo 'selected' ;?>>Alicante</option>
                                    <option value="Almería" <?php if(isset($locality) && $locality == 'Almería') echo 'selected' ;?>>Almería</option>
                                    <option value="Asturias" <?php if(isset($locality) && $locality == 'Asturias') echo 'selected' ;?>>Asturias</option>
                                    <option value="Ávila" <?php if(isset($locality) && $locality == 'Ávila') echo 'selected' ;?>>Ávila</option>
                                    <option value="Badajoz" <?php if(isset($locality) && $locality == 'Badajoz') echo 'selected' ;?>>Badajoz</option>
                                    <option value="Barcelona" <?php if(isset($locality) && $locality == 'Barcelona') echo 'selected' ;?>>Barcelona</option>
                                    <option value="Burgos" <?php if(isset($locality) && $locality == 'Burgos') echo 'selected' ;?>>Burgos</option>
                                    <option value="Cáceres" <?php if(isset($locality) && $locality == 'Cáceres') echo 'selected' ;?>>Cáceres</option>
                                    <option value="Cádiz" <?php if(isset($locality) && $locality == 'Cádiz') echo 'selected' ;?>>Cádiz</option>
                                    <option value="Cantabria" <?php if(isset($locality) && $locality == 'Cantabria') echo 'selected' ;?>>Cantabria</option>
                                    <option value="Castellón" <?php if(isset($locality) && $locality == 'Castellón') echo 'selected' ;?>>Castellón</option>
                                    <option value="Ceuta" <?php if(isset($locality) && $locality == 'Ceuta') echo 'selected' ;?>>Ceuta</option>
                                    <option value="Ciudad Real" <?php if(isset($locality) && $locality == 'Ciudad Real') echo 'selected' ;?>>Ciudad Real</option>
                                    <option value="Córdoba" <?php if(isset($locality) && $locality == 'Córdoba') echo 'selected' ;?>>Córdoba</option>
                                    <option value="Cuenca" <?php if(isset($locality) && $locality == 'Cuenca') echo 'selected' ;?>>Cuenca</option>
                                    <option value="Gerona" <?php if(isset($locality) && $locality == 'Gerona') echo 'selected' ;?>>Gerona</option>
                                    <option value="Granada" <?php if(isset($locality) && $locality == 'Granada') echo 'selected' ;?>>Granada</option>
                                    <option value="Guadalajara" <?php if(isset($locality) && $locality == 'Guadalajara') echo 'selected' ;?>>Guadalajara</option>
                                    <option value="Guipúzcoa" <?php if(isset($locality) && $locality == 'Guipúzcoa') echo 'selected' ;?>>Guipúzcoa</option>
                                    <option value="Huelva" <?php if(isset($locality) && $locality == 'Huelva') echo 'selected' ;?>>Huelva</option>
                                    <option value="Huesca" <?php if(isset($locality) && $locality == 'Huesca') echo 'selected' ;?>>Huesca</option>
                                    <option value="Jaén" <?php if(isset($locality) && $locality == 'Jaén') echo 'selected' ;?>>Jaén</option>
                                    <option value="La Rioja" <?php if(isset($locality) && $locality == 'La Rioja') echo 'selected' ;?>>La Rioja</option>
                                    <option value="Las Palmas" <?php if(isset($locality) && $locality == 'Las Palmas') echo 'selected' ;?>>Las Palmas</option>
                                    <option value="León" <?php if(isset($locality) && $locality == 'León') echo 'selected' ;?>>León</option>
                                    <option value="Lleida" <?php if(isset($locality) && $locality == 'Lleida') echo 'selected' ;?>>Lleida</option>
                                    <option value="Lugo" <?php if(isset($locality) && $locality == 'Lugo') echo 'selected' ;?>>Lugo</option>
                                    <option value="Madrid" <?php if(isset($locality) && $locality == 'Madrid') echo 'selected' ;?>>Madrid</option>
                                    <option value="Málaga" <?php if(isset($locality) && $locality == 'Málaga') echo 'selected' ;?>>Málaga</option>
                                    <option value="Melilla" <?php if(isset($locality) && $locality == 'Melilla') echo 'selected' ;?>>Melilla</option>
                                    <option value="Murcia" <?php if(isset($locality) && $locality == 'Murcia') echo 'selected' ;?>>Murcia</option>
                                    <option value="Navarra" <?php if(isset($locality) && $locality == 'Navarra') echo 'selected' ;?>>Navarra</option>
                                    <option value="Orense" <?php if(isset($locality) && $locality == 'Orense') echo 'selected' ;?>>Orense</option>
                                    <option value="Palma de Mallorca" <?php if(isset($locality) && $locality == 'Palma de Mallorca') echo 'selected' ;?>>Palma de Mallorca</option>
                                    <option value="Palencia" <?php if(isset($locality) && $locality == 'Palencia') echo 'selected' ;?>>Palencia</option>
                                    <option value="Pontevedra" <?php if(isset($locality) && $locality == 'Pontevedra') echo 'selected' ;?>>Pontevedra</option>
                                    <option value="Salamanca" <?php if(isset($locality) && $locality == 'Salamanca') echo 'selected' ;?>>Salamanca</option>
                                    <option value="Santa Cruz de Tenerife" <?php if(isset($locality) && $locality == 'Santa Cruz de Tenerife') echo 'selected' ;?>>Santa Cruz de Tenerife</option>
                                    <option value="Segovia" <?php if(isset($locality) && $locality == 'Segovia') echo 'selected' ;?>>Segovia</option>
                                    <option value="Sevilla" <?php if(isset($locality) && $locality == 'Sevilla') echo 'selected' ;?>>Sevilla</option>
                                    <option value="Soria" <?php if(isset($locality) && $locality == 'Soria') echo 'selected' ;?>>Soria</option>
                                    <option value="Tarragona" <?php if(isset($locality) && $locality == 'Tarragona') echo 'selected' ;?>>Tarragona</option>
                                    <option value="Teruel" <?php if(isset($locality) && $locality == 'Teruel') echo 'selected' ;?>>Teruel</option>
                                    <option value="Toledo" <?php if(isset($locality) && $locality == 'Toledo') echo 'selected' ;?>>Toledo</option>
                                    <option value="Valencia" <?php if(isset($locality) && $locality == 'Valencia') echo 'selected' ;?>>Valencia</option>
                                    <option value="Valladolid" <?php if(isset($locality) && $locality == 'Valladolid') echo 'selected' ;?>>Valladolid</option>
                                    <option value="Vizcaya" <?php if(isset($locality) && $locality == 'Vizcaya') echo 'selected' ;?>>Vizcaya</option>
                                    <option value="Zamora" <?php if(isset($locality) && $locality == 'Zamora') echo 'selected' ;?>>Zamora</option>
                                    <option value="Zaragoza" <?php if(isset($locality) && $locality == 'Zaragoza') echo 'selected' ;?>>Zaragoza</option>
                                  </select>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Tipo de pesca</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="typeFishing">
                                    <option value="Surfcasting" <?php if(isset($typeFishing) && $typeFishing == 'Zaragoza') echo 'selected' ;?>>Surfcasting</option>
                                    <option value="Spinning" <?php if(isset($typeFishing) && $typeFishing == 'Spinning') echo 'selected' ;?>>Spinning</option>
                                    <option value="Casting" <?php if(isset($typeFishing) && $typeFishing == 'Casting') echo 'selected' ;?>>Casting</option>
                                    <option value="Casting Semipesado" <?php if(isset($typeFishing) && $typeFishing == 'Casting Semipesado') echo 'selected' ;?>>Casting Semipesado</option>
                                    <option value="Casting Pesado" <?php if(isset($typeFishing) && $typeFishing == 'Casting Pesado') echo 'selected' ;?>>Casting Pesado</option>
                                    <option value="Legering" <?php if(isset($typeFishing) && $typeFishing == 'Legering') echo 'selected' ;?>>Legering</option>
                                    <option value="Pulso" <?php if(isset($typeFishing) && $typeFishing == 'Pulso') echo 'selected' ;?>>Pulso</option>
                                    <option value="Inglesa" <?php if(isset($typeFishing) && $typeFishing == 'Inglesa') echo 'selected' ;?>>Inglesa</option>
                                    <option value="Boloñesa" <?php if(isset($typeFishing) && $typeFishing == 'Boloñesa') echo 'selected' ;?>>Boloñesa</option>
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
                                        Registro  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
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
