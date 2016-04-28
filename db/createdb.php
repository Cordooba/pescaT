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

?>
