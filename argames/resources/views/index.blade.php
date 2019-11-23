@extends('layout.base')

@section('title', 'Inicio')
@section('contenido')


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
                <li><a href="#cd-logo">INICIO</a></li>
                <?php //if ($auth->estaLogueado()): ?>
                  <li><a href="perfil.php">PERFIL</a></li>
                  <li> <a href="destroy_session.php">SALIR</a></li>
                <?php //else: ?>
                  <li><a href="login.php">INGRESAR</a></li>
                  <li><a href="register.php">REGISTRARME</a></li>
                <?php //endif; ?>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>

    <main>
      <ul id="cd-gallery-items" class="cd-container">
        <a href="juegos/pacman/index.html" class="anchor_img_game">
          <li class="wow pulse " style="background-image:url('/images/pacman_imagen_edit.webp');">
            <div class="container-games">
              <img src="images/transparente.png" alt="Avatar" class="image">
                <div class="overlay container-fluid">
                  <div class="row text-left text_game">
                    <div class="col-12 font-weight-bold text-1">PAC MAN</div>
                    <div class="col-12 text-2">This is Pacman</div>
                  </div>

                </div>
          </li>
        </a>
        <a href="juegos/truco/index.html" class="anchor_img_game" >
          <li class="wow pulse" style="background-image:url('images/truco_imagen_edit.jpg'); ">
            <div class="container-games">
              <img src="images/transparente.png" alt="Avatar" class="image">
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
        <li class="wow pulse"	style="background-image:url('images/ahorcado_imagen_edit.webp');">
          <div class="container-games">
            <img src="images/transparente.png" alt="Avatar" class="image">
              <div class="overlay container-fluid">
                <div class="row text-left text_game">
                  <div class="col-12 font-weight-bold text-1">AHORCADO</div>
                  <div class="col-12 text-2">Adivina la palabra</div>
                </div>
              </div>
        </li>
      </a>

      <a href="juegos/ajedrez/example.html" class=" anchor_img_game">
        <li class="wow pulse" style="background-image:url('images/ajedrez_imagen_edit.jpg'); ">
          <div class="container-games">
            <img src="images/transparente.png" alt="Avatar" class="image">
              <div class="overlay container-fluid">
                <div class="row text-left text_game">
                  <div class="col-12 font-weight-bold text-1">AJEDREZ</div>
                  <div class="col-12 text-2">Maravillosa jugada</div>
                </div>
              </div>
        </li>
      </a>
      <a href="juegos/damas/index.html" class=" anchor_img_game">
        <li class="wow pulse" style="background-image:url('images/damas.jpg'); ">
          <div class="container-games">
            <img src="images/transparente.png" alt="Avatar" class="image">
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
        <li class="wow pulse" style="background-image:url('images/tateti.jpg'); ">
          <div class="container-games">
            <img src="images/transparente.png" alt="Avatar" class="image">
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

    <?php //include("sections/footer.html") ?>

    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/main.js"></script>
@endsection
