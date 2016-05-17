<?php

  require_once '../../../db/connectdb.php';

  global $base_url;

  session_start();

  try {

    $sql = "SELECT ussers.id AS id, ussers.name AS name, ussers.subname AS subname FROM usserfriends JOIN ussers ON usserfriends.idUsserAdd = ussers.id WHERE usserfriends.idUsser = :idUsser";
		$ps = $pdo -> prepare($sql);
    $ps -> bindValue(':idUsser', $_SESSION['id']);
		$ps -> execute();

  } catch (PDOException $e) {

    exit();

  }

  while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

    $friends [] = $row;

  }

  if ( isset($_GET['deleteFriend']) ) {

    $idUsserAdd = $_POST['idUsserAdd'];

    try {

      $sql = "DELETE FROM usserfriends WHERE idUsser = :idUsser AND idUsserAdd = :idUsserAdd";
      $ps = $pdo -> prepare($sql);
      $ps -> bindValue(':idUsser', $_SESSION['id']);
      $ps -> bindValue(':idUsserAdd', $idUsserAdd);
      $ps -> execute();

    } catch (PDOException $e) {

      exit();

    }

    header('Location: .');
    exit();

  }

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
