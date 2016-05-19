<?php

  require_once '../../../db/connectdb.php';

  if ( isset($_GET['updatePublishing']) ) {

    $id = htmlspecialchars($_POST['idPublishing'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE publishing SET deleted_at = NULL WHERE id = :idPublishing";
			  $ps = $pdo->prepare($sql);
			  $ps->bindValue(':idPublishing', $id);
			  $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

        header('Location: .');
	      exit();

    }

  }

  try{

    $sql = 'SELECT *,publishing.deleted_at AS deleted_at FROM publishing JOIN ussers ON publishing.id = ussers.id WHERE publishing.deleted_at IS NOT NULL && ussers.deleted_at IS NULL ORDER BY publishing.deleted_at DESC';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $arrayPublishingUsserDeleted[] = $row;

  }

  global $base_url;

  session_start();

  if( isset($_GET['logout']) ){

    unset($_SESSION['user']);
    unset($_SESSION['userId']);

    session_destroy();

    header("Location: ".$base_url);

    }else{

      require_once 'index.html.php';

    }

?>
