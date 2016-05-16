<?php

  require_once '../../db/connectdb.php';

  global $base_url;

  session_start();

  if (isset($_GET['selectMonthTide'])) {

    $month = htmlspecialchars($_POST['month'], ENT_QUOTES, 'UTF-8');
    $sea = htmlspecialchars($_POST['sea'], ENT_QUOTES, 'UTF-8');

    try {

      $sql = 'SELECT * FROM tide WHERE sea = :sea AND month = :month';

      $ps = $pdo->prepare($sql);
      $ps->bindValue(':month', $month);
      $ps->bindValue(':sea', $sea);
      $ps->execute();

    } catch (PDOException $e) {

      die("No se ha podido extraer información de la base de datos:". $e->getMessage());

    }

    while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

      $listTide[] = $row;

    }

    require_once 'main.html.php';
    exit();

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
