@extends('layouts.app')

@section('title', 'ArGames - Registro')

@section('content')

    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-4 col-lg-5 col-md-12 ">
          <div class="container">

            <div class="text-center wow rubberBand">
              <p class=" argames">ArGames</p>
              <p class="blockquote-footer text-light">this is argames, an argentinian games site</p>
            </div>
            <div class="row d-none d-md-block">
              <img src="/images/balls_colision.gif" class="img-fluid mt-4 float-left" alt="imagen_de_un_metegol">
            </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-2 col-md-2"></div>

        <div class="col-xl-4 col-lg-5 col-md-10 ">

          <form id="registerForm" class="form wow slideInRight" action="{{ route('register') }}"  method='POST' enctype="multipart/form-data">
            @csrf
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
                <div id="error_name" class="cube-31 w-300 cube text-center wow slideInRight" style="display: none;">
                  <div class="front">
                    <p class="pt-2  texto_validacion">Nombre incorrecto.</p>
                  </div>
                  <div class="back"></div>
                  <div class="top"></div>
                  <div class="bottom"></div>
                  <div class="left"></div>
                  <div class="right"></div>
                </div>
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
              <div id="error_username" class="cube-31 w-300 cube text-center wow slideInRight" style="display: none;">
                <div class="front">
                  <p class="pt-2  texto_validacion">Username incorrecto.</p>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
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
                  <label for="email" class="label" style="text-align:center;">{{ __('E-Mail') }}</label>
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
              <div id="error_email" class="cube-31 w-300 cube text-center wow slideInRight" style="display: none;">
                <div class="front">
                  <p class="pt-2  texto_validacion">Email incorrecto.</p>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
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
                      Varon &nbsp;
                      <input class="radio_boton" type="radio" name="genre" value="v">
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
                    <input class="radio_boton" type="radio" name="genre" value="m">
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
                    Otro &nbsp;
                    <input class="radio_boton" type="radio" name="genre" value="o">
                  </label>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>

              <!-- RESERVADO PARA VALIDACIONES -->
              @error('genre')
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
              <div id="error_age" class="cube-31 w-300 cube text-center wow slideInRight" style="display: none;">
                <div class="front">
                  <p class="pt-2  texto_validacion">La edad debe ser de entre 7 y 100.</p>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
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
                  <label for="img" class="label">{{ __('Image') }}</label>
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
              <div id="error_password" class="cube-31 w-300 cube text-center wow slideInRight" style="display: none;">
                <div class="front">
                  <p class="pt-2  texto_validacion">Constraseña invalida.</p>
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>
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
                <label for="password-confirm" class="label">{{ __('Confirm') }}</label>
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
                  <input id="password_confirmation" type='password' name='password_confirmation' placeholder="Confirmar contraseña" class="field form-control " required autocomplete="new-password">
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right"></div>
              </div>

              <div id="error_confirm_password" class="cube-31 w-300 cube text-center wow slideInRight" style="display: none;">
                <div class="front">
                  <p class="pt-2  texto_validacion">Las constraseñas no coinciden.</p>
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
