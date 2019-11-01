<?php
  include("servicios.php");
  session_start();
  $jugadores = $db->traerTodos();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/rank.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/animate.css">
    <script src="js/modernizr.js"></script>
    <script src="js/wow.min.js" type="text/javascript"></script>
          <script>
          new WOW().init();
          </script>

    <script src="js/wow.min.js" type="text/javascript"></script>
          <script>
          new WOW().init();
          </script>
    <title>Ranking</title>
  </head>
  <body>

    <div class="container pb-5">
			<div class="row">
				<div class="col">
					<header class="wow bounceInLeft">
 						<div id="cd-logo" class="">
								<p class="text-center argames">RANK</p>
								<div class="text-white blockquote-footer argames_downtext">ranking of best of the best</div>
						</div>
					</header>
					<div id="cd-nav" class="font-weight-bold">
						<a href="#0" class="cd-nav-trigger">Menu<span></span></a>
						<nav id="cd-main-nav">
							<ul class="wow bounceInRight">
								<li ><a href="#cd-logo">INICIO</a></li>
								<?php if ($auth->estaLogueado()): ?>
									<li><a href="perfil.php">PERFIL</a></li>
									<li> <a href="destroy_session.php">SALIR</a></li>
								<?php else: ?>
									<li><a href="formulario_ingreso.php">INGRESAR</a></li>
									<li><a href="formulario_registro.php">REGISTRARME</a></li>
								<?php endif; ?>
							</ul>
						</nav>
					</div>

				</div>
			</div>
		</div>

    <div class="content">
      <div class="search-bar flex grow">
        <input class="search flex grow" placeholder="Search"/>
      </div>

      <div class="leaderboard flex column wrap ">
        <div class="leaderboard-table flex column ">
          <div class="leaderboard-header flex column grow">

              <!-- <div class="filter-by flex grow wrap">
                <div class="time-filter flex grow">
                  <div class="row-button pointer row-button--active align-center">Today</div>
                  <div class="row-button pointer align-center">This week</div>
                  <div class="row-button pointer align-center">All-time</div>
                </div>
                <div class="subject-filter flex grow">
                  <div class="table-tab pointer flex grow justify-center align-center tab-active">
                    <svg class="menu-link-icon" fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                    </svg>
                    Users</div>
                  <div class="table-tab pointer flex grow justify-center align-center"> <svg class="menu-link-icon" fill="#4a4a4a" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/>
                    </svg>
                    Teams</div>
                </div>
              </div> -->

              <div class="leaderboard-row flex align-center row--header" style="border-radius: 0 !important;">
                <div class="row-position">Posicion</div>
                <div class="row-collapse flex align-center">
                  <div class="row-user--header">Jugador</div>
                  <div class="row-rank--header">Rank</div>
                </div>
                <div class="row-calls">Puntos</div>
              </div>
            </div>

        <?php foreach ($jugadores as $jugador): ?>
          <div class="leaderboard-body flex column grow wow fadeIn">
            <div class="leaderboard-row flex align-center">
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


          <div class="leaderboard-footer flex align-center">
            <!-- <a class="footer-btn pointer">Next</a> -->
            Total de jugadores: <?=count($jugadores)?>
          </div>

        </div>
      </div>

      </div>

    </div>

    <script src="js/jquery-2.1.1.js"></script>
		<script src="js/main.js"></script>
    <script src="js/rank.js"></script>
    <?php include("sections/footer.html"); ?>

  </body>
</html>
