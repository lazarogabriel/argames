<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
    @yield('contenido')

    <div class="container pt-2">
      <div class="row mb-3 align-items-center wow fadeInUp">
        <div class="col-lg-10 col-md-9 col-sm-12 text-white">
         <p class="text-md-left text-center">© <script>document.write(new Date().getFullYear());</script> Todos los derechos reservados. Hecho por <a href="#" class=" text-warning" target="_blank"><span class=" font-weight-bold argames_link">ArGames</span></a></p>
        </div>
        <div class="col-lg-2 col-md-3  col-sm-12 copyrighy_footer justify-content-between d-flex">
            <a style="border:1.1px solid yellow; letter-spacing:0.2em;" class=" m-1 p-1 btn text-warning faqbutton" href="../rank.php" role="button">RANK</a>
          <a style="letter-spacing:0.1em;" class="m-1 p-1 btn text-dark bg-warning faqbutton" href="faqs.php" role="button">F.A.Qs</a>
        </div>
      </div>
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/plugins/main.js') }}"></script>

</body>
</html>
