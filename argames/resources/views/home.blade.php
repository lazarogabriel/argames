@extends('layout.base')

@section('title', 'Argames - Inicio')

  @section('header-title')
    <p class="text-center argames">ArGames </p>
    <p class="text-white blockquote-footer argames_downtext">this is argames, an argentinian games site</p>
  @endsection

@section('contenido')
    <main class="mt-5">
      <ul id="cd-gallery-items" class="cd-container">
        <a href="/pacman" class="anchor_img_game">
          <li class="wow pulse " style="background-image:url('/images/pacman_imagen_edit.webp');">
            <div class="container-games">
              <img src="images/transparente.png" alt="Avatar" class="image">
                <div class="overlay container-fluid">
                  <div class="row text-left text_game">
                    <div class="col-12 font-weight-bold text-1">PAC MAN</div>
                    <div class="col-12 text-2">This is Pacman</div>
                  </div>
                </div>
            </div>
          </li>
        </a>
        <a href="/truco" class="anchor_img_game">
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

      <a href="/ahorcado" class="anchor_img_game ">
        <li class="wow pulse"	style="background-image:url('images/ahorcado_imagen_edit.webp');">
          <div class="container-games">
            <img src="images/transparente.png" alt="Avatar" class="image">
              <div class="overlay container-fluid">
                <div class="row text-left text_game">
                  <div class="col-12 font-weight-bold text-1">AHORCADO</div>
                  <div class="col-12 text-2">Adivina la palabra</div>
                </div>
              </div>
          </div>
        </li>
      </a>

      <a href="/ajedrez" class=" anchor_img_game">
        <li class="wow pulse" style="background-image:url('images/ajedrez_imagen_edit.jpg'); ">
          <div class="container-games">
            <img src="images/transparente.png" alt="Avatar" class="image">
              <div class="overlay container-fluid">
                <div class="row text-left text_game">
                  <div class="col-12 font-weight-bold text-1">AJEDREZ</div>
                  <div class="col-12 text-2">Maravillosa jugada</div>
                </div>
              </div>
          </div>
        </li>
      </a>
      <a href="/damas" class=" anchor_img_game">
        <li class="wow pulse" style="background-image:url('images/damas.jpg'); ">
          <div class="container-games">
            <img src="images/transparente.png" alt="Avatar" class="image">
              <div class="overlay container-fluid">
                <div class="row text-left text_game">
                  <div class="col-12 font-weight-bold text-1">DAMAS</div>
                  <div class="col-12 text-2">Comer o se comido</div>
                </div>
              </div>
            </div>
        </li>
      </a>

        <a href="/tateti" class=" anchor_img_game">
          <li class="wow pulse" style="background-image:url('images/tateti.jpg'); ">
            <div class="container-games">
              <img src="images/transparente.png" alt="Avatar" class="image">
                <div class="overlay container-fluid">
                  <div class="row text-left text_game">
                    <div class="col-12 font-weight-bold text-1">TATETI</div>
                    <div class="col-12 text-2">Suerte para mi</div>
                  </div>
                </div>
            </div>
          </li>
        </a>

      </ul>
    </main>
    
@endsection
