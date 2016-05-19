<?php

  require_once '../../db/connectdb.php';

  if ( isset($_GET['deleteFavorite']) ) {

    $id = htmlspecialchars($_POST['idFavorite'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE favorites SET deleted_at = NOW() WHERE id = :idFavorite";
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

  if (isset($_GET['ussersAsc'])) {

    $sql = 'SELECT favorites.id, favorites.created_at AS fecha, ussers.name, ussers.email, publishing.title FROM favorites JOIN publishing ON favorites.idPublishing=publishing.id JOIN ussers ON favorites.idUsser=ussers.id WHERE favorites.deleted_at IS NULL AND ussers.deleted_at IS NULL AND publishing.created_at IS NOT NULL ORDER BY ussers.name ASC';

  }elseif(isset($_GET['ussersDesc'])){

    $sql = 'SELECT favorites.id, favorites.created_at AS fecha, ussers.name, ussers.email, publishing.title FROM favorites JOIN publishing ON favorites.idPublishing=publishing.id JOIN ussers ON favorites.idUsser=ussers.id WHERE favorites.deleted_at IS NULL AND ussers.deleted_at IS NULL AND publishing.created_at IS NOT NULL ORDER BY ussers.name DESC';

  }elseif(isset($_GET['publishingAsc'])){

    $sql = 'SELECT favorites.id, favorites.created_at AS fecha, ussers.name, ussers.email, publishing.title FROM favorites JOIN publishing ON favorites.idPublishing=publishing.id JOIN ussers ON favorites.idUsser=ussers.id WHERE favorites.deleted_at IS NULL AND ussers.deleted_at IS NULL AND publishing.created_at IS NOT NULL ORDER BY publishing.title ASC';

  }elseif(isset($_GET['publishingDesc'])){

    $sql = 'SELECT favorites.id, favorites.created_at AS fecha, ussers.name, ussers.email, publishing.title FROM favorites JOIN publishing ON favorites.idPublishing=publishing.id JOIN ussers ON favorites.idUsser=ussers.id WHERE favorites.deleted_at IS NULL AND ussers.deleted_at IS NULL AND publishing.created_at IS NOT NULL ORDER BY publishing.title DESC';

  }else{

    $sql = 'SELECT favorites.id, favorites.created_at AS fecha, ussers.name, ussers.email, publishing.title FROM favorites JOIN publishing ON favorites.idPublishing=publishing.id JOIN ussers ON favorites.idUsser=ussers.id WHERE favorites.deleted_at IS NULL AND ussers.deleted_at IS NULL AND publishing.created_at IS NOT NULL ORDER BY favorites.created_at DESC';

  }

  try{

    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $favorites[] = $row;

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
