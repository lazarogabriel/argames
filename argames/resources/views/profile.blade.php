@extends('layout.base')

@section('title', 'Profile')
@section('contenido')

  <div class="container emp-profile mt-md-0 wow zoomInRight">
      @if(isset($_GET["password"]))
        <form action="/profile/edit/password" method="post">
      @else
        <form action="/profile/edit/accept" method="post" enctype="multipart/form-data">
      @endif
        @csrf
          <div class="row">
              <div class="col-lg-4">
                <div class="profile-img mt-md-5 wow swing">
                    <img src="/storage/{{ $user->img }}" alt="profile_img"/>
                </div>
                @if(isset($_GET["edit"]))
                  <div class="pt-3">
                    <input type="file" name="img" class=""/>
                    @error('img')
                      <p>{{$message}}</p>
                    @enderror
                  </div>
                @endif
              </div>
              <div class="col-lg-6">
                <div class="profile-head">
                    <h5 class="">{{ $user->username }}</h5>
                    <h6>Senior</h6>   <!--TIPO DE JUGADOR, DEPENDE DE LAS VARIABLES "TIEMPO JUGADO", "SCORE".EN BASE A ESTAS VARIABLES CALCULAR. TRAINEE/JUNIOR/SEMI SENIO/SENIOR  -->
                    <p class="proile-rating">
                      RANKING:<span>8/10</span><!-- HACER UNA SUMA DE TODOS LOS SCORE Y CALCULAR RANKING-->
                    </p>
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
                      <div class="row wow fadeInUp">
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
                      <div class="row wow fadeInUp">
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
                      <div class="row wow fadeInUp">
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

                      <div class="row wow fadeInUp">
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
                      <div class="row wow fadeInUp">
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
                      <div class="row wow fadeInUp">
                          <div class="col-md-6 pb-2">
                              <label for="remember" class="pt-2">Recordarme</label>
                          </div>
                          <div class="col-md-6">
                            <input type="checkbox" class="mt-2 mb-3" {{ old('remember') ? 'checked' : '' }} disabled>
                          </div>
                      </div>
                      <div class="row wow fadeInUp">

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
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label for="password_confirmation" class="mb-0 pt-3">Confirmar contraseña</label>
                          </div>
                          <div class="col-md-6">
                              <input id="password_confirmation" type="password" name="password_confirmation" class="input_editar form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmar contraseña">
                          </div>
                      </div>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label for="current-password" class="mb-0 pt-3">Contraseña actual</label>
                          </div>
                          <div class="col-md-6">
                              <input id="current-password" type="password" name="current-password" class="input_editar form-control @error('current-password') is-invalid @enderror" placeholder="Contraseña actual">
                              @error('current-password')
                                {{$message}}
                              @enderror
                              @if(isset($_GET["password"]))
                                <button type="submit" class="btn btn-light btn-sm py-0">Aceptar</button>
                                <a href="/profile" class="btn btn-dark btn-sm py-0" role="button" >Cancelar</a>
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
                <div class="col-lg-2 text-center wow bounceInLeft">
                  <button type="submit" class="profile-edit-btn mt-3 mb-2" name="" value="ACEPTAR"/>ACEPTAR</button>
                  <button class="profile-edit-btn mb-2" style="background-color:transparent; border:2px solid grey;">
                    <a href="/profile" style="text-decoration:none;color:#DDDDDD;">CANCELAR</a>
                  </button>
                </div>
              @endif
            </form>

            @if(!isset($_GET["edit"]) && !isset($_GET["password"]))
            <div class="col-lg-2 text-center wow bounceInLeft">
              <form class="" action="/profile/edit" method="get">
                  <input type="submit" class="profile-edit-btn mt-3 mb-2" name="edit" value="EDITAR"/>
              </form>
            </div>
            @endif

          </div>

    </div>
@endsection
