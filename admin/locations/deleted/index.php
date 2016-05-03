<?php

  require_once '../../../db/connectdb.php';

  if ( isset($_GET['updateLocation']) ) {

    $id = htmlspecialchars($_POST['idLocation'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE locationmaps SET deleted_at = NULL WHERE id = :idLocation";
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

    $sql = 'SELECT * FROM locationmaps WHERE deleted_at IS NOT NULL';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $locationsDeleted[] = $row;

  }

  require_once 'index.html.php';

?>
