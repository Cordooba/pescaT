<?php

  require_once '../../../db/connectdb.php';

  global $base_url;

  session_start();

  if ( isset($_GET['addMoon']) ) {

    $day = htmlspecialchars($_POST['day'], ENT_QUOTES, 'UTF-8');
    $month = htmlspecialchars($_POST['month'], ENT_QUOTES, 'UTF-8');
    $year = htmlspecialchars($_POST['year'], ENT_QUOTES, 'UTF-8');
    $status = htmlspecialchars($_POST['status'], ENT_QUOTES, 'UTF-8');

    try {

      $sql = "INSERT INTO moon (day, month, year, status) VALUES (:day, :month, :year, :status)";

      $ps = $pdo->prepare($sql);

      $ps->bindValue(':day', $day);
      $ps->bindValue(':month', $month);
      $ps->bindValue(':year', $year);
      $ps->bindValue(':status', $status);

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
