
 <?php
   include("servicios.php");
   session_start();

     if($_POST){
       $jugador_a_buscar = trim($_POST["buscar"]);
       $jugador = $db->traerPorUser($jugador_a_buscar);
     }else{
       $jugadores = $db->traerTodos();
     }
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta charset="utf-8">
     <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="css/reset.css">
     <link rel="stylesheet" href="css/bootstrap.css">
     <link rel="stylesheet" href="css/index.css">
     <link rel="stylesheet" href="css/animate.css">
     <link rel="stylesheet" href="/css/rank.css">
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

     <div class="container pb-5" style="min-height:27vw;">

         <form method="post" class="pb-5">
           <div class="search-bar flex grow">
             <input type="text" name="buscar" class="search flex grow" placeholder="Buscar una persona"/>
           </div>
         </form>


         <table class="table table-striped table-dark wow zoomInDown">
          <thead style="border:none;">
            <tr>
              <th></th>
              <th>Usuario</th>
              <th class="d-none d-md-block">Rank</th>
              <th>Puntos</th>
            </tr>
          </thead>
            <?php if($_POST): ?>
              <tbody>
              <?php if ($jugador): ?>
                <tr>
                  <td width="8%" class="text-center"><?=$jugador["id"] ?></td>
                  <td>
                      <div class="d-flex">
                        <div class="">
                          <img src="archivos_subidos/<?=$jugador["id"].".".$jugador["ext_img"]?>" alt="">
                        </div>
                        <div class="pl-2">
                            <span class="username"><?=$jugador["username"] ?></span> <br>
                            <small class="d-sm-block d-md-none">Junior</small>
                        </div>
                      </div>
                  </td>
                  <td class="d-none d-md-block">Junior</td>
                  <td width="8%" class="text-center"><?=$jugador["age"] ?></td>
                </tr>
              <?php endif; ?>

            <?php else: ?>
              <tbody>
              <?php foreach ($jugadores as $jugador): ?>
                <tr>
                  <td width="8%" class="text-center"><?=$jugador["id"] ?></td>
                  <td>
                      <div class="d-flex">
                        <div class="">
                          <img src="archivos_subidos/<?=$jugador["id"].".".$jugador["ext_img"]?>" alt="">
                        </div>
                        <div class="pl-2">
                            <span class="username"><?=$jugador["username"] ?></span> <br>
                            <small class="d-sm-block d-md-none">Junior</small>
                        </div>
                      </div>
                  </td>
                  <td class="d-none d-md-block">Junior</td>
                  <td width="8%" class="text-center"><?=$jugador["age"] ?></td>
                </tr>
              <?php endforeach; ?>
          <?php endif; ?>
            <tr>
            <?php if ($jugador): ?>
              <td colspan="4">Total de jugadores: <?=$_POST ? 1 :count($jugadores)?></td>
            <?php else: ?>
               <td colspan="4"><span class="text-warning">NO SE ECONTRARON RESULTADOS.</span></td>
            <?php endif; ?>
          </tr>
          </tbody>
        </table>




    </div>


     <?php include("sections/footer.html"); ?>


    <script src="js/jquery-2.1.1.js"></script>
 		<script src="js/main.js"></script>

   </body>
 </html>
