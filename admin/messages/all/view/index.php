<?php

  require_once '../../../../db/connectdb.php';

  session_start();

  global $base_url;

  $idMessage = $_GET['id'];

  if ( is_numeric($idMessage) ) {

    try{

      $sql = 'SELECT messages.subject, messages.content, messages.created_at, ussers.name FROM messages JOIN ussers ON messages.idUsser=ussers.id WHERE messages.id = :idMessage AND messages.deleted_at IS NULL';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':idMessage', $idMessage);
      $ps->execute();

    }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

    }

    $message = $ps->fetch(PDO::FETCH_ASSOC);

  }

  if( isset($_GET['logoutUsser']) ){

    unset($_SESSION['user']);
    unset($_SESSION['userId']);

    session_destroy();

    header("Location: ".$base_url);

    }else{

      require_once 'index.html.php';

      exit();

    }

?>
