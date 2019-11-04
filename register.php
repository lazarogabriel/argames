<?php

  include_once("servicios.php");
  session_start();
  if($auth->estaLogueado()){header("Location:login.php");exit;}

  $erorres = [];
  $name = "";
  $username = "";
  $email = "";
  $edad = "";
  $genre= "";
  $password= "";

if ($_POST){
  $errores = $validador->validarInformacion($_POST, $db);

  if(!isset($errores["usernameShort"]) && !isset($errores["usernameLong"]) && !isset($errores["usernameExist"]))$username= $_POST["username"];
  if(!isset($errores["nameShort"]) && !isset($errores["nameLong"]))$name = $_POST["name"];
  if(!isset($erorres["emailEmpty"]) && !isset($errores["emailWrong"]) && !isset($errores["emailExist"]))$email=$_POST["email"];
  if(!isset($errores["genreEmpty"]))$genre = $_POST["gen"];
  if(!isset($errores["cPaswordEmpty"]) && !isset($errores["cPasswordFail"]))$password = md5($_POST["cPassword"]);
  if(!isset($errores["emptyAge"]) && !isset($errores["outIntervalAge"]))$edad = $_POST["edad"];

  if(!count($errores)){
    $ext = pathinfo($_FILES["imagen"]["name"], PATHINFO_EXTENSION);
    $usuario = new Usuario($name, $username, $email, $password, $genre, $edad, $ext);
    $_SESSION["user_object"] = $db->guardarUsuario($usuario);

    $tmp_file = $_FILES["imagen"]["tmp_name"];
    $directorio_destino = dirname(__FILE__) . "/" . "archivos_subidos/" . $_SESSION["user_object"]->getId() . "." . $ext;
    move_uploaded_file($tmp_file, $directorio_destino);

    header("Location:index.php");exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrarme</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/formulario_estilos.css">
  <script src="js/wow.min.js" type="text/javascript"></script>
        <script>
        new WOW().init();
        </script>
</head>

<body>
<div class="container">

<div class="row align-items-center">

  <div class="col-xl-4 col-lg-5 col-md-12 ">
		<div class="container">

      <div class="row wow rubberBand">
				<p class=" text-center argames ">ArGames</p>
		    <footer class="blockquote-footer argames_downtext">this is argames, an argentinian games page</footer>
			</div>
			<div class="row">
				<img src="imagenes/balls_colision.gif" class="img-fluid mt-4 float-left" alt="imagen_de_un_metegol" height="">
			</div>
			</div>
  </div>

  <div class="col-xl-4 col-lg-2 col-md-2"></div>

  <div class="col-xl-4 col-lg-5 col-md-10 ">

    <form id="contact-stack-form" class="form wow slideInRight" action='' method='post' enctype="multipart/form-data">
        <div class="cube-1 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-2 w-100 cube">
          <div class="front">
            <label for="name" class="label">Nombre</label>
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-3 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-4 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-5 w-300 cube">
          <div class="front">
            <input type="text" name="name" value='<?= $name ?>' maxlength="50" id="name" placeholder="Tu nombre" class="field">
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>

          <!-- RESERVADO PARA VALIDACIONES -->
       <?php if (isset($errores["nameShort"]) || isset($errores["nameLong"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front">
              <p class="pt-2  texto_validacion">El campo debe tener mas de 5 y menos de 30 caracteres</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
       <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <div class="cube-6 w-180 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-8 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-9 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-10 w-100 cube">
          <div class="front">
            <label for="email" class="label">Usuario</label>
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-11 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-12 w-300 cube">
          <div class="front">
            <input type="text" name="username" value='<?= $username?>' maxlength="50" id="username" placeholder="Un nombre de usuario" class="field">
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>

        <!-- RESERVADO PARA VALIDACIONES -->
        <?php if(isset($errores["usernameShort"]) || isset($errores["usernameLong"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front">
              <p class="pt-2  texto_validacion">¡Nombre de usuario invalido!</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
        <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <!-- RESERVADO PARA VALIDACIONES -->
        <?php if (isset($errores["usernameExist"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front">
              <p class="pt-2  texto_validacion">¡El nombre de usuario ya existe!</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
        <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <div class="cube-13 w-100 cube">
          <div class="top"></div>
        </div>
        <div class="cube-14 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-15 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-10 w-100 cube">
          <div class="front">
            <label for="email" class="label" style="text-align:center;">Email</label>
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-11 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-12 w-300 cube">
          <div class="front">
            <input type="email" name="email" value='<?= $email?>' maxlength="50" id="email" placeholder="Un correo electronico" class="field">
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right">
          </div>
        </div>
        <div class="cube-23 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>

        <!-- RESERVADO PARA VALIDACIONES -->
        <?php if(isset($erorres["emailEmpty"]) || isset($errores["emailWrong"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front">
              <p class="pt-2  texto_validacion">¡El formato del email es invalido!</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
        <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <!-- RESERVADO PARA VALIDACIONES -->
        <?php if(isset($errores["emailExist"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front">
              <p class="pt-2  texto_validacion">¡El email ya existe!</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
        <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <div class="cube-24 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-25 w-100 cube">
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
        </div>
        <div class="cube-29 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-30 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-1 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-2 w-100 cube">
          <div class="front">
            <label for="name" class="label">Genero</label>
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-3 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-13 w-100 cube">
          <div class="front"><label for="varon" class="label" style="text-align:center;">Varon &nbsp;<input class="radio_boton" type="radio" name="gen" value="v"<?= ($genre == "v")?"checked":"" ?>></label></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-14 w-100 cube">
          <div class="front"><label for="mujer" class="label" style="text-align:center;">Mujer &nbsp;<input class="radio_boton" type="radio" name="gen" value="m"<?= ($genre == "m")?"checked":"" ?>></label></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-15 w-100 cube">
          <div class="front"><label for="otro" class="label" style="text-align:center;">Otro &nbsp;<input class="radio_boton" type="radio" name="gen" value="o"<?= ($genre == "o")?"checked":"" ?>></label></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-2 w-100 cube">
        <div class="front">
        <label for="edad" class="label">Edad</label>
        </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-3 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-2 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-24 w-100 cube">
          <div class="front"><input type="number" name="edad" value="<?= $edad?>" class="field" placeholder="Tu edad" require></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-3 w-100 cube">
        </div>

        <!-- RESERVADO PARA VALIDACIONES -->
        <?php if (isset($errores["emptyAge"]) || isset($errores["outIntervalAge"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front">
              <p class="pt-2  texto_validacion">¡Edad invalida!</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
        <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <div class="cube-1 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-2 w-100 cube">
          <div class="front">
            <label for="name" class="label">Foto</label>
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-3 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-5 w-300 cube">
          <div class="front custom-file">
            <div class="custom-file mt-2 ">
              <input type="file" name="imagen" style="background-color:#f5a741; border:none;"  class="custom-file-input" id="customFileLang" lang="es"/>
              <label class="custom-file-label " style="background:#f5a741;color:black; margin-right: 10px;border:none;" for="customFileLang">Seleccionar foto de perfil</label>
            </div>
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>

        <!-- RESERVADO PARA VALIDACIONES -->
        <?php if (isset($errores["extFileError"]) || isset($errores["fileError"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front">
              <p class="pt-2  texto_validacion">¡El formato del archivo es incorrecto!</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
        <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <div class="cube-2 w-100 cube">
          <div class="front">
          <label for="name" class="label">Contraseña</label>
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-3 w-100 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-4 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-5 w-300 cube">
          <div class="front">
            <input type="password" name="password" id="password" placeholder="Una contraseña" class="field">
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>

        <!-- RESERVADO PARA VALIDACIONES -->
        <?php if (isset($errores["passwordEmpty"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front">
              <p class="pt-2  texto_validacion">¡Debe insertar una contraseña!</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
        <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <div class="cube-26 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-28 w-100 cube">
          <div class="front">
          <label for="confirmar" class="label">Confirmar</label>
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-29 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-30 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-5 w-300 cube">
          <div class="front">
            <input type='password' name='cPassword' id="confirmar" placeholder="Confirmar contraseña" class="field">
          </div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>

        <!-- RESERVADO PARA VALIDACIONES -->
        <?php if (isset($errores["passwordEmpty"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front ">
              <p class="pt-2 texto_validacion">¡Debe escribir una contraseña!</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
        <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <!-- RESERVADO PARA VALIDACIONES -->
        <?php if (isset($errores["cPasswordFail"]) || isset($errores["cPasswordEmpty"])): ?>
          <div class="cube-31 w-300 cube text-center wow slideInRight">
            <div class="front ">
              <p class="pt-2 texto_validacion">¡Las contraseñas no coinciden!</p>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
        <?php endif; ?>
        <!-- RESERVADO PARA VALIDACIONES -->

        <div class="cube-32 w-300 cube">
          <div class="front"></div>
          <div class="back"></div>
          <div class="top"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="right"></div>
        </div>
        <div class="cube-33 w-300 cube">
            <div class="front">
              <button type="submit" name="submit" value="enviar" id="contact-stack-button" class="button">registrarme</button>
            </div>
            <div class="back"></div>
            <div class="top"></div>
            <div class="bottom"></div>
            <div class="left"></div>
            <div class="right"></div>
          </div>
          </form>
        </div>

        <?php include("sections/footer.html"); ?>
        </div>
    </div>

    <div class="destroy_button" style="">
      <a href="pagina_boton_secreto.html">SECRET</a>
    </div>

  </body>
</html>
