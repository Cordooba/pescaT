<?php

  require_once '../../../db/connectdb.php';

  if ( isset($_GET['updateFavorite']) ) {

    $id = htmlspecialchars($_POST['idFavorite'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE favorites SET deleted_at = NULL WHERE id = :idFavorite";
        $ps = $pdo->prepare($sql);
        $ps->bindValue(':idFavorite', $id);
        $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

        header('Location: .');
        exit();

    }

  }

  try{

    $sql = 'SELECT favorites.id, favorites.created_at AS fecha, ussers.name, ussers.email, publishing.title FROM favorites JOIN ussers ON favorites.idUsser = ussers.id JOIN publishing ON favorites.idPublishing = publishing.id WHERE favorites.deleted_at IS NOT NULL && publishing.deleted_at IS NULL && ussers.deleted_at IS NULL ORDER BY favorites.id';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $favoritesDeleted [] = $row;

  }

  global $base_url;

  session_start();

  if( isset($_GET['logout']) ){

    unset($_SESSION['user']);

    session_destroy();

    header("Location: ".$base_url);

    }else{

      require_once 'index.html.php';

    }

?>
