@extends('layouts.app')

@section('title', 'Registro')

@section('content')

    <div class="container">
      <div class="row align-items-center">

        <div class="col-xl-4 col-lg-5 col-md-12 ">
          <div class="container">

            <div class="row wow rubberBand">
              <p class=" text-center argames ">ArGames</p>
              <footer class="blockquote-footer argames_downtext">this is argames, an argentinian games site</footer>
            </div>
            <div class="row">
              <img src="/images/balls_colision.gif" class="img-fluid mt-4 float-left" alt="imagen_de_un_metegol" height="">
            </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-2 col-md-2"></div>

        <div class="col-xl-4 col-lg-5 col-md-10 ">

          <form id="contact-stack-form" class="form wow slideInRight" action="{{ route('register') }}"  method='POST' enctype="multipart/form-data">
              <div class="cube-1 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-2 w-100 cube">
                <div class="front">
                  <label for="name" class="label">{{ __('Name') }}</label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-3 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-4 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-5 w-300 cube">
                <div class="front">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror field" placeholder="Tu nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>

                <!-- RESERVADO PARA VALIDACIONES -->
              @error('name')
                <div class="cube-31 w-300 cube text-center wow slideInRight">
                  <div class="front">
                    <p class="pt-2  texto_validacion">{{ $message }}</p>
                  </div>
                  <div class="back"></div>
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              @enderror
              <!-- RESERVADO PARA VALIDACIONES -->

              <div class="cube-6 w-180 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-8 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-9 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-10 w-100 cube">
                <div class="front">
                  <label for="username" class="label">{{ __('Username') }}</label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-11 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-12 w-300 cube">
                <div class="front">
                  <input id="username" type="text" name="username" value="{{ old('username') }}"  placeholder="Un nombre de usuario" class="field form-control @error('username') is-invalid @enderror" required autocomplete="username" autofocus>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>

              <!-- RESERVADO PARA VALIDACIONES -->
              @error('username')
              <div class="cube-31 w-300 cube text-center wow slideInRight">
                  <div class="front">
                    <p class="pt-2  texto_validacion">{{ $message }}</p>
                  </div>
                  <div class="back"></div>
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              @enderror
            <!-- RESERVADO PARA VALIDACIONES -->

              <div class="cube-13 w-100 cube">
                <div class="top"></div>
              </div>
              <div class="cube-14 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-15 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-10 w-100 cube">
                <div class="front">
                  <label for="email" class="label" style="text-align:center;">{{ __('E-Mail Address') }}</label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-11 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-12 w-300 cube">
                <div class="front">
                  <input id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Un correo electronico" class="form-control @error('email') is-invalid @enderror field"  required autocomplete="email">
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right">
                </div>
              </div>
              <div class="cube-23 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>

              <!-- RESERVADO PARA VALIDACIONES -->
              @error('email')
                <div class="cube-31 w-300 cube text-center wow slideInRight">
                  <div class="front">
                    <p class="pt-2  texto_validacion">{{ $message }}</p>
                  </div>
                  <div class="back"></div>
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              @enderror
            <!-- RESERVADO PARA VALIDACIONES -->

              <div class="cube-24 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-25 w-100 cube">
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
              </div>
              <div class="cube-29 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-30 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-1 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-2 w-100 cube">
                <div class="front">
                  <label for="genre" class="label">{{ __('Genre') }}</label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-3 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-13 w-100 cube">
                <div class="front">
                    <label for="varon" class="label" style="text-align:center;">
                      Varon &nbsp;<input class="radio_boton" type="radio" name="gen" value="v">
                    </label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-14 w-100 cube">
                <div class="front">
                  <label for="mujer" class="label" style="text-align:center;">
                    Mujer &nbsp;
                    <input class="radio_boton" type="radio" name="gen" value="m">
                  </label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-15 w-100 cube">
                <div class="front">
                  <label for="otro" class="label" style="text-align:center;">
                    Otro &nbsp;<input class="radio_boton" type="radio" name="genre" value="o" checked>
                  </label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-2 w-100 cube">
              <div class="front">
              <label for="age" class="label">Edad</label>
              </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-3 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-2 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-24 w-100 cube">
                <div class="front">
                  <input id="age" type="number" name="age" value="{{ old('age') }}" class="field form-control @error('age') is-invalid @enderror" placeholder="Tu edad" require autocomplete="age" autofocus>
                 </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-3 w-100 cube">
              </div>

              <!-- RESERVADO PARA VALIDACIONES -->
              @error('age')
                <div class="cube-31 w-300 cube text-center wow slideInRight">
                  <div class="front">
                    <p class="pt-2  texto_validacion">{{ $message }}</p>
                  </div>
                  <div class="back"></div>
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              @enderror
              <!-- RESERVADO PARA VALIDACIONES -->

              <div class="cube-1 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-2 w-100 cube">
                <div class="front">
                  <label for="img" class="label">{{ __('Img') }}</label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-3 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-5 w-300 cube">
                <div class="front custom-file">
                  <div class="custom-file mt-2 ">
                    <input id="img" type="file" name="img" style="background-color:#f5a741; border:none;"  class="custom-file-input form-control @error('img') is-invalid @enderror" lang="es"/>
                    <label class="custom-file-label" style="background:#f5a741;color:black; margin-right: 10px;border:none;" for="customFileLang">Seleccionar foto de perfil</label>
                  </div>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>

              <!-- RESERVADO PARA VALIDACIONES -->
              @error('img')
                <div class="cube-31 w-300 cube text-center wow slideInRight">
                  <div class="front">
                    <p class="pt-2  texto_validacion">{{ $message }}</p>
                  </div>
                  <div class="back"></div>
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              @enderror
              <!-- RESERVADO PARA VALIDACIONES -->

              <div class="cube-2 w-100 cube">
                <div class="front">
                <label for="password" class="label">{{ __('Password') }}</label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-3 w-100 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-4 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-5 w-300 cube">
                <div class="front">
                  <input type="password" name="password" id="password" placeholder="Una contraseña" class="field form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>

              <!-- RESERVADO PARA VALIDACIONES -->
              @error('password')
                <div class="cube-31 w-300 cube text-center wow slideInRight">
                  <div class="front ">
                    <p class="pt-2 texto_validacion">{{ $message }}</p>
                  </div>
                  <div class="back"></div>
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
              @enderror
              <!-- RESERVADO PARA VALIDACIONES -->

              <div class="cube-26 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-28 w-100 cube">
                <div class="front">
                <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-29 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-30 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-5 w-300 cube">
                <div class="front">
                  <input id="password-confirm" type='password' name='password_confirmation' placeholder="Confirmar contraseña" class="field" required autocomplete="new-password">
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>

              <div class="cube-32 w-300 cube">
                <div class="front"></div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
              <div class="cube-33 w-300 cube">
                  <div class="front">
                    <button type="submit"  id="contact-stack-button" class="button">
                      {{ __('Register') }}
                    </button>
                  </div>
                  <div class="back"></div>
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
                </form>
              </div>

            </div>
        </div>

@endsection
