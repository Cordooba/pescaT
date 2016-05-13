<?php

  require_once '../../db/connectdb.php';

  global $base_url;

  session_start();

  try {

    $sql = "SELECT * FROM publishing WHERE idUsser = :idUsser AND deleted_at IS NULL";
		$ps = $pdo -> prepare($sql);
    $ps -> bindValue(':idUsser', $_SESSION['id']);
		$ps -> execute();

  } catch (PDOException $e) {

    exit();

  }

  while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

    $publishingList [] = $row;

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

      require_once 'index.html.php';

      exit();

    }

?>
