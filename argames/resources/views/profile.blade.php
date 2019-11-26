@extends('layout.base')

@section('title', 'Profile')
@section('contenido')

  <div class="container emp-profile mt-md-0 wow zoomInRight">
      <form action="/profile/edit/accept" method="post" enctype="multipart/form-data">
        @csrf
          <div class="row">
              <div class="col-lg-4">
                <div class="profile-img mt-md-5 wow swing">
                    <img src="/storage/{{ $user->img }}" alt="profile_img"/>
                </div>
                @if(isset($_GET["edit"]))
                  <div class="file btn btn-lg btn-primary">
                      Cambiar foto
                    <input type="file" name="imagen" class="btn btn-warning"/>
                    @error('image')
                      Error al editar la foto
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
                              <label for="">Nombre de usuario</label>
                          </div>
                          <div class="col-md-6 ">
                            @if (isset($_GET["edit"]))
                              <input type="text" name="username" class="input_editar" value="{{ old('username') ? old('username'): $user->username}}">
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
                              <label for="">Nombre</label>
                          </div>
                          <div class="col-md-6">
                            @if (isset($_GET["edit"]))
                              <input type="text" name="name" class="input_editar" value="{{ old('name') ? old('name'): $user->name}}">
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
                              <label for="">Email</label>
                          </div>
                          <div class="col-md-6">
                            @if (isset($_GET["edit"]))
                              <input type="text" name="email" class="input_editar" value="{{ old('email') ? old('email'): $user->email}}">
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
                              <label for="">Genero</label>
                          </div>
                          <div class="col-md-6">
                            @if (isset($_GET["edit"]))
                              <input class="radio_boton" type="radio" name="genre" value="v" {{ ($user->genre == "Varon")? 'checked':'' }}> Varon&nbsp;
                              <input class="radio_boton" type="radio" name="genre" value="m" {{ ($user->genre == "Mujer")? 'checked':'' }}> Mujer&nbsp;
                              <input class="radio_boton" type="radio" name="genre" value="o" {{ ($user->genre == "Otro")? 'checked':'' }}> Otro
                            @else
                                <p>{{($user->genre == "v")? "Varon" : (($user->genre == "m")? "Mujer":"Otro")}} </p>
                             @endif
                          </div>
                      </div>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label for="">Edad</label>
                          </div>
                          <div class="col-md-6">
                            @if (isset($_GET["edit"]))
                              <input type="number" name="age" class="input_editar" value="{{ old('age') ? old('age'): $user->age}}">
                              @error('age')
                                {{$message}}
                              @enderror
                            @else
                                <p>{{$user->age}}</p>
                             @endif
                          </div>
                      </div>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6 pb-2">
                              <label for="">Recordarme</label>
                          </div>
                          <div class="col-md-6">
                            <input type="checkbox" class="mt-2 mb-3" {{ old('remember') ? 'checked' : '' }} disabled>
                          </div>
                      </div>
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label for="">Contraseña</label>
                          </div>
                          <div class="col-md-6">
                            @if (isset($_GET["edit"]))
                                <input type="password" name="password" class="input_editar">
                              @else
                                <p>
                                @for($i = 0; $i < 15; $i++)
                                  &#8226;
                                @endfor
                                </p>
                             @endif
                          </div>
                      </div>
                    @if (isset($_GET["edit"]))
                      <div class="row wow fadeInUp">
                          <div class="col-md-6">
                              <label for="">Confirmar contraseña</label>
                          </div>
                          <div class="col-md-6">
                              <input type="password" name="cPassword" class="input_editar" value="">
                              @error('cPassword')
                                {{$message}}
                              @enderror
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
              @if($_GET)
                <div class="col-lg-2 text-center wow bounceInLeft">
                  <input type="submit" class="profile-edit-btn mt-3 mb-2" name="" value="ACEPTAR"/>
                </div>
              @endif
            </form>

            @if(!$_GET)
            <div class="col-lg-2 text-center wow bounceInLeft">
              <form class="" action="/profile/edit" method="get">
                  <input type="submit" class="profile-edit-btn mt-3 mb-2" name="edit" value="EDITAR"/>
              </form>
            </div>
            @endif

          </div>

    </div>

@endsection
