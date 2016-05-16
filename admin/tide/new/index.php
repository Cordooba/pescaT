<?php

  require_once '../../../db/connectdb.php';

  global $base_url;

  session_start();

  if ( isset($_GET['addTide']) ) {

    $sea = htmlspecialchars($_POST['sea'], ENT_QUOTES, 'UTF-8');
    $day = htmlspecialchars($_POST['day'], ENT_QUOTES, 'UTF-8');
    $month = htmlspecialchars($_POST['month'], ENT_QUOTES, 'UTF-8');
    $year = htmlspecialchars($_POST['year'], ENT_QUOTES, 'UTF-8');
    $hour = htmlspecialchars($_POST['hour'], ENT_QUOTES, 'UTF-8');
    $status = htmlspecialchars($_POST['status'], ENT_QUOTES, 'UTF-8');
    $high = htmlspecialchars($_POST['high'], ENT_QUOTES, 'UTF-8');
    $errores = [];

    try {

      $sql = "INSERT INTO tide (sea, day, month, year, hour, status, high) VALUES (:sea, :day, :month, :year, :hour, :status, :high)";

      $ps = $pdo->prepare($sql);

      $ps->bindValue(':sea', $sea);
      $ps->bindValue(':day', $day);
      $ps->bindValue(':month', $month);
      $ps->bindValue(':year', $year);
      $ps->bindValue(':hour', $hour);
      $ps->bindValue(':status', $status);
      $ps->bindValue(':high', $high);

      $ps->execute();

    } catch (PDOException $e) {

      exit();

    }

    header('Location: ..');
    exit();

  }

  if ( isset($_GET['logout']) ) {

    unset($_SESSION['user']);
    unset($_SESSION['userId']);

    session_destroy();

    header("Location: ".$base_url);

  }else{

    require_once 'index.html.php';

  }

?>
