<?php

require_once 'connectdb.php';

$salt = 'G=)N3QcjgP8+C-ojEYX0|S+ortn(?C?D1d5VHc|wbT-c(rY^RvL-R m>=LzQ)^';
$pass = md5('admin'.$salt);

try{

	$sql = "INSERT INTO ussers (name, subname, email, pass, bday, sex, locality, typeFishing) VALUES ('Admin', 'Admin Admin', 'admin@admin.com','$pass', '2016-06-01', 'Hombre', 'Sevilla', 'Surfcasting');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

$pass = md5('cordobamunoz92'.$salt);

try{

	$sql = "INSERT INTO ussers (name, subname, email, pass, bday, sex, locality, typeFishing) VALUES ('Alejandro', 'Córdoba Muñoz', 'cordobamunoz92@gmail.com','$pass', '1992-08-03', 'Hombre', 'Sevilla', 'Casting');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

$pass = md5('juanjesus'.$salt);

try{

	$sql = "INSERT INTO ussers (name, subname, email, pass, bday, sex, locality, typeFishing) VALUES ('Juan Jesús', 'Delgado Paradas', 'juanjesus@gmail.com','$pass', '1988-10-23', 'Hombre', 'Sevilla', 'Spinning');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

$pass = md5('javier'.$salt);

try{

	$sql = "INSERT INTO ussers (name, subname, email, pass, bday, sex, locality, typeFishing) VALUES ('Javier', 'Angelino', 'javier@gmail.com','$pass', '1992-03-16', 'Hombre', 'Sevilla', 'Legering');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

$pass = md5('jesus'.$salt);

try{

	$sql = "INSERT INTO ussers (name, subname, email, pass, bday, sex, locality, typeFishing) VALUES ('Jesus', 'Marcos Corbacho', 'jesus@gmail.com','$pass', '1990-12-05', 'Hombre', 'Sevilla', 'Inglesa');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

$pass = md5('joaquin'.$salt);

try{

	$sql = "INSERT INTO ussers (name, subname, email, pass, bday, sex, locality, typeFishing) VALUES ('Joaquín', 'Cruz Hurtado', 'joaquin@gmail.com','$pass', '1991-01-25', 'Hombre', 'Sevilla', 'Casting Pesado');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO publishing (idUsser, title, content) VALUES ('1', 'Bienvenidos', 'Hola a todos los usuarios, quiero daros a todos la bienvenida a la aplicación web PescaT. Muchas gracias a todos por confiar en nosotros, ahora toca colgar todas tus capturas o lo que se te ocurra para que todos los usuarios podamos expresar nuestra opinión.. o incluso acompañarte en tu próxima pesca.

Buena captura !!');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO publishing (idUsser, title, content) VALUES ('2', 'La pesca cruzando la frontera de Francia', 'Esta pasada Semana Santa la cuadrilla decidimos pasarla en nuestro país vecino Francia, y como no elegiríamos un lugar para descansar a conciencia bien cerquita de un estanque. Nos dirigimos a la localidad de Ondres cerca de Baiona y nos alquilamos un bungalow para seis personas por un precio arreglado, el camping se llama “camping du laq” a 50 m del Estanque de Turq.');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO publishing (idUsser, title, content) VALUES ('3', 'Ubicación nueva', 'Según la legislación de 2014, en Bembézar está considerado Refugio de pesca todo el Embalse, excepto en la margen izquierda el tramo de 1,5 km a partir del cuerpo de presa, medido según curva de nivel correspondiente a la máxima cota de Embalse.

Para acceder a la zona de la presa, lo mejor es llegar hasta Posadas por la A-431, y aquí coger la A-3075 dirección a Villaviciosa de Córdoba hasta encontrar un desvío a la izquierda por la C0-5314 donde se señala el embalse. ');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO comments (idUsser, idPublishing, content) VALUES ('2', '1', 'Muchas Gracias');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO comments (idUsser, idPublishing, content) VALUES ('3', '1', 'Gracias, espero mucho de esta aplicación');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO comments (idUsser, idPublishing, content) VALUES ('6', '1', 'Vaya, vaya.... basuro');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO locationmaps (location, latitud, longitud) VALUES ('Punta Umbría', '37.178773', '-6.961663');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO locationmaps (location, latitud, longitud) VALUES ('El Puerto de Santa María', '36.580926', '-6.258538');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO locationmaps (location, latitud, longitud) VALUES ('Pantano del Tranco', '38.1333414', '-2.7833176');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO locationmaps (location, latitud, longitud) VALUES ('Río Nansa', '43.327584', '-4.489573');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO fishmaps (fish, fishType, latitud, longitud) VALUES ('Dorada', 'Agua salada', '35.989816', '-5.106352');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO fishmaps (fish, fishType, latitud, longitud) VALUES ('Mero', 'Agua salada', '38.953671', '0.035249');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO fishmaps (fish, fishType, latitud, longitud) VALUES ('Robalo', 'Agua salada', '43.559125', '-4.864653');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO fishmaps (fish, fishType, latitud, longitud) VALUES ('Trucha', 'Agua dulce', '41.260359', '-6.270989');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('07', 'Abril', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('14', 'Abril', '2016', 'Cuarto Creciente');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('22', 'Abril', '2016', 'Luna Llena');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('30', 'Abril', '2016', 'Cuarto Menguante');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('06', 'Mayo', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('13', 'Mayo', '2016', 'Cuarto Creciente');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('21', 'Mayo', '2016', 'Luna Llena');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('29', 'Mayo', '2016', 'Cuarto Menguante');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('05', 'Junio', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('12', 'Junio', '2016', 'Cuarto Creciente');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('20', 'Junio', '2016', 'Luna Llena');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('27', 'Junio', '2016', 'Cuarto Menguante');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('04', 'Julio', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('12', 'Julio', '2016', 'Cuarto Creciente');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('19', 'Julio', '2016', 'Luna Llena');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('26', 'Julio', '2016', 'Cuarto Menguante');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('02', 'Agosto', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('10', 'Agosto', '2016', 'Cuarto Creciente');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('18', 'Agosto', '2016', 'Luna Llena');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('25', 'Agosto', '2016', 'Cuarto Menguante');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('01', 'Septiembre', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('09', 'Septiembre', '2016', 'Cuarto Creciente');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('16', 'Septiembre', '2016', 'Luna Llena');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('23', 'Septiembre', '2016', 'Cuarto Menguante');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('01', 'Octubre', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('09', 'Octubre', '2016', 'Cuarto Creciente');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('16', 'Octubre', '2016', 'Luna Llena');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('22', 'Octubre', '2016', 'Cuarto Menguante');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('30', 'Octubre', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('07', 'Noviembre', '2016', 'Cuarto Creciente');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('14', 'Noviembre', '2016', 'Luna Llena');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('21', 'Noviembre', '2016', 'Cuarto Menguante');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('29', 'Noviembre', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('07', 'Diciembre', '2016', 'Cuarto Creciente');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('14', 'Diciembre', '2016', 'Luna Llena');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('21', 'Diciembre', '2016', 'Cuarto Menguante');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO moon (day, month, year, status) VALUES ('29', 'Diciembre', '2016', 'Luna Nueva');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Océano Atlántico', '01', 'Mayo', '2016', '06h01', 'BM', '1.35m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Océano Atlántico', '01', 'Mayo', '2016', '12h29', 'PM', '3.20m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Océano Atlántico', '01', 'Mayo', '2016', '18h39', 'BM', '1.45m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Océano Atlántico', '02', 'Mayo', '2016', '00h55', 'PM', '3.45m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Océano Atlántico', '02', 'Mayo', '2016', '07h16', 'BM', '1.15m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Océano Atlántico', '02', 'Mayo', '2016', '13h43', 'PM', '3.40m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Océano Atlántico', '02', 'Mayo', '2016', '19h48', 'BM', '1.20m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Océano Atlántico', '03', 'Mayo', '2016', '02h04', 'PM', '3.65m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Océano Atlántico', '03', 'Agosto', '2016', '05h38', 'PM', '4.05m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Mar Mediterráneo', '01', 'Mayo', '2016', '05h20', 'BM', '0.35m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Mar Mediterráneo', '01', 'Mayo', '2016', '12h08', 'PM', '0.55m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Mar Mediterráneo', '01', 'Mayo', '2016', '18h00', 'BM', '0.25m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Mar Mediterráneo', '10', 'Mayo', '2016', '00h25', 'BM', '0.20m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES ('Mar Mediterráneo', '03', 'Agosto', '2016', '00h25', 'BM', '1.20m');";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

?>
