<?php

  require_once '../../../../db/connectdb.php';

  global $base_url;

  $idUsser = $_GET['id'];

  if ( is_numeric($idUsser) ) {

    try{

      $sql = 'SELECT * FROM ussers WHERE id = :idUsser';

      $ps = $pdo->prepare($sql);

      $ps->bindValue(':idUsser', $idUsser);

      $ps->execute();

    }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

    }

    $usser = $ps->fetch(PDO::FETCH_ASSOC);

  }

  try{

    $sql = 'SELECT * FROM publishing WHERE idUsser = :idUsser';

    $ps = $pdo->prepare($sql);

    $ps->bindValue(':idUsser', $idUsser);

    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $publishingsUsser[] = $row;

  }

  session_start();

  if( isset($_GET['logoutUsser']) ){

    unset($_SESSION['id']);
    unset($_SESSION['name']);
    unset($_SESSION['subname']);
    unset($_SESSION['email']);
    unset($_SESSION['pass']);
    unset($_SESSION['bday']);
    unset($_SESSION['sex']);
    unset($_SESSION['locality']);
    unset($_SESSION['typeFishing']);

    session_destroy();

    header("Location: ".$base_url);

    exit();

    }else{

      require_once 'index.html.php';

      exit();

    }

?>
