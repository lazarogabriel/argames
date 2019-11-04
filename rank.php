<?php
  include("servicios.php");
  session_start();

    if($_POST){
      $jugador_a_buscar = trim($_POST["buscar"]);
      $jugadores = $db->traerPorUser($jugador_a_buscar);
    }else{
      $jugadores = $db->traerTodos();
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/rank.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/modernizr.js"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
          <script>
          new WOW().init();
          </script>
    <title>Ranking</title>
  </head>
  <body>
    <div class="container pb-2">
			<div class="row">
				<div class="col">
					<header class="wow fadeIn">
 						<div id="cd-logo" class="">
								<p class="text-center argames">RANK</p>
								<div class="text-white blockquote-footer argames_downtext">ranking best of the best of the betters</div>
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

    <div class="content">

      <form method="post">
        <div class="search-bar flex grow">
          <input type="text" name="buscar" class="search flex grow" placeholder="Buscar una persona"/>
        </div>
      </form>

      <div class="leaderboard flex column wrap  wow jello">
        <div class="leaderboard-table flex column">
          <div class="leaderboard-header flex column grow">
              <div class="leaderboard-row flex align-center row--header">
                 <div class="row-position pl-2">Puesto</div>
                  <div class="row-user--header pl-5">Jugador</div>
                  <div class="row-rank--header">Rank</div>
                  <div class="row-points--header ml-3 pl-5">Puntos</div>
                  <div class="row-calls"></div>
              </div>
            </div>
        <div class="leaderboard-body flex column grow">
          <?php if($_POST): ?>
            <?php if ($jugadores): ?>
              <div class="leaderboard-row flex align-center" style="background-color:#1E3344;">
                <div class="row-position"><?=$jugadores["id"]?></div>
                <div class="row-collapse flex align-center ">
                  <div class="row-caller flex">
                    <img class="avatar" src="<?="archivos_subidos/" . $jugadores["id"] . "." . $jugadores["ext_img"]?>"/>
                    <div class="row-user"><?=$jugadores["username"]?></div>
                  </div>
                  <div class="row-rank">Junior</div>
                </div>
                <div class="row-calls"><?=$jugadores["age"] ?></div>
              </div>
            <?php else: ?>
              <div class="p-3">
                <p class="text-warning">   NO SE ENCONTRARON RESULTADOS.</p>
              </div>
            <?php endif; ?>

          <?php else: ?>
            <?php foreach ($jugadores as $i => $jugador): ?>
                <div class="leaderboard-row flex align-center" style="background-color:<?=($i % 2)? "#213B4C": "#1E3344"?>;">
                  <div class="row-position"><?=$jugador["id"]?></div>
                  <div class="row-collapse flex align-center">
                    <div class="row-caller flex">
                      <img class="avatar" src="<?="archivos_subidos/" . $jugador["id"] . "." . $jugador["ext_img"]?>"/>
                      <div class="row-user"><?=$jugador["username"]?></div>
                    </div>
                    <div class="row-team"></div>
                    <div class="row-rank">Junior</div>
                  </div>
                  <div class="row-calls"><?=$jugador["age"] ?></div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
          <div class="leaderboard-footer flex align-center">
            <!-- <a class="footer-btn pointer">Next</a> -->
            Total de jugadores: <?=$_POST ? 1 :count($jugadores);?>
          </div>

        </div>
      </div>

      </div>

    </div>
    <?php include("sections/footer.html"); ?>


    <script src="js/jquery-2.1.1.js"></script>
		<script src="js/main.js"></script>
    <script src="js/rank.js"></script>

  </body>
</html>
