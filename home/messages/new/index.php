<?php

  require_once '../../../db/connectdb.php';

  global $base_url;

  session_start();

  if ( isset($_GET['addMessage']) ) {

    $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
    $idUsser = htmlspecialchars($_POST['idUsser'], ENT_QUOTES, 'UTF-8');

    $errores = [];

    if ( $subject == "" ) {

      $errores['subject'] = 'Debes introducir un asunto para el mensaje.';

    }

    if ( $content == "" ) {

    $errores['content'] = 'Debes introducir contenido para el mensaje.';

    }

    if ( empty($errores) ) {

      try {

        $sql = "INSERT INTO messages (idUsser, idUsserTo, subject, content) VALUES (:idUsser, :idUsserTo, :subject, :content)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(':idUsser', $_SESSION['id']);
        $ps->bindValue(':idUsserTo', $idUsser);
        $ps->bindValue(':subject', $subject);
        $ps->bindValue(':content', $content);

        $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

      header('Location: ..');
      exit();

    }

  }

  if( isset($_GET['logoutUsser']) ){

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

    exit();

    }else{

      try{

        $sql = 'SELECT * FROM ussers WHERE id != :id AND deleted_at IS NULL';
        $ps = $pdo->prepare($sql);
        $ps->bindValue(':id', $_SESSION['id']);
        $ps->execute();

        }catch(PDOException $e) {

        die("No se ha podido extraer información de la base de datos:". $e->getMessage());

        }

      while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

        $ussers[] = $row;

      }

      require_once 'index.html.php';

      exit();

    }

?>
