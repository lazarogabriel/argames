<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <script type="text/javascript" src="{{ URL::asset('js/plugins/wow.min.js') }}"></script>
    <script>
      new WOW().init();
    </script>
</head>
<body>
    <div id="nav" class="container pb-5">
      <div class="row">
        <div class="col">
          <header class="wow fadeIn">
            <div id="cd-logo" class="">
                <p class="text-center argames">ArGames</p>
                <footer class="text-white blockquote-footer argames_downtext">this is argames, an argentinian games site</footer>
            </div>
          </header>
          <div id="cd-nav" class="font-weight-bold">
            <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
            <nav id="cd-main-nav">
              <ul class="wow fadeIn">
                <li><a href="/home">INICIO</a></li>
                  @guest
                    <li><a href="/login">INGRESAR</a></li>
                    <li><a href="/register">REGISTRARME</a></li>
                  @else
                    <li><a href="/profile">PERFIL</a></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            {{ __('SALIR') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                  @endguest
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>


    @yield('contenido')

    <div id="footer" class="container pt-2">
      <div class="row mb-3 align-items-center wow fadeInUp">
        <div class="col-lg-10 col-md-9 col-sm-12 text-white">
         <p class="text-md-left text-center">© <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados. Hecho por <a href="#" class=" text-warning" target="_blank"><span class=" font-weight-bold argames_link">ArGames</span></a></p>
        </div>
        <div class="col-lg-2 col-md-3  col-sm-12 copyrighy_footer justify-content-between d-flex">
            <a style="border:1.1px solid yellow; letter-spacing:0.2em;" class=" m-1 p-1 btn text-warning faqbutton" href="/rank" role="button">RANK</a>
          <a style="letter-spacing:0.1em;" class="m-1 p-1 btn text-dark bg-warning faqbutton" href="/faqs" role="button">F.A.Qs</a>
        </div>
      </div>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins/main.js') }}"></script>

</body>
</html>
