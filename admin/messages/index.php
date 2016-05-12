<?php

  require_once '../../db/connectdb.php';

  global $base_url;

  session_start();

  if (isset($_GET['deleteMessage'])) {

    $id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE messages SET deleted_at = NOW() WHERE id = :idMessage";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(':idMessage', $id);
        $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

        header('Location: .');
        exit();

    }

  }

  try{

    $sql = 'SELECT * FROM messages WHERE idUsserTo = :id AND deleted_at IS NULL';
    $ps = $pdo->prepare($sql);
    $ps->bindValue(':id', $_SESSION['userId']);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $messagesAdmin[] = $row;

  }

  if( isset($_GET['logout']) ){

    unset($_SESSION['user']);
    unset($_SESSION['userId']);

    session_destroy();

    header("Location: ".$base_url);

    }else{

      require_once 'index.html.php';

    }

?>
