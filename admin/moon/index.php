<?php

  require_once '../../db/connectdb.php';

  if(isset($_GET['statusAsc'])){

    $sql = 'SELECT * FROM moon ORDER BY status ASC';

  }elseif(isset($_GET['statusDesc'])){

    $sql = 'SELECT * FROM moon ORDER BY status DESC';

  }else{

    $sql = 'SELECT * FROM moon';

  }

  try{

    $ps = $pdo->prepare($sql);
    $ps->execute();

  }catch(PDOException $e) {

    die("No se ha podido extraer información de la base de datos:". $e->getMessage());

  }

  while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {

    $moonList[] = $row;

  }

  global $base_url;

  session_start();

  if( isset($_GET['logout']) ){

    unset($_SESSION['user']);
    unset($_SESSION['userId']);

    session_destroy();

    header("Location: ".$base_url);

    }else{

      require_once 'index.html.php';

    }

?>
