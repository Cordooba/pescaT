<?php

  require_once '../../db/connectdb.php';

  session_start();

  global $base_url;

  if ($_POST) {

    $idPublishing = htmlspecialchars($_POST['idPublishing'], ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
    $errores = [];

    if ( $content == "" ) {

      $errores['content'] = "Debes introducir contenido para un comentario.";

    }

    if ( empty($errores) ) {

      try {

        $sql = "INSERT INTO comments ( idUsser, idPublishing, content) VALUES ( :idUsser, :idPublishing, :content );";
        $ps = $pdo -> prepare ($sql);
        $ps -> bindValue(':idUsser', $_SESSION['id']);
        $ps -> bindValue(':idPublishing', $idPublishing);
        $ps -> bindValue(':content', $content);
        $ps -> execute();

      } catch (PDOException $e) {

        header('Location: ..');
        exit();

      }

      header('Location: ..');
      exit();

    }

  }


  $idPublishing = $_GET['id'];

  if ( is_numeric($idPublishing) ) {

    try{

      $sql = 'SELECT * FROM publishing WHERE id = :idPublishing AND deleted_at IS NULL';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':idPublishing', $idPublishing);
      $ps->execute();

    }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

    }

    $publishing = $ps->fetch(PDO::FETCH_ASSOC);

    try{

      $sql = 'SELECT comments.content AS content, comments.created_at AS created_at, ussers.name AS name, ussers.subname AS subname FROM comments JOIN ussers ON comments.idUsser = ussers.id WHERE comments.idPublishing = :idPublishing AND comments.deleted_at IS NULL ORDER BY comments.created_at DESC';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':idPublishing', $idPublishing);
      $ps->execute();

    }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

    }

    while ($row = $ps -> fetch(PDO::FETCH_ASSOC) ) {

	     $comments [] = $row;

    }

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
