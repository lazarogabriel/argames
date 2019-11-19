<?php
      include_once("servicios.php");
      session_start();
      if(!$auth->estaLogueado()){header("Location:index.php");exit;}

      $auth->logout();
      header("Location:index.php");
      exit;
  ?>
