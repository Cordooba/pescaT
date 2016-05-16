<?php

  require_once '../../db/connectdb.php';

  global $base_url;

  session_start();

  if ( isset($_GET['addFriend']) ) {

    $idUsserToAdd = $_POST['idUsser'];

    try {

      $sql = "INSERT INTO usserfriends (idUsser, idUsserAdd) VALUES (:idUsser, :idUsserToAdd)";

      $ps = $pdo->prepare($sql);

      $ps->bindValue(':idUsser', $_SESSION['id']);
      $ps->bindValue(':idUsserToAdd', $idUsserToAdd);

      $ps->execute();

    }catch (PDOException $e) {

    }

  }

  if ( isset($_GET['logoutUsser']) ) {

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

      try {

        $sql = 'SELECT * FROM ussers WHERE id != :id AND deleted_at IS NULL';

        $ps = $pdo->prepare($sql);
        $ps->bindValue(':id', $_SESSION['id']);
        $ps->execute();

      } catch (PDOException $e) {

        die("No se ha podido extraer información de la base de datos:". $e->getMessage());

      }

      while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

        $ussers[] = $row;

      }

      require_once 'index.html.php';

      exit();

    }

?>
