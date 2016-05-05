<?php

session_start();

if( isset($_GET['logout']) ){

  unset($_SESSION['user']);

  session_destroy();

  header("Location: ".$base_url);

  }

?>
