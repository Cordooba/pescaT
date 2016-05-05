<?php

  require_once '../../db/connectdb.php';

  try{

    $sql = 'SELECT * FROM locationmaps WHERE deleted_at IS NULL';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $locations[] = $row;

  }

  try{

    $sql = 'SELECT * FROM fishmaps WHERE deleted_at IS NULL';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $fishes[] = $row;

  }

  require_once 'index.html.php';

?>
