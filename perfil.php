<?php

  include("servicios.php");
  session_start();

  if(!$auth->estaLogueado()){header("Location:index.php"); exit;}

  $usuario = $_SESSION["user_object"];
  $erorres = [];
  $name = $usuario->getName();
  $username = $usuario->getUsername();
  $email = $usuario->getEmail();
  $edad = $usuario->getEdad();
  $genre = $usuario->getGenre();

  $editar = (isset($_POST['editar_perfil']) && !empty($_POST['editar_perfil']))? true:false;
  $aceptarEditar = (isset($_POST['aceptar_edicion']) && !empty($_POST['aceptar_edicion']))? true:false;

  if($aceptarEditar){
    $errores = $validador->validarInformacion($_POST, $db);
    if(!strcasecmp($usuario->getUsername(), $username= $_POST["username"])) unset($errores["usernameExist"]);
    if($usuario->getEmail() == $_POST["email"]) unset($errores["emailExist"]);
    if($_FILES["imagen"]["error"]) unset($errores["fileError"]);
    if($_POST["password"]=="" && $_POST["cPassword"]==""){
      unset($errores["passwordEmpty"]);
      unset($errores["cPasswordEmpty"]);
    }

    if(!isset($errores["usernameShort"]) && !isset($errores["usernameLong"]) && !isset($errores["usernameExist"]))$username= $_POST["username"];
    if(!isset($errores["nameShort"]) || !isset($errores["nameLong"]))$name = $_POST["name"];
    if(!isset($erorres["emailEmpty"]) && !isset($errores["emailWrong"]) || !isset($errores["emailExist"]))$email=$_POST["email"];
    if(!isset($errores["cPasswordFail"]))$password = md5($_POST["password"]);
    if(!isset($errores["emptyAge"]) && !isset($errores["outIntervalAge"]))$edad = $_POST["edad"];
    if(!isset($errores["genreEmpty"]))$genre = $_POST["gen"];

    if(!count($errores)){
      if($_FILES["imagen"]["error"]===UPLOAD_ERR_OK){
        unlink("archivos_subidos/" . $usuario->getId() . "." . $usuario->getExtencionFoto());
        $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
        $usuario->setExtencionFoto($ext);
        $tmp_file = $_FILES["imagen"]["tmp_name"];
        $directorio_destino = dirname(__FILE__) . "/" . "archivos_subidos/" . $usuario->getId() . "." . $ext;
        move_uploaded_file($tmp_file, $directorio_destino);
      }

      $usuario->setUsername($username);
      $usuario->setEmail($email);
      $usuario->setEdad($edad);
      $usuario->setName($name);
      $usuario->setGenre($genre);
      $usuario->setPassword($password);

      $_SESSION["user_object"] = $db->modificarUsuario($usuario->getId(), $usuario);
      $auth->loguear($username);
    }else{
      $editar = true;
    }
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/profile.css">
		<link rel="stylesheet" href="css/animate.css">
		<script src="js/modernizr.js"></script>
		<script src="js/wow.min.js" type="text/javascript"></script>
	        <script>
	        new WOW().init();
	        </script>
    <title>Mi perfil</title>
  </head>
  <body class="wow fadeIn">

    <div class="container pb-0">
      <div class="row">
        <div class="col">
          <header class="wow bounceInLeft">
            <div id="cd-logo" class="">
                <p class="text-center argames">ArGames</p>
                <footer class="text-white blockquote-footer argames_downtext">this is argames, an argentinian games page </footer>
            </div>
          </header>

          <div id="cd-nav" class="font-weight-bold">
            <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
            <nav id="cd-main-nav">
              <ul class="">
                <li ><a href="index.php">INICIO</a></li>
                  <li> <a href="destroy_session.php">SALIR</a></li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>

  <div class="container emp-profile mt-md-0 wow flipInY">

      <form method="post" enctype="multipart/form-data">
          <div class="row">
              <div class="col-lg-4">
                      <div class="profile-img mt-md-5 wow swing">
                          <img src="<?="archivos_subidos/" . $usuario->getId() . "." . $usuario->getExtencionFoto()?>" class="" alt=""/><!-- FALTA AGREGAR ALGO-->
                      </div>
                <?php if($editar): ?>
                      <div class="file btn btn-lg btn-primary">
                          Cambiar foto
                        <input type="file" name="imagen" class="btn btn-warning"/>
                        <?=(isset($errores["extFileError"]) || isset($errores["fileError"]))? "Error al subir la foto": ""; ?>
                      </div>
                <?php endif; ?>
              </div>
              <div class="col-lg-6">
                  <div class="profile-head  ">
                              <h5 class="">
                                  <?=$usuario->getUsername()?>
                              </h5>
                              <h6>
                                Senior   <!--TIPO DE JUGADOR, DEPENDE DE LAS VARIABLES "TIEMPO JUGADO", "SCORE". TRAINEE/JUNIOR/SEMI SENIO/SENIOR  -->
                              </h6>
                              <p class="proile-rating">RANKING: <span>8/10</span></p> <!-- HACER UNA SUMA DE TODOS LOS SCORE Y CALCULAR RANKING-->
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mis datos</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mi rank</a>
                          </li>
                      </ul>
                  </div>
                <div class="col-md-12">
                  <div class="tab-content profile-tab " id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row wow fadeInUp">
                          <div class="col-md-6 ">
                              <label>ID Usuario</label>
                          </div>
                          <div class="col-md-6 ">
                              <?=$usuario->getId();?>
                          </div>
                      </div>
                      <div class="row ">
                          <div class="col-md-6 ">
                              <label>Nombre de usuario</label>
                          </div>
                          <div class="col-md-6 ">
                            <?php if ($editar): ?>
                              <input type="text" name="username" class="input_editar" value="<?=$username?>">
                              <?=(isset($errores["usernameShort"]) || isset($errores["usernameLong"]) || isset($errores["usernameExist"])) ? "El nombre de usuario ingresado es invalido!":""?>
                              <?php else: ?>
                                <p><?=$username?></p>
                            <?php endif; ?>
                          </div>
                      </div>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label>Nombre</label>
                          </div>
                          <div class="col-md-6">
                            <?php if ($editar): ?>
                              <input type="text" name="name" class="input_editar" value="<?=$name?>">
                              <?=(isset($errores["nameShort"]) || isset($errores["nameLong"])) ? "El nombre ingresado debe ser de entre 5 y 30 caracteres!":""?>
                              <?php else: ?>
                                <p><?=$name?></p>
                            <?php endif; ?>
                          </div>
                      </div>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label>Email</label>
                          </div>
                          <div class="col-md-6">
                            <?php if ($editar): ?>
                              <input type="text" name="email" class="input_editar" value="<?=$email?>">
                              <?=(isset($erorres["emailEmpty"]) || isset($errores["emailWrong"]) || isset($errores["emailExist"])) ? "El email es incorrecto!":""?>
                              <?php else: ?>
                                <p><?=$email?></p>
                            <?php endif; ?>
                          </div>
                      </div>

                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label>Genero</label>
                          </div>
                          <div class="col-md-6">
                            <?php if ($editar): ?>
                              <input class="radio_boton" type="radio" name="gen" value="v"<?= ($genre == "v")?"checked":"" ?>> Varon&nbsp;
                              <input class="radio_boton" type="radio" name="gen" value="m"<?= ($genre == "m")?"checked":"" ?>> Mujer&nbsp;
                              <input class="radio_boton" type="radio" name="gen" value="o"<?= ($genre == "o")?"checked":"" ?>> Otro
                              <?php else: ?>
                                <p><?=($genre == "v")? "Varon" : (($genre == "m")? "Mujer":"Otro")?> </p>
                            <?php endif; ?>
                          </div>
                      </div>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label>Edad</label>
                          </div>
                          <div class="col-md-6">
                            <?php if ($editar): ?>
                              <input type="number" name="edad" class="input_editar" value="<?=$edad?>">
                              <?=$notNumericAgeError ? "La edad debe ser numerica!":""?>
                              <?php else: ?>
                                <p><?=$edad?></p>
                            <?php endif; ?>
                          </div>
                      </div>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6 pb-2">
                              <label>Recordarme</label>
                          </div>
                          <div class="col-md-6">
                            <?php if ($editar): ?>
                              <input type="checkbox" name="recordarme" <?=$_COOKIE['remember_username']!=NULL ? "checked":""?>>
                              <?php else: ?>
                                <?php if ($_SESSION['recordarme']): ?>
                                  <input type="checkbox" class=" mt-2 mb-3" checked disabled>
                                  <?php else: ?>
                                    <input type="checkbox" disabled>
                                <?php endif; ?>
                            <?php endif; ?>
                          </div>
                      </div>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label>Contraseña</label>
                          </div>
                          <div class="col-md-6">
                            <?php if ($editar): ?>
                                <input type="password" name="password" class="input_editar">
                              <?php else: ?>
                                <p><?php for($i = 0; $i < 20; $i++):?>&#8226;<?php endfor;?></p>
                            <?php endif; ?>
                          </div>
                      </div>
                    <?php if ($editar): ?>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label>Confirmar contraseña</label>
                          </div>
                          <div class="col-md-6">
                              <input type="password" name="cPassword" class="input_editar" value="">
                              <?=(isset($errores["cPasswordFail"]))?"Las contraseñas no coinciden":""?>
                          </div>
                      </div>
                    <?php endif; ?>
                  </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="row">
                          <div class="col-md-6">
                              <label>Experiencia</label>
                          </div>
                          <div class="col-md-6">
                              <p>Senior</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label>Tiempo jugado</label>
                          </div>
                          <div class="col-md-6">
                              <p>01:03:30</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label>Veces jugadas</label>
                          </div>
                          <div class="col-md-6">
                              <p>7</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label>Veces ingresadas</label>
                          </div>
                          <div class="col-md-6">
                              <p>32</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 text-center wow bounceInLeft">
              <?php if ($editar): ?>
                  <input type="submit" class="profile-edit-btn mt-3 mb-2" name="aceptar_edicion" value="ACEPTAR"/>
                <?php else: ?>
                  <input type="submit" class="profile-edit-btn mt-3 mb-2" name="editar_perfil" value="EDITAR"/>
                <?php endif; ?>
              </div>
          </div>

          <!-- <div class="row">
              <div class="col-md-4">
                  <div class="profile-work">
                      <p>WORK LINK</p>
                      <a href="">Website Link</a><br/>
                      <a href="">Bootsnipp Profile</a><br/>
                      <a href="">Bootply Profile</a>
                      <p>SKILLS</p>
                      <a href="">Web Designer</a><br/>
                      <a href="">Web Developer</a><br/>
                      <a href="">WordPress</a><br/>
                      <a href="">WooCommerce</a><br/>
                      <a href="">PHP, .Net</a><br/>
                  </div>
              </div>
          </div> -->
      </form>
    </div>

    <?php include("sections/footer.html"); ?>

    <script src="js/jquery-2.1.1.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
