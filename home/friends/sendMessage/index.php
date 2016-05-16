<?php

  require_once '../../../db/connectdb.php';

  global $base_url;

  session_start();

  if ( isset($_GET['addMessage']) ) {

    $subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES, 'UTF-8');
    $idUsserTo = htmlspecialchars($_POST['idUsserTo'], ENT_QUOTES, 'UTF-8');

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
        $ps->bindValue(':idUsserTo', $idUsserTo);
        $ps->bindValue(':subject', $subject);
        $ps->bindValue(':content', $content);

        $ps->execute();

      } catch (PDOException $e) {

        header('Location: ..');
        exit();

      }

      header('Location: ..');
      exit();

    }else{

      header('Location: ..');
      exit();

    }

  }

  try {

    $sql = 'SELECT * FROM ussers WHERE id = :idUsser';

    $ps = $pdo->prepare($sql);

    $ps->bindValue(':idUsser', $_GET['id']);

    $ps->execute();

  } catch (PDOException $e) {

    header('Location: ..');
    exit();

  }

  $usser = $ps->fetch(PDO::FETCH_ASSOC);

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
