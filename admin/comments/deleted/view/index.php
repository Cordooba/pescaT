<?php

  require_once '../../../../db/connectdb.php';

  $idComment = $_GET['id'];

  if ( is_numeric($idComment) ) {

    try{

      $sql = 'SELECT * FROM comments WHERE id = :idComment';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':idComment', $idComment);
      $ps->execute();

    }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

    }

    $comment = $ps->fetch(PDO::FETCH_ASSOC);

    require_once 'index.html.php';

  }

?>
