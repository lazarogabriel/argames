@extends('layouts.app')
@section('title', 'Login')

@section('content')
    <div class="container" style="min-height:46vw;">
      <div class="row align-items-center">
        <div  class="col-xl-4 col-lg-5 col-md-12 wow rubberBand ">
          <p class="text-center argames">ArGames</p>
          <footer class="text-lg-left text-sm-center blockquote-footer argames_downtext">this is argames, an argentinian games site</footer>
        </div>
        <div class="col-xl-4 col-lg-2 col-md-2"></div>
          <div class="col-xl-4 col-lg-5 col-md-10 pl-1">
            <form id="contact-stack-form" class="form wow bounceInRight" method="post">
              @csrf
              <div class="cube-1 w-100 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-2 w-100 cube">
                <div class=" front">
                  <label for="email" style="font-style:bold;" class=" label">Email</label>
                </div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-3 w-100 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right">
                  <label for="email" style="font-style:bold;" class=" label">Email</label>
                </div>
              </div>
              <div class=" cube-4 w-300 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-5 w-300 cube">
                <div class=" front">
                  <input id="email" type="text" class="field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Introduzca su E-mail">
                </div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>

              @error('email')
                  <div class=" cube-31 w-300 cube text-center">
                    <div class=" front">
                      <p class=" pt-1 mt-2 texto_validacion">{{ $message }}</p>
                    </div>
                    <div class=" back"></div>
                    <div class=" top"></div>
                    <div class=" bottom"></div>
                    <div class=" left"></div>
                    <div class=" right"></div>
                  </div>
                @enderror

              <div class=" cube-6 w-180 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-8 w-100 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-9 w-300 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-10 w-100 cube">
                <div class="front">
                  <label for="password" class="label">Contraseña</label>
                </div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"><label for="password" class=" label">Contraseña</label></div>
              </div>
              <div class=" cube-11 w-300 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-12 w-300 cube">
                <div class=" front">
                  <input id="password" type="password" class="field form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Introduzca su contraseña">
                </div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right">
                </div>
              </div>
              <div class=" cube-17 w-300 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class="cube-12 w-300 cube">
                <div class="front p-2" >


            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

                </div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right">
                </div>
              </div>

                @error('password')
                  <div class=" cube-31 w-300 cube">
                    <div class=" front text-center" >
                      <p class=" pt-1 mt-2  texto_validacion">{{$message}}</p>
                    </div>
                    <div class=" back"></div>
                    <div class=" top"></div>
                    <div class=" bottom"></div>
                    <div class=" left"></div>
                    <div class=" right"></div>
                  </div>
                @enderror

              <div class=" cube-16 w-300 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-17 w-300 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class="cube-26 w-300 cube">

                <div class="front font-weight-bold text-center pt-1" style="background-color:#f2d357; ">
                  @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                  @endif
                </div>
                <div class="back"></div>
                <div class="top"></div>
                <div class="bottom"></div>
                <div class="left"></div>
                <div class="right" style="background-color:#ab9955;"></div>
              </div>


              <div class=" cube-10 w-100 cube font-weight-bold">
                <div class=" front">
                  <a href="/register">
                    <button id="contact-stack-button" style="background-color:grey; color:white; font-size:1em;" type="button" class=" button">REGISTRO</button>
                  </a>
              </div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right">
                  <a href="/register"><button id="contact-stack-button" style="background-color:grey; color:white; font-size:1.5em;" type="button" class=" button">REGISTRO</button></a>
                </div>
              </div>
              <div class=" cube-1 w-100 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-30 w-300 cube">
                <div class=" front"></div>
                <div class=" back"></div>
                <div class=" top"></div>
                <div class=" bottom"></div>
                <div class=" left"></div>
                <div class=" right"></div>
              </div>
              <div class=" cube-33 w-300 cube font-weight-bold">
                  <div class=" front">
                    <button type="submit" class="button" name="enviar">
                        {{ __('Login') }}
                    </button>
                </div>
                  <div class=" back"></div>
                  <div class=" top"></div>
                  <div class=" bottom"></div>
                  <div class=" left"></div>
                  <div class=" right">
                    <button type="submit"  style="background-color:red; color:yellow; font-size:1.5em;" class="button">
                        {{ __('Login') }}
                    </button>
                  </div>
            </div>
          </form>
        </div>
      </div>
    </div>




@endsection
