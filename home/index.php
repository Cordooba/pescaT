<?php

  require_once '../db/connectdb.php';

  try{

    $sql = 'SELECT * FROM publishing JOIN ussers ON publishing.id = ussers.id WHERE publishing.deleted_at IS NULL && ussers.deleted_at IS NULL';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $arrayPublishingUsser[] = $row;

  }

  require_once 'index.html.php';

?>
