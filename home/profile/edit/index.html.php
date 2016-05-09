<?php

  require_once '../../../templates/headerUsserXxxXxx.php';
  require_once '../../../db/connectdb.php';

  global $base_url;

  if( !isset($_SESSION['id']) && !isset($_SESSION['name']) && !isset($_SESSION['subname']) && !isset($_SESSION['email']) && !isset($_SESSION['bday']) && !isset($_SESSION['sex']) && !isset($_SESSION['locality']) && !isset($_SESSION['typeFishing']) ){

        header("Location: ".$base_url);
        exit();

    }

?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center"><h1><strong>Editar perfil</strong></h1></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="?updateUsser">

                      <div class="form-group">

                          <div class="col-md-6">
                              <input type="hidden" class="form-control" name="id" value="<?php if(isset($_SESSION['id'])) echo $_SESSION['id'];?>" >

                          </div>
                      </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name'];?>" >

                                <?php if ( isset($errores['name']) ) : ?>
                                  <p class="text-danger"><?=$errores['name']?></p>
                                <?php endif ; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Apellidos</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="subname" value="<?php if(isset($_SESSION['subname'])) echo $_SESSION['subname'];?>">

                                <?php if ( isset($errores['subname']) ) : ?>
                                  <p class="text-danger"><?=$errores['subname']?></p>
                                <?php endif ; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Correo electrónico</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>">

                                <?php if ( isset($errores['email']) ) : ?>
                                  <p class="text-danger"><?=$errores['email']?></p>
                                <?php endif ; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Fecha de nacimiento</label>

                            <div class="col-md-6 form-inline">
                              <input type="date" name="bday"  value="<?php if(isset($_SESSION['bday'])) echo $_SESSION['bday'];?>"/>

                              <?php if ( isset($errores['bday']) ) : ?>
                                <p class="text-danger"><?=$errores['bday']?></p>
                              <?php endif ; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Sexo</label>

                            <div class="col-md-6">
                              <input type="radio" name="sex" value="Hombre" <?php if(isset($_SESSION['sex']) && $_SESSION['sex'] == 'Hombre') echo 'checked' ;?>>Hombre
                              <input type="radio" name="sex" value="Mujer" <?php if(isset($_SESSION['sex']) && $_SESSION['sex'] == 'Mujer') echo 'checked' ;?>>Mujer

                              <?php if ( isset($errores['sex']) ) : ?>
                                <p class="text-danger"><?=$errores['sex']?></p>
                              <?php endif ; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Localidad</label>

                            <div class="col-md-6">
                              <select class="form-control" name="locality">
                                <option value="A Coruña" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'A Coruña') echo 'selected' ;?>>A Coruña</option>
                                <option value="Álava" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Álava') echo 'selected' ;?>>Álava</option>
                                <option value="Albacete" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Albacete') echo 'selected' ;?>>Albacete</option>
                                <option value="Alicante" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Alicante') echo 'selected' ;?>>Alicante</option>
                                <option value="Almería" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Almería') echo 'selected' ;?>>Almería</option>
                                <option value="Asturias" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Asturias') echo 'selected' ;?>>Asturias</option>
                                <option value="Ávila" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Ávila') echo 'selected' ;?>>Ávila</option>
                                <option value="Badajoz" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Badajoz') echo 'selected' ;?>>Badajoz</option>
                                <option value="Barcelona" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Barcelona') echo 'selected' ;?>>Barcelona</option>
                                <option value="Burgos" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Burgos') echo 'selected' ;?>>Burgos</option>
                                <option value="Cáceres" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Cáceres') echo 'selected' ;?>>Cáceres</option>
                                <option value="Cádiz" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Cádiz') echo 'selected' ;?>>Cádiz</option>
                                <option value="Cantabria" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Cantabria') echo 'selected' ;?>>Cantabria</option>
                                <option value="Castellón" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Castellón') echo 'selected' ;?>>Castellón</option>
                                <option value="Ceuta" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Ceuta') echo 'selected' ;?>>Ceuta</option>
                                <option value="Ciudad Real" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Ciudad Real') echo 'selected' ;?>>Ciudad Real</option>
                                <option value="Córdoba" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Córdoba') echo 'selected' ;?>>Córdoba</option>
                                <option value="Cuenca" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Cuenca') echo 'selected' ;?>>Cuenca</option>
                                <option value="Gerona" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Gerona') echo 'selected' ;?>>Gerona</option>
                                <option value="Granada" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Granada') echo 'selected' ;?>>Granada</option>
                                <option value="Guadalajara" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Guadalajara') echo 'selected' ;?>>Guadalajara</option>
                                <option value="Guipúzcoa" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Guipúzcoa') echo 'selected' ;?>>Guipúzcoa</option>
                                <option value="Huelva" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Huelva') echo 'selected' ;?>>Huelva</option>
                                <option value="Huesca" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Huesca') echo 'selected' ;?>>Huesca</option>
                                <option value="Jaén" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Jaén') echo 'selected' ;?>>Jaén</option>
                                <option value="La Rioja" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'La Rioja') echo 'selected' ;?>>La Rioja</option>
                                <option value="Las Palmas" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Las Palmas') echo 'selected' ;?>>Las Palmas</option>
                                <option value="León" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'León') echo 'selected' ;?>>León</option>
                                <option value="Lleida" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Lleida') echo 'selected' ;?>>Lleida</option>
                                <option value="Lugo" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Lugo') echo 'selected' ;?>>Lugo</option>
                                <option value="Madrid" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Madrid') echo 'selected' ;?>>Madrid</option>
                                <option value="Málaga" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Málaga') echo 'selected' ;?>>Málaga</option>
                                <option value="Melilla" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Melilla') echo 'selected' ;?>>Melilla</option>
                                <option value="Murcia" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Murcia') echo 'selected' ;?>>Murcia</option>
                                <option value="Navarra" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Navarra') echo 'selected' ;?>>Navarra</option>
                                <option value="Orense" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Orense') echo 'selected' ;?>>Orense</option>
                                <option value="Palma de Mallorca" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Palma de Mallorca') echo 'selected' ;?>>Palma de Mallorca</option>
                                <option value="Palencia" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Palencia') echo 'selected' ;?>>Palencia</option>
                                <option value="Pontevedra" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Pontevedra') echo 'selected' ;?>>Pontevedra</option>
                                <option value="Salamanca" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Salamanca') echo 'selected' ;?>>Salamanca</option>
                                <option value="Santa Cruz de Tenerife" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Santa Cruz de Tenerife') echo 'selected' ;?>>Santa Cruz de Tenerife</option>
                                <option value="Segovia" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Segovia') echo 'selected' ;?>>Segovia</option>
                                <option value="Sevilla" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Sevilla') echo 'selected' ;?>>Sevilla</option>
                                <option value="Soria" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Soria') echo 'selected' ;?>>Soria</option>
                                <option value="Tarragona" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Tarragona') echo 'selected' ;?>>Tarragona</option>
                                <option value="Teruel" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Teruel') echo 'selected' ;?>>Teruel</option>
                                <option value="Toledo" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Toledo') echo 'selected' ;?>>Toledo</option>
                                <option value="Valencia" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Valencia') echo 'selected' ;?>>Valencia</option>
                                <option value="Valladolid" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Valladolid') echo 'selected' ;?>>Valladolid</option>
                                <option value="Vizcaya" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Vizcaya') echo 'selected' ;?>>Vizcaya</option>
                                <option value="Zamora" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Zamora') echo 'selected' ;?>>Zamora</option>
                                <option value="Zaragoza" <?php if(isset($_SESSION['locality']) && $_SESSION['locality'] == 'Zaragoza') echo 'selected' ;?>>Zaragoza</option>
                              </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Tipo de pesca</label>

                            <div class="col-md-6">
                              <select class="form-control" name="typeFishing">
                                <option value="Surfcasting" <?php if(isset($_SESSION['typeFishing']) && $_SESSION['typeFishing'] == 'Zaragoza') echo 'selected' ;?>>Surfcasting</option>
                                <option value="Spinning" <?php if(isset($_SESSION['typeFishing']) && $_SESSION['typeFishing'] == 'Spinning') echo 'selected' ;?>>Spinning</option>
                                <option value="Casting" <?php if(isset($_SESSION['typeFishing']) && $_SESSION['typeFishing'] == 'Casting') echo 'selected' ;?>>Casting</option>
                                <option value="Casting Semipesado" <?php if(isset($_SESSION['typeFishing']) && $_SESSION['typeFishing'] == 'Casting Semipesado') echo 'selected' ;?>>Casting Semipesado</option>
                                <option value="Casting Pesado" <?php if(isset($_SESSION['typeFishing']) && $_SESSION['typeFishing'] == 'Casting Pesado') echo 'selected' ;?>>Casting Pesado</option>
                                <option value="Legering" <?php if(isset($_SESSION['typeFishing']) && $_SESSION['typeFishing'] == 'Legering') echo 'selected' ;?>>Legering</option>
                                <option value="Pulso" <?php if(isset($_SESSION['typeFishing']) && $_SESSION['typeFishing'] == 'Pulso') echo 'selected' ;?>>Pulso</option>
                                <option value="Inglesa" <?php if(isset($_SESSION['typeFishing']) && $_SESSION['typeFishing'] == 'Inglesa') echo 'selected' ;?>>Inglesa</option>
                                <option value="Boloñesa" <?php if(isset($_SESSION['typeFishing']) && $_SESSION['typeFishing'] == 'Boloñesa') echo 'selected' ;?>>Boloñesa</option>
                              </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar  <i class="fa fa-check fa-2x" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
