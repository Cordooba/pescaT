<?php

  require_once '../db/connectdb.php';

  global $base_url;

  try{

    $sql = 'SELECT *, publishing.created_at AS fecha FROM publishing JOIN ussers ON publishing.id = ussers.id WHERE publishing.deleted_at IS NULL && ussers.deleted_at IS NULL';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $arrayPublishingUsser[] = $row;

  }

  session_start();

  if( isset($_GET['logout']) ){

    unset($_SESSION['user']);

    session_destroy();

    header("Location: ".$base_url);

    }else{

        require_once 'index.html.php';

    }


?>
