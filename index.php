<?php

    require_once 'db/connectdb.php';

    global $base_url;

    if ( isset($_GET['addUsser']) ) {

      $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
      $subname = htmlspecialchars($_POST['subname'], ENT_QUOTES, 'UTF-8');
      $email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
      $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');
      $repass = htmlspecialchars($_POST['repass'], ENT_QUOTES, 'UTF-8');
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

      if ( $pass == "" ) {
          $errores['pass'] = 'Debes introducir tu contraseña.';
      }

      if ( $repass == "" ) {
          $errores['repass'] = 'Debes introducir tu contraseña.';
      }

      if ( $pass != $repass ) {
          $errores['incorrectPass'] = 'Las contraseñas no coinciden.';
      }

      if ( $bday == "" ) {
          $errores['bday'] = 'Debes introducir tu fecha de nacimiento.';
      }

      if ( $sex == "" ) {
          $errores['sex'] = 'Debes selecionar tu sexo.';
      }

      $salt = 'G=)N3QcjgP8+C-ojEYX0|S+ortn(?C?D1d5VHc|wbT-c(rY^RvL-R m>=LzQ)^';
      $pass = md5($pass.$salt);

      if ( empty($errores) ) {

        try{

    			$sql = "INSERT INTO ussers (name, subname, email, pass, bday, sex, locality, typeFishing) VALUES (:name, :subname, :email, :pass, :bday, :sex, :locality, :typeFishing)";

    			$ps = $pdo->prepare($sql);

    			$ps->bindValue(':name', $name);
    			$ps->bindValue(':subname', $subname);
          $ps->bindValue(':email', $email);
          $ps->bindValue(':pass', $pass);
          $ps->bindValue(':bday', $bday);
          $ps->bindValue(':sex', $sex);
          $ps->bindValue(':locality', $locality);
          $ps->bindValue(':typeFishing', $typeFishing);
    			$ps->execute();

    		}catch (PDOException $e){

    			die("No se ha podido registrar el usuario en la base de datos:". $e->getMessage());

    		}
    		header("Location: .");
    		exit();

      }

    }

    session_start();

    if ( isset($_GET['login']) ) {

      $email = htmlspecialchars($_POST['emailLogin'], ENT_QUOTES, 'UTF-8');
      $pass = htmlspecialchars($_POST['passLogin'], ENT_QUOTES, 'UTF-8');

      $salt = 'G=)N3QcjgP8+C-ojEYX0|S+ortn(?C?D1d5VHc|wbT-c(rY^RvL-R m>=LzQ)^';
      $pass = md5($pass.$salt);

      try {

        $sql = 'SELECT * FROM ussers WHERE email=:email AND pass=:pass AND deleted_at IS NULL ';

        $ps = $pdo->prepare($sql);

        $ps->bindValue(':email', $email);
        $ps->bindValue(':pass', $pass);
        $ps->execute();

      } catch (PDOException $e) {

        die("No es posible acceder a la aplicación PescaT:". $e->getMessage());

      }

      $usser = $ps->fetch(PDO::FETCH_ASSOC);
      $stringSearch = '@admin.com';

      if ( $email == $usser['email'] && $pass == $usser['pass'] && strstr($usser['email'], $stringSearch) ) {

        $name = $usser['email'];
        $id = $usser['id'];
        $_SESSION['user'] = $name;
        $_SESSION['userId'] = $id;

        header("Location: admin");
    		exit();

       }elseif ( $email == $usser['email'] && $pass == $usser['pass'] && strstr($usser['email'], $stringSearch) == false ) {

        $id = $usser['id'];
        $name = $usser['name'];
        $subname = $usser['subname'];
        $email = $usser['email'];
        $bday = $usser['bday'];
        $sex = $usser['sex'];
        $locality = $usser['locality'];
        $typeFishing = $usser['typeFishing'];
        $pass = $usser['pass'];


        $_SESSION['id'] = $id;
        $_SESSION['name'] = $name;
        $_SESSION['subname'] = $subname;
        $_SESSION['email'] = $email;
        $_SESSION['pass'] = $pass;
        $_SESSION['bday'] = $bday;
        $_SESSION['sex'] = $sex;
        $_SESSION['locality'] = $locality;
        $_SESSION['typeFishing'] = $typeFishing;

    		$sql = "INSERT INTO logins (idUsser, httpUserAgent, serverSoftware, serverProtocol, httpAcceptLanguage, remoteAddr) VALUES (:idUsser, :httpUserAgent, :serverSoftware, :serverProtocol, :httpAcceptLanguage, :remoteAddr)";

    		$ps = $pdo->prepare($sql);

    		$ps->bindValue(':idUsser', $usser['id']);
  			$ps->bindValue(':httpUserAgent', $_SERVER['HTTP_USER_AGENT']);
        $ps->bindValue(':serverSoftware', $_SERVER['SERVER_SOFTWARE']);
        $ps->bindValue(':serverProtocol', $_SERVER['SERVER_PROTOCOL']);
        $ps->bindValue(':httpAcceptLanguage', $_SERVER['HTTP_ACCEPT_LANGUAGE']);
        $ps->bindValue(':remoteAddr', $_SERVER['REMOTE_ADDR']);
  			$ps->execute();

        header("Location: home");
    		exit();

      }else{

        header("Location: ".$base_url);
    		exit();

      }

    }else{

      require_once 'index.html.php';

    }


?>
