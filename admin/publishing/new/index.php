<?php

  require_once '../../../db/connectdb.php';

  if ( isset($_GET['addPublishing']) ) {

    $title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
    $idUsser = htmlspecialchars($_POST['idUsser'], ENT_QUOTES, 'UTF-8');

    $errores = [];

    if ( $title == "" ) {
        $errores['title'] = 'Debes introducir un título para la identificación.';
    }

    if ( $content == "" ) {
        $errores['content'] = 'Debes introducir contenido para la publicación.';
    }

    if ( empty($errores) ) {

      try {

        $sql = "INSERT INTO publishing (idUsser, content, title) VALUES (:idUsser, :content, :title)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(':title', $title);
        $ps->bindValue(':idUsser', $idUsser);
        $ps->bindValue(':content', $content);

        $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

      header('Location: ..');
      exit();

    }

  }

  try {

    $sql = 'SELECT * FROM ussers WHERE deleted_at IS NULL';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  } catch (PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $ussers[] = $row;

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
