<?php

require_once 'connectdb.php';

try{

	$sql = "CREATE TABLE ussers (
		id 			       INT AUTO_INCREMENT PRIMARY KEY,
		name 		       VARCHAR(25) NOT NULL,
    subname 		   VARCHAR(50) NOT NULL,
    email 		     VARCHAR(50) NOT NULL,
    pass           VARCHAR(50) NOT NULL,
    bday           DATE NOT NULL,
    sex            ENUM('Hombre', 'Mujer') NOT NULL,
    locality       VARCHAR(50) NOT NULL,
    typeFishing    ENUM('Surfcasting','Spinning','Casting','Casting Semipesado','Casting Pesado','Legering','Pulso','Inglesa','Boloñesa') NOT NULL,
		created_at	   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		deleted_at  	 TIMESTAMP NULL DEFAULT NULL
	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'ussers' : ". $e->getMessage());

}

try{

	$sql = "CREATE TABLE logins (
		id 			       	 				INT AUTO_INCREMENT PRIMARY KEY,
		idUsser			  	 				INT NOT NULL,
		httpUserAgent   				VARCHAR(250) NOT NULL,
		serverSoftware					VARCHAR(100) NOT NULL,
		serverProtocol   				VARCHAR(25) NOT NULL,
		httpAcceptLanguage			VARCHAR(25) NOT NULL,
		remoteAddr							VARCHAR(100) NOT NULL,
		created_at	   					TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		deleted_at  	 					TIMESTAMP NULL DEFAULT NULL,

		FOREIGN KEY (idUsser) REFERENCES ussers (id)
						ON UPDATE CASCADE
						ON DELETE SET NULL
	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'logins' : ". $e->getMessage());

}

try{

	$sql = "CREATE TABLE publishing (
		id 			       	 				INT AUTO_INCREMENT PRIMARY KEY,
		idUsser			  	 				INT NOT NULL,
		title										VARCHAR(50) NOT NULL,
		content 								LONGTEXT NOT NULL,
		created_at	   					TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		deleted_at  	 					TIMESTAMP NULL DEFAULT NULL,

		FOREIGN KEY (idUsser) REFERENCES ussers (id)
						ON UPDATE CASCADE
						ON DELETE SET NULL
	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'publishing' : ". $e->getMessage());

}

try{

	$sql = "CREATE TABLE usserFriends (
		id 			       	 				INT AUTO_INCREMENT PRIMARY KEY,
		idUsser			  	 				INT NOT NULL,
		idUsserAdd							INT NOT NULL,
		created_at	   					TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		deleted_at  	 					TIMESTAMP NULL DEFAULT NULL,

		FOREIGN KEY (idUsser) REFERENCES ussers (id)
						ON UPDATE CASCADE
						ON DELETE SET NULL
	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'usserFriends' : ". $e->getMessage());

}

try{

	$sql = "CREATE TABLE favorites (
		id 			       	 				INT AUTO_INCREMENT PRIMARY KEY,
		idUsser			  	 				INT NOT NULL,
		idPublishing						INT NOT NULL,
		created_at	   					TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		deleted_at  	 					TIMESTAMP NULL DEFAULT NULL,

		FOREIGN KEY (idUsser) REFERENCES ussers (id)
						ON UPDATE CASCADE
						ON DELETE SET NULL,
		FOREIGN KEY (idPublishing) REFERENCES publishing (id)
						ON UPDATE CASCADE
						ON DELETE SET NULL

	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'favorites' : ". $e->getMessage());

}

try{

	$sql = "CREATE TABLE comments (
		id 			       	 				INT AUTO_INCREMENT PRIMARY KEY,
		idUsser			  	 				INT NOT NULL,
		idPublishing						INT NOT NULL,
		content 								LONGTEXT NOT NULL,
		created_at	   					TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		updated_at  	 					TIMESTAMP NULL DEFAULT NULL,
		deleted_at  	 					TIMESTAMP NULL DEFAULT NULL,

		FOREIGN KEY (idUsser) REFERENCES ussers (id)
						ON UPDATE CASCADE
						ON DELETE SET NULL,
		FOREIGN KEY (idPublishing) REFERENCES publishing (id)
						ON UPDATE CASCADE
						ON DELETE SET NULL
	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'comments' : ". $e->getMessage());

}

try{

	$sql = "CREATE TABLE locationMaps (
		id 			       INT AUTO_INCREMENT PRIMARY KEY,
		location			 VARCHAR(50) NOT NULL,
		latitud				 DECIMAL(10,8) NOT NULL,
		longitud			 DECIMAL(11,8) NOT NULL,
		created_at	   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		deleted_at  	 TIMESTAMP NULL DEFAULT NULL
	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'locationMaps' : ". $e->getMessage());

}

try{

	$sql = "CREATE TABLE fishMaps (
		id 			       INT AUTO_INCREMENT PRIMARY KEY,
		fish					 VARCHAR(50) NOT NULL,
		fishType 			 ENUM('Agua dulce','Agua salada') NOT NULL,
		latitud				 DECIMAL(10,8) NOT NULL,
		longitud			 DECIMAL(11,8) NOT NULL,
		created_at	   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		deleted_at  	 TIMESTAMP NULL DEFAULT NULL
	) DEFAULT CHARACTER SET UTF8 ENGINE=InnoDB";

	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec($sql);

}catch(PDOException $e){

		die("No se ha podido crear la tabla 'fishMaps' : ". $e->getMessage());

}

?>
