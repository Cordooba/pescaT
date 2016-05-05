<?php

  require_once '../../db/connectdb.php';

  global $base_url;

  $idPublishing = $_GET['id'];

  if ( is_numeric($idPublishing) ) {

    try{

      $sql = 'SELECT * FROM publishing WHERE id = :idPublishing AND deleted_at IS NULL';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':idPublishing', $idPublishing);
      $ps->execute();

    }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

    }

    $publishing = $ps->fetch(PDO::FETCH_ASSOC);

  }

  session_start();

  if( isset($_GET['logout']) ){

    unset($_SESSION['user']);

    session_destroy();

    header("Location: ".$base_url);

    exit();

    }else{

      require_once 'index.html.php';

      exit();

    }

?>
