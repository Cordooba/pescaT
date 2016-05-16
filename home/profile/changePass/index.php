<?php

  require_once '../../../db/connectdb.php';

  global $base_url;

  session_start();

  if ( isset($_GET['pass']) )  {

    $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');
    $passNew = htmlspecialchars($_POST['passNew'], ENT_QUOTES, 'UTF-8');
    $rePassNew = htmlspecialchars($_POST['rePassNew'], ENT_QUOTES, 'UTF-8');
    $errores = [];

    $salt = 'G=)N3QcjgP8+C-ojEYX0|S+ortn(?C?D1d5VHc|wbT-c(rY^RvL-R m>=LzQ)^';
    $pass = md5($pass.$salt);

    if ( $pass != $_SESSION['pass'] ) {
        $errores['wrongPass'] = 'Contraseña incorrecta.';
    }

    if ( $passNew == "" ) {
        $errores['passNew'] = 'Debes introducir una contraseña nueva.';
    }

    if ( $passNew != $rePassNew ) {
        $errores['rePassNew'] = 'La contraseña no coincide.';
    }

    $salt = 'G=)N3QcjgP8+C-ojEYX0|S+ortn(?C?D1d5VHc|wbT-c(rY^RvL-R m>=LzQ)^';
    $passNew = md5($passNew.$salt);

    if ( empty($errores) ) {

      try {

        $sql = "UPDATE ussers SET pass = :pass WHERE id = :id";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(':id', $_SESSION['id']);
        $ps->bindValue(':pass', $passNew);

        $ps->execute();

      } catch (PDOException $e) {

        die("No se ha podido actualizar los datos del usuario en la base de datos:". $e->getMessage());

      }

      header("Location: ..");
      exit();

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
