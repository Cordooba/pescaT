<?php

  require_once '../../../db/connectdb.php';

  global $base_url;

  session_start();

  try{

    $sql = 'SELECT  messages.id, messages.subject, messages.created_at, messages.deleted_at, ussers.name FROM messages JOIN ussers ON messages.idUsser=ussers.id WHERE messages.idUsserTo = :id AND messages.deleted_at IS NOT NULL';
    $ps = $pdo->prepare($sql);
    $ps->bindValue(':id', $_SESSION['id']);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $messagesDeleted[] = $row;

  }


  if( isset($_GET['logout']) ){

    unset($_SESSION['id']);
    unset($_SESSION['name']);
    unset($_SESSION['subname']);
    unset($_SESSION['email']);
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
