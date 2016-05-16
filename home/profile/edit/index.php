<?php

  require_once '../../../db/connectdb.php';

  global $base_url;

  if ( isset($_GET['updateUsser']) )  {

    $id = htmlspecialchars($_POST['id'], ENT_QUOTES, 'UTF-8');
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $subname = htmlspecialchars($_POST['subname'], ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
    $bday = htmlspecialchars($_POST['bday'], ENT_QUOTES, 'UTF-8');
    $sex = htmlspecialchars($_POST['sex'], ENT_QUOTES, 'UTF-8');
    $locality = htmlspecialchars($_POST['locality'], ENT_QUOTES, 'UTF-8');
    $typeFishing = htmlspecialchars($_POST['typeFishing'], ENT_QUOTES, 'UTF-8');
    $errores = [];

    if ( $name == "" ) {
        $errores['name'] = 'Debes introducir tu nombre.';
    }

    if ( $subname == "" ) {
        $errores['subname'] = 'Debes introducir tus apellidos.';
    }

    if ( $email == "" ) {
        $errores['email'] = 'Debes introducir tu dirección de correo electrónico.';
    }

    if ( $bday == "" ) {
        $errores['bday'] = 'Debes introducir tu fecha de nacimiento.';
    }

    if ( $sex == "" ) {
        $errores['sex'] = 'Debes selecionar tu sexo.';
    }

    if ( empty($errores) ) {

      try {

        $sql = "UPDATE ussers SET name = :name, subname = :subname, email = :email, bday = :bday, sex = :sex, locality = :locality, typeFishing = :typeFishing WHERE id = :id";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(':id', $id);
        $ps->bindValue(':name', $name);
        $ps->bindValue(':subname', $subname);
        $ps->bindValue(':email', $email);
        $ps->bindValue(':bday', $bday);
        $ps->bindValue(':sex', $sex);
        $ps->bindValue(':locality', $locality);
        $ps->bindValue(':typeFishing', $typeFishing);
        $ps->execute();

      } catch (PDOException $e) {

        die("No se ha podido actualizar los datos del usuario en la base de datos:". $e->getMessage());

      }

      unset($_SESSION['id']);
      unset($_SESSION['name']);
      unset($_SESSION['subname']);
      unset($_SESSION['email']);
      unset($_SESSION['bday']);
      unset($_SESSION['sex']);
      unset($_SESSION['locality']);
      unset($_SESSION['typeFishing']);

      session_destroy();

      session_start();

      $_SESSION['id'] = $id;
      $_SESSION['name'] = $name;
      $_SESSION['subname'] = $subname;
      $_SESSION['email'] = $email;
      $_SESSION['pass'];
      $_SESSION['bday'] = $bday;
      $_SESSION['sex'] = $sex;
      $_SESSION['locality'] = $locality;
      $_SESSION['typeFishing'] = $typeFishing;

      header("Location: ".$base_url);
      exit();

    }

  }

  session_start();

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
