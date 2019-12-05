@extends('layout.base')

@section('title', 'F.A.Qs')

  @section('header-title')
    <p class="text-left pt-5 wow bounceInRight" style="font-size:2em;color:white;"> 
      <i class="fas fa-arrow-left" onclick="window.history.back();"></i>
      <span class="argames" style="font-size:1.2em;"> F . A . Qs</span> 
    </p>
  @endsection

@section('contenido')

    <h2 class="FAQ_text mt-1 mb-5 wow fadeIn">Preguntas frecuentes</h2>
         <details class="wow bounceInUp">  <!--AGREGARLE UN "open" como atributo para que aparezca abierta la tarjeta -->
          <summary>
            ¿Que es ArGames?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"></svg>
          </summary>
          <p class="pt-3">
            Argames es una página de juegos Argentinos, pensada para personas de todas las edades con el objetivo de incentivar la interacción con la cultura argentina a través de juegos propios de la región, como por ejemplo el truco.
          </p>
        </details>

        <details class="wow bounceInUp">

          <summary>
            ¿Como me registro?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"></svg>
          </summary>
          <p class="pt-3">
            Para registrarte solo tenes que ingresar <a href="register.php">ACA</a>, completar todos los campos y listo, ya podes empezar a jugar a través de la página.
          </p>
        </details>

        <details class="wow bounceInUp">

          <summary>
            ¿Como inicio sesion?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"></svg>
          </summary>
          <p class="pt-3">
            Para poder comenzar a jugar a través de la página tienen que iniciar sesión con un usuario previamente registrado, podes hacerlo debes ingresando <a href="register.php">ACA</a> y completar los campos correspondientes y listo!
          </p>
        </details>

        <details class="wow bounceInUp">
          <summary>
            ¿Tengo un problema para iniciar sesión, como puedo solucionarlo?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"></svg>
          </summary>
          <p class="pt-3">
            Aun no contamos con sistema de recuperado de cuentas, ingresa <a href="register.php">ACA</a> y registrate nuevamente, proximamente lo implementaremos...
          </p>
        </details>


        <details class="wow bounceInUp">
          <summary>
            ¿Puedo jugar online con otra persona?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"></svg>
          </summary>
          <p class="pt-3">
            Estamos trabajando en eso! Pronto tendremos noticias.
          </p>
        </details>

        <details class="wow bounceInUp">
          <summary>
            ¿Quién administra ArGames.com?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"></svg>
          </summary>
          <p class="pt-3">
            ArGmes.com es administrado por un grupo de programadores.
          </p>
        </details>
        <details class="wow bounceInUp">
          <summary>
            ¿Como cancelar mi cuenta?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"></svg>
          </summary>
          <p class="pt-3">
            Para cancelar tu cuenta mandanos un email a <a href="#">argames@consultas.com</a>.
          </p>
        </details>
        <details class="wow bounceInUp" >
          <summary>
            ¿Como puedo enviar una aportacion?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"></svg>
          </summary>
          <p class="pt-3">
            Mandanos un correo con tu idea <a href="#">argames@consultas.com</a>.
          </p>
        </details>

        <details class="wow bounceInUp mb-5">
          <summary>
            ¿Como cambiar mi nombre de usuario?
            <svg class="control-icon control-icon-expand" width="24" height="24" role="presentation"></svg>
            <svg class="control-icon control-icon-close" width="24" height="24" role="presentation"></svg>
          </summary>
          <p class="pt-3">
            Para cambiar tu nombre de usuario mandanos un email a <a href="#">argames@consultas.com</a>.
          </p>
        </details>

@endsection
