<?php

  require_once '../../db/connectdb.php';

  if ( isset($_GET['deletePublishing']) ) {

    $id = htmlspecialchars($_POST['idPublishing'], ENT_QUOTES, 'UTF-8');

    if ( is_numeric($id) ) {

      try {

        $sql = "UPDATE publishing SET deleted_at = NOW() WHERE id = :idPublishing";
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

  if (isset($_GET['ussersAsc'])) {

    $sql = 'SELECT *, publishing.id AS idPublishing, publishing.idUsser AS idUsuario, publishing.created_at AS fecha FROM publishing JOIN ussers ON publishing.idUsser = ussers.id WHERE publishing.deleted_at IS NULL && ussers.deleted_at IS NULL ORDER BY ussers.name ASC';

  }elseif(isset($_GET['ussersDesc'])){

    $sql = 'SELECT *, publishing.id AS idPublishing, publishing.idUsser AS idUsuario, publishing.created_at AS fecha FROM publishing JOIN ussers ON publishing.idUsser = ussers.id WHERE publishing.deleted_at IS NULL && ussers.deleted_at IS NULL ORDER BY ussers.name DESC';

  }elseif(isset($_GET['idAsc'])){

    $sql = 'SELECT *, publishing.id AS idPublishing, publishing.idUsser AS idUsuario, publishing.created_at AS fecha FROM publishing JOIN ussers ON publishing.idUsser = ussers.id WHERE publishing.deleted_at IS NULL && ussers.deleted_at IS NULL ORDER BY publishing.id ASC';

  }elseif(isset($_GET['idDesc'])){

    $sql = 'SELECT *, publishing.id AS idPublishing, publishing.idUsser AS idUsuario, publishing.created_at AS fecha FROM publishing JOIN ussers ON publishing.idUsser = ussers.id WHERE publishing.deleted_at IS NULL && ussers.deleted_at IS NULL ORDER BY publishing.id DESC';

  }else{

    $sql = 'SELECT *, publishing.id AS idPublishing, publishing.idUsser AS idUsuario, publishing.created_at AS fecha FROM publishing JOIN ussers ON publishing.idUsser = ussers.id WHERE publishing.deleted_at IS NULL && ussers.deleted_at IS NULL ORDER BY publishing.created_at DESC';

  }

  try{

    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

  die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $arrayPublishingUsser[] = $row;

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
