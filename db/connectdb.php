<?php

define('__ROOT__', dirname(dirname(__FILE__)));

require_once(__ROOT__.'/app/datadb.php');

$base_url = "http://localhost:8080/pescat";

try{

	$pdo = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES utf8');

}catch(PDOException $e){

	die('Error de conexión a la base de datos: '. $e->getMessage());

}

?>
