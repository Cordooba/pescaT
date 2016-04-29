<?php

  require_once '../../../db/connectdb.php';

  if ( isset($_GET['addPublishing']) ) {

    $title =
    $content =
    $idUsser =

  }

  try {

    $sql = 'SELECT * FROM ussers WHERE deleted_at IS NULL';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  } catch (PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $ussers[] = $row;

  }


  require_once 'index.html.php';

?>
