<?php

  require_once '../../../db/connectdb.php';

  global $base_url;

  session_start();

  $idPublishing = $_GET['id'];

  try {

			$sql = "SELECT comments.content AS content, comments.created_at AS created_at, ussers.name AS name, ussers.email AS email  FROM comments JOIN ussers ON comments.idUsser=ussers.id WHERE comments.idPublishing = :idPublishing";

			$ps = $pdo->prepare($sql);
			$ps->bindValue(':idPublishing', $idPublishing);
			$ps->execute();

	  } catch (PDOException $e) {

			die("Error en la base de datos: ". $e->getMessage() );

	  }

    while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

     $commentsPublishing[] = $row;

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
