<?php

  require_once '../../db/connectdb.php';

  if ( isset($_GET['deleteFish']) ) {

    $id = htmlspecialchars($_POST['idFish'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE fishmaps SET deleted_at = NOW() WHERE id = :idFish";
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

  if(isset($_GET['fishAsc'])){

    $sql = 'SELECT * FROM fishmaps WHERE deleted_at IS NULL ORDER BY fish ASC';

  }elseif(isset($_GET['fishDesc'])){

    $sql = 'SELECT * FROM fishmaps WHERE deleted_at IS NULL ORDER BY fish DESC';

  }else{

    $sql = 'SELECT * FROM fishmaps WHERE deleted_at IS NULL ORDER BY created_at DESC';

  }

  try{

    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $fishes[] = $row;

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
