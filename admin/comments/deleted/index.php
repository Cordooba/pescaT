<?php

  require_once '../../../db/connectdb.php';

  if ( isset($_GET['updateComment']) ) {

    $id = htmlspecialchars($_POST['idComment'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE comments SET deleted_at = NULL WHERE id = :idComment";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(':idComment', $id);
        $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

        header('Location: .');
        exit();

    }

  }

  try{

    $sql = 'SELECT comments.id, comments.deleted_at AS fecha, ussers.name, ussers.email, publishing.title FROM comments JOIN ussers ON comments.idUsser = ussers.id JOIN publishing ON comments.idPublishing = publishing.id WHERE comments.deleted_at IS NOT NULL && publishing.deleted_at IS NULL && ussers.deleted_at IS NULL ORDER BY comments.id';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $commentsDeleted [] = $row;

  }

  global $base_url;

  session_start();

  if( isset($_GET['logout']) ){

    unset($_SESSION['user']);

    session_destroy();

    header("Location: ".$base_url);

    }else{

      require_once 'index.html.php';

    }

?>
