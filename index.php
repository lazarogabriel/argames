<?php
  include_once("servicios.php");
	session_start();

?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/index.css">
		<link rel="stylesheet" href="css/animate.css">
		<script src="js/modernizr.js"></script>
		<script src="js/wow.min.js" type="text/javascript"></script>
	        <script>
	        new WOW().init();
	        </script>
		<title>Inicio</title>
	</head>
	<?php if ($_SESSION): ?>
		<?php if ($_SESSION["user_object"]->getUsername() == "Lazzaro"
					  || $_SESSION["user_object"]->getUsername() == "Lore"
						|| $_SESSION["user_object"]->getUsername() == "Rich"): ?>
				<div class="p-2 bd-highlight">
					<a class="btn btn-secondary" href="admin.php" role="button">Administrar DB</a>
			 </div>
		<?php endif; ?>
	<?php endif; ?>


		<!-- <div id="welcome_card" class="wow fadeInDown bg-white">
			<p class="" id="welcome_card">BIENVENID<?=($_SESSION['genero'] == "v")? "O" : (($_SESSION['genero'] == "m")? "A":"E"); ?>  <?=$_SESSION['username'] ?></p>
		</div> -->
		<div class="container pb-5">
			<div class="row">
				<div class="col">
					<header class="wow fadeIn">
 						<div id="cd-logo" class="">
								<p class="text-center argames">ArGames</p>
								<footer class="text-white blockquote-footer argames_downtext">this is argames, an argentinian games page</footer>
						</div>
					</header>
					<div id="cd-nav" class="font-weight-bold">
						<a href="#0" class="cd-nav-trigger">Menu<span></span></a>
						<nav id="cd-main-nav">
							<ul class="wow fadeIn">
								<li ><a href="#cd-logo">INICIO</a></li>
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

		<main>
			<ul id="cd-gallery-items" class="cd-container ">
				<a href="juegos/pacman/index.html" class="anchor_img_game">
					<li class="wow pulse " style="background-image:url('imagenes/pacman_imagen_edit.webp');">
						<div class="container-games">
							<img src="imagenes/transparente.png" alt="Avatar" class="image">
								<div class="overlay container-fluid">
									<div class="row text-left text_game">
										<div class="col-12 font-weight-bold text-1">PAC MAN</div>
										<div class="col-12 text-2">This is Pacman</div>
									</div>

								</div>
					</li>
				</a>
				<a href="juegos/truco/index.html" class="anchor_img_game" >
					<li class="wow pulse" style="background-image:url('imagenes/truco_imagen_edit.jpg'); ">
						<div class="container-games">
							<img src="imagenes/transparente.png" alt="Avatar" class="image">
								<div class="overlay container-fluid">
										<div class="row text-left text_game">
											<div class="col-12 font-weight-bold text-1">TRUCO</div>
											<div class="col-12 text-2">Quier re truco!</div>
										</div>
								</div>
							</div>
					</li>
				</a>

			<a href="juegos/ahorcado/ahorcado_inicio.php" class="anchor_img_game ">
				<li class="wow pulse"	style="background-image:url('imagenes/ahorcado_imagen_edit.webp');">
					<div class="container-games">
						<img src="imagenes/transparente.png" alt="Avatar" class="image">
							<div class="overlay container-fluid">
								<div class="row text-left text_game">
									<div class="col-12 font-weight-bold text-1">AHORCADO</div>
									<div class="col-12 text-2">Adivina la palabra</div>
								</div>
							</div>
				</li>
			</a>

			<a href="juegos/ajedrez/example.html" class=" anchor_img_game">
				<li class="wow pulse" style="background-image:url('imagenes/ajedrez_imagen_edit.jpg'); ">
					<div class="container-games">
						<img src="imagenes/transparente.png" alt="Avatar" class="image">
							<div class="overlay container-fluid">
								<div class="row text-left text_game">
									<div class="col-12 font-weight-bold text-1">AJEDREZ</div>
									<div class="col-12 text-2">Maravillosa jugada</div>
								</div>
							</div>
				</li>
			</a>
			<a href="juegos/damas/index.html" class=" anchor_img_game">
				<li class="wow pulse" style="background-image:url('imagenes/damas.jpg'); ">
					<div class="container-games">
						<img src="imagenes/transparente.png" alt="Avatar" class="image">
							<div class="overlay container-fluid">
								<div class="row text-left text_game">
									<div class="col-12 font-weight-bold text-1">DAMAS</div>
									<div class="col-12 text-2">Comer o se comido</div>
								</div>
							</div>
				</li>
			</a>

			</div>
			<a href="juegos/tateti_multi/tateti.html" class=" anchor_img_game">
				<li class="wow pulse" style="background-image:url('imagenes/tateti.jpg'); ">
					<div class="container-games">
						<img src="imagenes/transparente.png" alt="Avatar" class="image">
							<div class="overlay container-fluid">
								<div class="row text-left text_game">
									<div class="col-12 font-weight-bold text-1">TATETI</div>
									<div class="col-12 text-2">Suerte para mi</div>
								</div>
							</div>
				</li>
			</a>

			</ul>
		</main>

		<?php include("sections/footer.html") ?>

		<script src="js/jquery-2.1.1.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
