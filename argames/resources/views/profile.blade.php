@extends('layout.base')

@section('title', 'Profile')


  @section('header-title')
    <p class="text-left pt-4 wow bounceInRight" style="font-size:2em;color:white;"> 
      <i class="fas fa-arrow-left" onclick="window.history.back();"></i>
      <span class="argames" style="font-size:1.6em;">Perfil</span> 
    </p>
  @endsection
  

@section('contenido')
  <div class="container emp-profile mt-md-0 wow fadeIn" style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
    <form action="/profile/edit/{{ (isset($_GET["password"])) ? "password": "accept"}} " method="post" enctype="multipart/form-data">
      
        @csrf
          <div class="row">
              <div class="col-lg-4">
                <div class="profile-img">
                  <img id="profile-img-tag" class="file-upload-image mt-4 mt-md-0" src="/storage/{{ $user->img }}" alt="profile_img"/>
                  <div class="text-center">
                      <h1 class="font-weight-bold mb-0 pt-1">{{ $user->username }} </h1>
                       <!--TIPO DE JUGADOR, DEPENDE DE LAS VARIABLES "TIEMPO JUGADO", "SCORE".EN BASE A ESTAS VARIABLES CALCULAR. TRAINEE/JUNIOR/SEMI SENIO/SENIOR  -->
                      <p class="text-warning">Senior</p>
                  </div>
                </div>
                @if(isset($_GET["edit"]))
                  <button name="img"  type="button" class="file-upload-btn mb-3" onclick="$('.file-upload-input').trigger( 'click' )" style="border-radius:100px;">Selecctionar imagen</button>
                  @error('img')
                    <p>{{$message}}</p>
                  @enderror
                @endif
              </div>
              <div class="col-lg-6">
                <div class="profile-head">
                  <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mis datos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mi rank</a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-12">
                  <div class="tab-content profile-tab " id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row ">
                          <div class="col-md-6 ">
                              <label for="">ID Usuario</label>
                          </div>
                          <div class="col-md-6 ">
                              {{ $user->id }}
                          </div>
                      </div>
                      <div class="row ">
                          <div class="col-md-6 ">
                              <label for="username">Nombre de usuario</label>
                          </div>
                          <div class="col-md-6 ">
                            @if (isset($_GET["edit"]))
                              <input id="username" type="text" name="username" class="input_editar form-control @error('username') is-invalid @enderror" value="{{ old('username') ? old('username'): $user->username}}">
                              @error('username')
                                {{$message}}
                              @enderror
                            @else
                                <p>{{$user->username}}</p>
                             @endif
                          </div>
                      </div>
                      <div class="row ">
                          <div class="col-md-6">
                              <label for="name">Nombre</label>
                          </div>
                          <div class="col-md-6">
                            @if (isset($_GET["edit"]))
                              <input id="name" type="text" name="name" class="input_editar form-control @error('name') is-invalid @enderror" value="{{ old('name') ? old('name'): $user->name}}">
                              @error('name')
                                {{$message}}
                              @enderror
                            @else
                                <p>{{$user->name}}</p>
                             @endif
                          </div>
                      </div>
                      <div class="row ">
                          <div class="col-md-6">
                              <label for="email">Email</label>
                          </div>
                          <div class="col-md-6">
                            @if (isset($_GET["edit"]))
                              <input id="email" type="text" name="email" class="input_editar form-control @error('email') is-invalid @enderror" value="{{ old('email') ? old('email'): $user->email}}">
                                @error('email')
                                {{$message}}
                                @enderror
                            @else
                                <p>{{$user->email}}</p>
                             @endif
                          </div>
                      </div>

                      <div class="row ">
                          <div class="col-md-6">
                              <label for="age">Edad</label>
                          </div>
                          <div class="col-md-6">
                            @if (isset($_GET["edit"]))
                              <input id="age" type="number" name="age" class="input_editar form-control @error('age') is-invalid @enderror" value="{{ old('age') ? old('age'): $user->age}}">
                              @error('age')
                                {{$message}}
                              @enderror
                            @else
                                <p>{{$user->age}}</p>
                             @endif
                          </div>
                      </div>
                      <div class="row ">
                        <div class="col-md-6">
                          <label for="genre">Genero</label>
                        </div>
                        <div class="col-md-6">
                          @if (isset($_GET["edit"]))
                            <input id="genre" class="radio_boton" type="radio" name="genre" value="Varon" {{ ($user->genre == "Varon")? 'checked':'' }}> Varon&nbsp;
                            <input id="genre" class="radio_boton" type="radio" name="genre" value="Mujer" {{ ($user->genre == "Mujer")? 'checked':'' }}> Mujer&nbsp;
                            <input id="genre" class="radio_boton" type="radio" name="genre" value="Otro" {{ ($user->genre == "Otro") ? 'checked':'' }}> Otro
                          @else
                            <p>{{($user->genre == "Varon")? "Varon" : (($user->genre == "Mujer")? "Mujer":"Otro")}} </p>
                          @endif
                        </div>
                      </div>
                      <div class="row ">
                          <div class="col-md-6 pb-2">
                              <label for="remember" class="pt-2">Recordarme</label>
                          </div>
                          <div class="col-md-6">
                            <input type="checkbox" class="mt-2 mb-3" {{ old('remember') ? 'checked' : '' }} disabled>
                          </div>
                      </div>
                      <div class="row ">

                          <div class="col-md-6">
                              <label for="password" class="mb-0 pt-3">Contraseña</label>
                          </div>
                          <div class="col-md-6">
                            @if (isset($_GET["password"]))
                                <input id="password" type="password" name="password" class="input_editar form-control @error('password') is-invalid @enderror" placeholder="Nueva contraseña">
                                @error('password')
                                  {{$message}}
                                @enderror
                              @else
                                <p class="pt-3">
                                  @for($i = 0; $i < 25; $i++)&#8226;@endfor
                                  @if(isset($_GET["edit"]))
                                    <a href="/profile/edit?password" class="btn btn-warning btn-sm py-0 ml-2" role="button" aria-pressed="true">Editar</a>
                                  @endif
                                </p>
                             @endif
                          </div>

                      </div>

                    @if (isset($_GET["password"]))
                      <div class="row ">
                          <div class="col-md-6">
                              <label for="password_confirmation" class="mb-0 pt-3">Confirmar contraseña</label>
                          </div>
                          <div class="col-md-6">
                              <input id="password_confirmation" type="password" name="password_confirmation" class="input_editar form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmar contraseña">
                          </div>
                      </div>
                      <div class="row ">
                          <div class="col-md-6">
                              <label for="current-password" class="mb-0 pt-3">Contraseña actual</label>
                          </div>
                          <div class="col-md-6">
                              <input id="current-password" type="password" name="current-password" class="input_editar form-control @error('current-password') is-invalid @enderror" placeholder="Contraseña actual">
                              @error('current-password')
                                {{$message}}
                              @enderror
                              @if(isset($_GET["password"]))
                              <div class="d-flex mt-3 mb-2 justify-content-around">
                                <button type="submit" class="btn btn-light btn-sm py-0  px-4">Aceptar</button>
                                <a href="/profile" class="btn btn-dark btn-sm py-0 px-4" role="button" >Cancelar</a>

                              </div>
                              @endif

                          </div>
                      </div>
                     @endif
                  </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="row">
                          <div class="col-md-6">
                              <label for="">Experiencia</label>
                          </div>
                          <div class="col-md-6">
                              <p>Senior</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="">Tiempo jugado</label>
                          </div>
                          <div class="col-md-6">
                              <p>01:03:30</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="">Veces jugadas</label>
                          </div>
                          <div class="col-md-6">
                              <p>7</p>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <label for="">Veces ingresadas</label>
                          </div>
                          <div class="col-md-6">
                              <p>21</p>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @if(isset($_GET["edit"]))
                <div class="col-lg-2 text-center">
                  <button type="submit" class="profile-edit-btn mt-3 mb-2" name="" value="ACEPTAR"/>ACEPTAR</button>
                  <button class="profile-edit-btn mb-2" style="background-color:transparent; border:2px solid grey;">
                    <a href="/profile" style="text-decoration:none;color:#808080;">CANCELAR</a>
                  </button>
                </div>
              @endif
            </form>

            @if(!isset($_GET["edit"]) && !isset($_GET["password"]))
            <div class="col-lg-2 text-center">
              <form class="" action="/profile/edit" method="get">
                  <input type="submit" class="profile-edit-btn mt-3 mb-2" name="edit" value="EDITAR"/>
              </form>
            </div>
            @endif

          </div>

    </div>
@endsection
