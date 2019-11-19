<?php

  include_once("servicios.php");
  session_start();
  if($auth->estaLogueado()){header("Location:index.php"); exit;}

  $username = "";
  $password = "";
  $errores = [];

  if($_POST){
    $errores = $validador->validarLogin($_POST, $db);

    if(!isset($errores["loginUsernameFail"]) && !isset($errores["loginUsernameEmpty"]))$username = $_POST["username"];
    if(!isset($errores["loginPasswordEmpty"]) && !isset($errores["loginPasswordFail"]))$password = $_POST["password"];

    if(!count($errores)){
      $auth->loguear($username);
      $_SESSION["user_object"] = $db->traerUser($username);
      if($_POST['recordarme'] == "on"){
         setcookie('remember_username', $username, time()+(10 * 365 * 24 * 60 * 60));
         setcookie('remember_password', $password, time()+(10 * 365 * 24 * 60 * 60));
       }else{
         setcookie('remember_username', NULL, time()-1);
         setcookie('remember_password', NULL, time()-1);
       }
       header("Location:index.php");exit;
     }


   }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
  	<title>ArGames</title>
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
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
				<div  class="col-xl-4 col-lg-5 col-md-12 wow rubberBand ">
					<p class="text-center argames">ArGames</p>
					<footer class="text-lg-left text-sm-center blockquote-footer argames_downtext">this is argames, an argentinian games page</footer>
				</div>
				<div class="col-xl-4 col-lg-2 col-md-2"></div>
      		<div class="col-xl-4 col-lg-5 col-md-10 ">
            <form id="contact-stack-form" class="form wow bounceInRight" method="post">
            	<div class="cube-1 w-100 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-2 w-100 cube">
            		<div class=" front">
            			<label for="name" style="font-style:bold;" class=" label">Nombre</label>
            		</div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-3 w-100 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right">	<label for="name" style="font-style:bold;" class=" label">Nombre</label></div>
            	</div>
            	<div class=" cube-4 w-300 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-5 w-300 cube">
            		<div class=" front">
                  <input type="text" name="username" value="<?=empty($_COOKIE['remember_username'])? $username:$_COOKIE['remember_username']?>" placeholder="Tu nombre de usuario" class=" field">
            		</div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<?php if (isset($errores["loginUsernameEmpty"])): ?>
            		<div class=" cube-31 w-300 cube text-center">
            			<div class=" front">
            				<p class=" pt-1 mt-2 texto_validacion">¡El campo usuario esta vacio!</p>
            			</div>
            			<div class=" back"></div>
            			<div class=" top"></div>
            			<div class=" bottom"></div>
            			<div class=" left"></div>
            			<div class=" right"></div>
            		</div>
            	<?php endif; ?>

            	<?php if (isset($errores["loginUsernameFail"])): ?>
            		<div class=" cube-31 w-300 cube">
            			<div class=" front text-center">
            				<p class=" pt-1 mt-2 texto_validacion">¡El usuario no existe!</p>
            			</div>
            			<div class=" back"></div>
            			<div class=" top"></div>
            			<div class=" bottom"></div>
            			<div class=" left"></div>
            			<div class=" right"></div>
            		</div>
            	<?php endif; ?>

            	<div class=" cube-6 w-180 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-8 w-100 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-9 w-300 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-10 w-100 cube">
            		<div class=" front">
            			<label for="contraseña" class=" label">Contraseña</label>
            		</div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"><label for="contraseña" class=" label">Contraseña</label></div>
            	</div>
            	<div class=" cube-11 w-300 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-12 w-300 cube">
            		<div class=" front">
            			<input type="password" value="<?=empty($_COOKIE['remember_password'])? "":$_COOKIE['remember_password'] ?>"name="password" id="password" placeholder="Tu contraseña" class=" field">
            		</div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right">
            		</div>
            	</div>
              <div class=" cube-17 w-300 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class="cube-12 w-300 cube">
                <div class="front p-2" >
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="recordarme" class="custom-control-input" id="customControlValidation1" <?=$_COOKIE['remember_username']!="" ?"checked": ""; ?>>
                    <label style="color:rgba(73, 73, 73, 0.84);" class="custom-control-label label mt-1" for="customControlValidation1">
                      RECORDARME
                    </label>
                  </div>
                </div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right">
                </div>
              </div>

          		<?php if (isset($errores["loginPasswordEmpty"])): ?>
          			<div class=" cube-31 w-300 cube">
          				<div class=" front text-center" >
          					<p class=" pt-1 mt-2  texto_validacion">¡contraseña incompleta!</p>
          				</div>
          				<div class=" back"></div>
          				<div class=" top"></div>
          				<div class=" bottom"></div>
          				<div class=" left"></div>
          				<div class=" right"></div>
          			</div>
          		  <?php endif; ?>

                <?php if (isset($errores["loginPasswordFail"])): ?>
            			<div class=" cube-31 w-300 cube">
            				<div class=" front text-center" >
            					<p class=" pt-1 mt-2  texto_validacion">¡contraseña incorrecta!</p>
            				</div>
            				<div class=" back"></div>
            				<div class=" top"></div>
            				<div class=" bottom"></div>
            				<div class=" left"></div>
            				<div class=" right"></div>
            			</div>
            		  <?php endif; ?>


            	<div class=" cube-16 w-300 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-17 w-300 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class="cube-26 w-300 cube">

            		<div class="front font-weight-bold text-center pt-2" style="background-color:#f2d357; ">
                      <a  style="color:rgb(77, 77, 77); text-decoration:none;" href="recover_pass.php">¿TE OLVIDASTE LA CONTRASEÑA?</a>
                </div>
            		<div class="back"></div>
            		<div class="top"></div>
            		<div class="bottom"></div>
            		<div class="left"></div>
            		<div class="right" style="background-color:#ab9955;"></div>
            	</div>


              <div class=" cube-10 w-100 cube font-weight-bold">
                <div class=" front">
                  <a href="register.php">
                    <button id="contact-stack-button" style="background-color:grey; color:white; font-size:1em;" type="button" class=" button">REGISTRO</button>
                  </a>
              </div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right">
                  <a href="register.php"><button id="contact-stack-button" style="background-color:grey; color:white; font-size:1.5em;" type="button" class=" button">REGISTRO</button></a>
                </div>
              </div>
            	<div class=" cube-1 w-100 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-30 w-300 cube">
            		<div class=" front"></div>
            		<div class=" back"></div>
            		<div class=" top"></div>
            		<div class=" bottom"></div>
            		<div class=" left"></div>
            		<div class=" right"></div>
            	</div>
            	<div class=" cube-33 w-300 cube font-weight-bold">
            			<div class=" front">
            				<button type="submit" name="submit" id="contact-stack-button" value="enviar" class=" button">Ingresar</button>
            			</div>
            			<div class=" back"></div>
            			<div class=" top"></div>
            			<div class=" bottom"></div>
            			<div class=" left"></div>
            			<div class=" right">
            			<button type="submit" name="submit" value="enviar" id="contact-stack-button" style="background-color:red; color:yellow; font-size:1.5em;" class=" button">ENTRAR</button>
            			</div>
            		</div>
            </form>
        </div>

			<?php include("sections/footer.html") ?>

    	</div>
    </div>

    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
