<?php
  if(isset($_POST["enviar"])) {
    if(isset($_POST['palabra'])){
      if(ctype_alpha($_POST["palabra"]) && strlen($_POST["palabra"]) > 3 && strlen($_POST["palabra"]) < 25 ){
        session_start();

        $_SESSION['oportunidades']=6;
        $_SESSION["vector_palabra"]=str_split($_POST['palabra']);
        $random = rand(1,count($_SESSION["vector_palabra"]));

        for ($i=0; $i < count($_SESSION["vector_palabra"]); $i++) {
          $boolean=($i == $random || $i+1 == count($_SESSION["vector_palabra"]));
          $_SESSION["palabra_a_llenar"][$i]= $boolean? $_SESSION["vector_palabra"][$i]:"?";
          }

        header("Location:ahorcado.php");
        exit;
      }else {
        $error_palabra=true;
      }
    }
  }

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


     <div class="container wow fadeIn">
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
           <h1 class="input_word text-white font-weight-bold">AHORCADO</h1>
         </div>

         <div class="col-sm-12 text-center py-4">
             <div class="">
                 <form class="" action="" method="post">
                  <label for="Palabra" class="text-secondary">Ingrese una palabra</label><br>
                  <input type="password" name="palabra" class="input" placeholder="Palabra"><br><br>
                  <?php if ($error_palabra): ?>
                    <div class="alert alert-danger" role="alert">
                        La palabra debe ser de caracter sencillo y de entre 3 y 25 caracteres.
                    </div>
                  <?php endif; ?>
                  <button type="submit" name="enviar" class="btn btn-secondary">JUGAR</button>
                 </form>
             </div>
          </div>

      </div>

    </div>


     <?php include("../../sections/footer.html") ?>

     <script src="../../js/jquery-2.1.1.js"></script>
     <script src="../../js/main.js"></script>
   </body>
 </html>
