<?php

	include_once("servicios.php");

	$email="";
	$errores = [];

	if($_POST){
		if($_POST["email"] == ""){
				$errores["emailEmpty"] = "No escribiste un email";
		}elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
				$errores["emailWrong"] = "El email tiene que ser un email";
		}elseif($db->traerPorEmail($_POST["email"]) == NULL ){
				$errores["emailExist"] = "El email ingresado no existe";
		}
		if(!count($errores))$ok = true;
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
		<link rel="stylesheet" href="/css/index.css">
		<link rel="stylesheet" href="css/bootstrap.css">
	  <link rel="stylesheet" href="css/animate.css">
	  <link rel="stylesheet" href="css/formulario_estilos.css">
	  <script src="js/wow.min.js" type="text/javascript"></script>
    <script>
    	new WOW().init();
    </script>
</head>
<body>

	<nav id="nav" class="">
		<div class="container">
		 <div class="row">
			 <div class="col">
				 <header class="wow fadeIn">
						 <div id="cd-logo" class="">
							 <p class="text-center argames">ArGames</p>
							 <footer class="text-white blockquote-footer argames_downtext">this is argames, an argentinian games site</footer>
					 </div>
				 </header>
				 <div id="cd-nav" class="font-weight-bold">
					 <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
					 <nav id="cd-main-nav">
						 <ul class="wow fadeIn">
							 <li ><a href="index.php">INICIO</a></li>
							 <?php if ($auth->estaLogueado()): ?>
								 <li><a href="perfil.php">PERFIL</a></li>
								 <li> <a href="destroy_session.php">SALIR</a></li>
							 <?php else: ?>
								 <li><a href="login.php">INGRESAR</a></li>
								 <li><a href="register.php">REGISTRARME</a></li>
							 <?php endif; ?>
						 </ul>
					 </nav>
				 </div>
			 </div>
		 </div>
	 </div>
	</nav>

	<header class="container">
		<div class="row">
			<div class="col text-center">
				<h2 class="FAQ_text font-weight-bold  wow jello">Recuperar contraseña</h2>
				<h2 class="FAQ_SUBTEXT wow fadeIn">Mandanos un email y a la mayor brevedad te contacatamos para poder recuperarla</h2>
			</div>
		</div>
	</header>

	<section id="principal" class="">
		<div class="container d-flex justify-content-around align-items-center" style="height:80vh;">
			<div class="row pl-5 ml-3">
				<div class="col pl-5 ml-5">
					<form id="contact-stack-form" class="form wow bounceInRight" method="post">
						<div class="cube-2 w-100 cube">
							<div class=" front">
								<label for="email" style="font-style:bold;" class=" label">Email</label>
							</div>
							<div class="back"></div>
							<div class="top"></div>
							<div class="bottom"></div>
							<div class="left"></div>
							<div class="right"></div>
						</div>
						<div class="cube-3 w-100 cube">
						</div>
						<div class="cube-4 w-300 cube">
							<div class="front"></div>
							<div class="back"></div>
							<div class="top"></div>
							<div class="bottom"></div>
							<div class="left"></div>
							<div class="right"></div>
						</div>
						<div class="cube-12 w-300 cube">
							<div class="front">
								<input type="email" value="<?=$email ?>" name="email" id="email" placeholder="Ingresa tu email" class=" field" required>
							</div>
							<div class="back"></div>
							<div class="top"></div>
							<div class="bottom"></div>
							<div class="left"></div>
							<div class="right">
							</div>
						</div>
						<?php if ($errores["emailEmpty"]): ?>
							<div class=" cube-31 w-300 cube">
								<div class=" front text-center">
									<p class="pt-1 mt-2 texto_validacion"><?=$errores["emailEmpty"] ?></p>
								</div>
								<div class=" back"></div>
								<div class=" top"></div>
								<div class=" bottom"></div>
								<div class=" left"></div>
								<div class=" right"></div>
							</div>

						<?php endif; ?>
						<?php if ($errores["emailWrong"]): ?>
							<div class=" cube-31 w-300 cube">
								<div class=" front text-center">
									<p class="pt-1 mt-2 texto_validacion"><?=$errores["emailWrong"]?></p>
								</div>
								<div class=" back"></div>
								<div class=" top"></div>
								<div class=" bottom"></div>
								<div class=" left"></div>
								<div class=" right"></div>
							</div>

						<?php endif; ?>
						<?php if ($errores["emailExist"]): ?>
							<div class=" cube-31 w-300 cube">
								<div class=" front text-center">
									<p class="pt-1 mt-2 texto_validacion"><?= $errores["emailExist"] ?></p>
								</div>
								<div class=" back"></div>
								<div class=" top"></div>
								<div class=" bottom"></div>
								<div class=" left"></div>
								<div class=" right"></div>
							</div>
						<?php endif; ?>
						<?php if ($ok): ?>
							<div class=" cube-31 w-300 cube">
								<div class=" front text-center">
									<p class="pt-1 mt-2">Por favor confirma el cambio en tu email</p>
								</div>
								<div class=" back"></div>
								<div class=" top"></div>
								<div class=" bottom"></div>
								<div class=" left"></div>
								<div class=" right"></div>
							</div>
						<?php endif; ?>

						<div class=" cube-33 w-300 cube font-weight-bold">
								<div class=" front">
									<button type="submit" name="submit" id="contact-stack-button" value="enviar" class=" button">RECUPEAR</button>
								</div>
								<div class=" back"></div>
								<div class=" top"></div>
								<div class=" bottom"></div>
								<div class=" left"></div>
								<div class=" right bg-danger"></div>
							</div>
					</form>
				</div>
			</div>
    </div> <!-- CIERRE DE CONTAINER PRINCIPAL-->
	</section>


		<?php include("sections/footer.html") ?>
		<script src="js/main.js"></script>
		<script src="js/jquery-2.1.1.js"></script>


  </body>
</html>
