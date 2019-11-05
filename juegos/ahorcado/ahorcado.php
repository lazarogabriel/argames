<?php
  session_start();

  function imprime_palabra($vector){
    foreach ($vector as $valor) {
      echo $valor . " ";
    }
  }

  $contador=0;

 if (isset($_POST["enviar"])) {
   if (isset($_POST["letra"])) {
     if(ctype_alpha($_POST["letra"]) && strlen($_POST["letra"])==1){

       for ($i=0; $i < count($_SESSION["vector_palabra"]) ; $i++) {

          if(!strcmp($_POST["letra"], $_SESSION["vector_palabra"][$i])){

                $_SESSION["palabra_a_llenar"][$i]=$_POST["letra"];

                $contador=$contador+1;
            }
        }
        if(!$contador){
          $_SESSION["oportunidades"]=$_SESSION["oportunidades"]-1;
        }
      }else {
        $error_letra=true;
      }


    }
  }//IF DE SUBMIT

    ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="ahorcado.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="../../js/modernizr.js"></script>
		<script src="../../js/wow.min.js" type="text/javascript"></script>
	        <script>
	        new WOW().init();
	        </script>
    <title>AHORCADO</title>
  </head>
  <body>


<?php if (strcmp(implode($_SESSION["palabra_a_llenar"]),implode($_SESSION["vector_palabra"])) != 0): ?>

    <?php if($_SESSION["oportunidades"]>0): ?>
      <div class="container">

        <div class="d-flex justify-content-between bd-highlight mb-3">
            <div class="p-2 bd-highlight">
              <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
            </div>
            <div class="p-2 bd-highlight">
              <a class="btn btn-secondary" href="destroy_session.php" role="button">Salir</a>
            </div>
       </div>

        <div class="row main-card my-5 mx-1 p-3">

          <div class="col-sm-12 text-center">
            <h1 class="text-white font-weight-bold">AHORCADO</h1>
          </div>

          <div class="col-sm-12 text-center py-4">
              <div class="">
                <form class="" action="" method="post">
                  <label for="letra" class="text-secondary">Ingrese la letra</label><br>
                  <input type="text" name="letra" class="input" placeholder="Letra"><br><br>
                  <?php if ($error_letra): ?>
                    <div class="alert alert-danger" role="alert">
                        La palabra debe ser de caracter sencillo y de entre 3 y 25 caracteres.
                    </div>
                  <?php endif; ?>
                  <button type="submit" name="enviar" class="btn btn-secondary">ADIVINAR</button>
                </form>
              </div>
           </div>

     <?php endif; ?>

  <div class="col-sm-12 text-warning text-center">
      <?php if (isset($_POST["enviar"])): ?>

            <?php if ($contador > 0): ?>
                <?php imprime_palabra($_SESSION["palabra_a_llenar"]); ?><br><br>
                <div class="wow shake">HUBO COINCIDENCIA!</div>

            <?php else: ?>
              <?php imprime_palabra($_SESSION["palabra_a_llenar"]); ?><br><br>
              <span class="">NO HUBO COINCIDENCIA! Oportunidades: <?= $_SESSION["oportunidades"]?></span>
          <?php endif; ?>

        <?php else: ?>
          <?php  imprime_palabra($_SESSION["palabra_a_llenar"]); ?>
      <?php endif; ?>

      </div>
    </div>
  </div>


    <?php if ($_SESSION['oportunidades']==0): ?>
        <div class="">
          Perdiste tus oportunidades, te ahorcaron. <a href="ahorcado_inicio.php">Volver a jugar</a>
        </div>
        <?php session_destroy()?>
      <?php endif; ?>

    <?php else:?>
      <div class="">
          <h3>GANASTE! la palabra es: <?php echo "[" . implode($_SESSION["palabra_a_llenar"]) . "]";?> </h3> <a href="ahorcado_inicio.php">Volver a jugar</a>
      </div>
      <?php session_destroy(); ?>
  <?php endif;?>



  <?php include("../../sections/footer.html") ?>

  <script src="../../js/jquery-2.1.1.js"></script>
  <script src="../../js/main.js"></script>
  </body>
</html>
