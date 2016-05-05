<?php

  require_once '../../../db/connectdb.php';

  if ( isset($_GET['addLocation']) ) {

    $location = htmlspecialchars($_POST['location'], ENT_QUOTES, 'UTF-8');
    $latitud = htmlspecialchars($_POST['latitud'], ENT_QUOTES, 'UTF-8');
    $longitud = htmlspecialchars($_POST['longitud'], ENT_QUOTES, 'UTF-8');

    $errores = [];

    if ( $location == "" ) {
        $errores['locationEmpty'] = 'Campo ubicación no puede ser vacío.';
    }

    if ( $latitud == "" ) {
        $errores['latitudEmpty'] = 'Campo latitud no puede ser vacío.';
    }

    if ( $longitud == "" ) {
        $errores['longitudEmpty'] = 'Campo longitud no puede ser vacío.';
    }

    if ( empty($errores) ) {

      try {

        $sql = "INSERT INTO locationmaps (location, latitud, longitud) VALUES (:location, :latitud, :longitud)";

        $ps = $pdo->prepare($sql);

        $ps->bindValue(':location', $location);
        $ps->bindValue(':latitud', $latitud);
        $ps->bindValue(':longitud', $longitud);

        $ps->execute();

      } catch (PDOException $e) {

        exit();

      }

      header('Location: .');
      exit();

    }

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
