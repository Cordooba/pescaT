<?php

  require_once '../../db/connectdb.php';

  if ( isset($_GET['deleteLocation']) ) {

    $id = htmlspecialchars($_POST['idLocation'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE locationmaps SET deleted_at = NOW() WHERE id = :idLocation";
			  $ps = $pdo->prepare($sql);
			  $ps->bindValue(':idLocation', $id);
			  $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

        header('Location: .');
	      exit();

    }

  }

  try{

    $sql = 'SELECT * FROM locationmaps WHERE deleted_at IS NULL';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $locations[] = $row;

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
