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

  try{

    $sql = 'SELECT * FROM fishmaps WHERE deleted_at IS NULL';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $fishes[] = $row;

  }

  require_once 'index.html.php';

?>
