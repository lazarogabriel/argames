<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('games/ahorcado/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('games/ahorcado/ahorcado.css') }}">
    <title>El Ahorcado</title>
</head>
<body class="fadeIn">

    <div class="bs-docs-section container text-white">

        <div class="jumbotron mt-5">
            <div class="row">

                <div id="formularios" class="col-md-6">
                    <h1 class="display-5">El ahorcado</h1>
                    <div id="endGameContainerMessage"></div>
                    <form id="form_word">
                        <div class="form-group">
                            <fieldset>
                                <label class="form-control-label" for="inputDanger1">Ingresa una palabra:</label>
                                <input id="palabra" type="password" name="palabra" class="form-control" placeholder="Una palabra..." autocomplete="off">
                                <div id="alerta_1" class="invalid-feedback"></div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-light">JUGAR</button>
                    </form>
                    <form id="form_letter" style="display:none;">
                        <div class="form-group" >
                            <fieldset>
                                <label class="form-control-label" for="inputDanger1">Ingresa una letra:</label>
                                <input id="letra" type="text" name="letra" class="form-control" placeholder="Una letra..." autocomplete="off"> 
                                <div id="alerta_2" class="invalid-feedback"></div>
                            </fieldset>
                        </div>
                        <button type="submit" class="btn btn-light">Adivinar</button>
                    </form>
                </div>

                <div class="col-md-6 ">
                    <div class="d-flex justify-content-center">
                        <div class="">
                            <img id="imagen" src="games/ahorcado/man_body/base.png" alt="">
                        </div>
                    </div>  

                    <div class="text-center">
                        <span id="word"></span>
                    </div>  
                </div>            

            </div>       
       </div>
    </div>

    <script type="text/javascript" src="{{ URL::asset('games/ahorcado/ahorcado.js') }}"></script>
</body>
</html>