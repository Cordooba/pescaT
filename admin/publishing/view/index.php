<?php

  require_once '../../../db/connectdb.php';

  if ( isset($_GET['updatePublishing']) ) {

    $id = htmlspecialchars($_POST['idPublishing'], ENT_QUOTES, 'UTF-8');
    $title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
    $errores = [];

    if ($title == "") {

      $errores['titleEmpty'] = 'El título no puede ser vacío.';

    }

    if ($content == "") {

      $errores['titleEmpty'] = 'El contenido no puede ser vacío.';

    }

    if ( empty($errores) ) {

      try {

        $sql = "UPDATE publishing SET title = :title, content = :content WHERE id = :id";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(':title', $title);
        $ps->bindValue(':content', $content);
        $ps->bindValue(':id', $id);

        $ps->execute();

      } catch (PDOException $e) {

        header('Location: .');
        exit();

      }

      header('Location: ..');
      exit();


    }

  }

  $idPublishing = $_GET['id'];

  if ( is_numeric($idPublishing) ) {

    try{

      $sql = 'SELECT * FROM publishing WHERE id = :idPublishing';
      $ps = $pdo->prepare($sql);
      $ps->bindValue(':idPublishing', $idPublishing);
      $ps->execute();

    }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

    }

    $publishing = $ps->fetch(PDO::FETCH_ASSOC);

    require_once 'index.html.php';

  }

?>
