<?php

  require_once '../../../db/connectdb.php';

  if ( isset($_GET['updateFish']) ) {

    $id = htmlspecialchars($_POST['idFish'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE fishmaps SET deleted_at = NULL WHERE id = :idFish";
			  $ps = $pdo->prepare($sql);
			  $ps->bindValue(':idFish', $id);
			  $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

        header('Location: .');
	      exit();

    }

  }

  try{

    $sql = 'SELECT * FROM fishmaps WHERE deleted_at IS NOT NULL ORDER BY deleted_at DESC';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $fishesDeleted[] = $row;

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
