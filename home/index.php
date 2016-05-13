<?php

  require_once '../db/connectdb.php';

  global $base_url;

  session_start();

  if (isset($_GET['addPublishing'])) {

    $title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
    $idUsser = $_SESSION['id'];
    $errores = [];

    if ( $title == "" ) {

      $errores['title'] = "Debes introducir un título para la publicación.";

    }

    if ( $content == "" ) {

      $errores['content'] = "Debes introducir un contenido para la publicación.";

    }

    if ( empty($errores) ) {

      try {

        $sql = "INSERT INTO publishing (idUsser, title, content) VALUES (:idUser, :title, :content)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(':idUser', $idUsser);
        $ps->bindValue(':title', $title);
        $ps->bindValue(':content', $content);

        $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

      header('Location: .');

    }

  }

  try{

    $sql = 'SELECT *, publishing.created_at AS fecha FROM publishing JOIN ussers ON publishing.id = ussers.id WHERE publishing.deleted_at IS NULL && ussers.deleted_at IS NULL ORDER BY publishing.created_at DESC';
    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $arrayPublishingUsser[] = $row;

  }

   if( isset($_GET['logout']) ){

     unset($_SESSION['user']);

     session_destroy();

     header("Location: ".$base_url);

   }elseif (isset($_GET['logoutUsser'])) {

      unset($_SESSION['id']);
      unset($_SESSION['name']);
      unset($_SESSION['subname']);
      unset($_SESSION['email']);
      unset($_SESSION['bday']);
      unset($_SESSION['sex']);
      unset($_SESSION['locality']);
      unset($_SESSION['typeFishing']);

      session_destroy();

      header("Location: ".$base_url);

   }else{

      require_once 'index.html.php';

    }


?>
