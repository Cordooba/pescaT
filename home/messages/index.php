<?php

  require_once '../../db/connectdb.php';

  global $base_url;

  session_start();

  if ( isset($_GET['deleteMessage']) ) {

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

  if( isset($_GET['logoutUsser']) ){

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

      try {

        $sql = 'SELECT * FROM messages WHERE idUsserTo = :id AND deleted_at IS NULL';

        $ps = $pdo->prepare($sql);
        $ps->bindValue(':id', $_SESSION['id']);
        $ps->execute();

      } catch (PDOException $e) {

        die("No se ha podido extraer información de la base de datos:". $e->getMessage());

      }

      while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

        $messages[] = $row;

      }

      require_once 'index.html.php';

      exit();

    }

?>
