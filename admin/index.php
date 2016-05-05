<?php

  require_once '../db/connectdb.php';

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
