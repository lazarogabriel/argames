<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <link rel="icon" href="/images/game-pad.ico">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/plugins/wow.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>
</head>
<body class="light">
    <div id="nav" class="container">
      <div class="row">
        <div class="col">
          <header class="wow fadeIn">
            <div id="cd-logo">
                @yield("header-title")
            </div>
          </header>
          <div id="cd-nav" class="font-weight-bold ">
            <a href="#0" class="cd-nav-trigger light">Menu<span></span></a>
            <nav id="cd-main-nav">
              <ul class="wow fadeIn">
                <li><a href="/home" class="light">INICIO</a></li>
                  @guest
                    <li><a href="/login" class="light">INGRESAR</a></li>
                    <li><a href="/register" class="light">REGISTRARME</a></li>
                  @else
                    <li><a href="/profile" class="light">PERFIL</a></li>
                    <li>
                        <a class="dropdown-item light" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('SALIR') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" class="light">
                            @csrf
                        </form>
                    </li>
                  @endguest
                  <li>
                    <a>
                      <button id="theme-toggle" class="btn btn-light" type="button" style="padding:0;">
                        <i class="fa fa-tint"></i>
                      </button>
                    </a>
                  </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>


    @yield('contenido')

    <div id="footer " class="container pt-2">
      <div class="row mb-3 align-items-center wow fadeInUp">
        <div class="col-lg-10 col-md-9 col-sm-12 text-white">
         <p class="text-md-left text-center">© <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados. Hecho por <a href="#" class=" text-warning" target="_blank"><span class=" font-weight-bold argames_link light">ArGames</span></a></p>
        </div>
        <div class="col-lg-2 col-md-3  col-sm-12 copyrighy_footer justify-content-between d-flex">
          <a style="border:1.1px solid yellow; letter-spacing:0.2em;" class=" m-1 p-1 btn text-warning faqbutton footer-light light" href="/rank" role="button">RANK</a>
          <a style="letter-spacing:0.1em;" class="m-1 p-1 btn text-dark bg-warning faqbutton footer-light" href="/faqs" role="button">F.A.Qs</a>
        </div>
      </div>
    </div>

  
    <script src="{{ mix('/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins/main.js') }}"></script>

</body>
</html>
