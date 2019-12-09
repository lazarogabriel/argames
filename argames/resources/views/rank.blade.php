@extends('layout.base')

@section('title', 'Rank')

  @section('header-title')
    <p class="text-left pt-4 wow bounceInRight" style="font-size:2em;color:white;"> 
      <i class="fas fa-arrow-left" onclick="window.history.back();"></i>
      <span class="argames" style="font-size:1.6em;">Rank</span> 
    </p>
  @endsection

@section('contenido')

    
     <div class="container pb-5 wow fadeIn" style="min-height:27vw;">
        <div class="search-bar flex grow">
          <h3 class="text-light pb-3">Buscar un jugador</h3>
          <input id="buscador" type="text" class="search flex grow" placeholder="Nombre de usuario..."/>
        </div>

        <table class="table table-striped table-dark mt-5">
            <thead>
              <tr>
                <th></th>
                <th>Usuario</th>
                <th class="d-none d-md-block">Rank</th>
                <th>Puntos</th>
              </tr>
            </thead>
            <tbody>
            
            </tbody>
          </table>
         
        <div>
          {{$players->links()}}
        </div>
    </div>
    
    <p class="text-light" id="algo"></p>
    <script>
        playersTable();
       
        document.getElementById("buscador").addEventListener("keyup", playersTable);

        function playersTable() {
          fetch(`/ranking?buscador=${document.getElementById("buscador").value}`,{
            method: 'GET'
          })
          .then(response => response.text())
          .then(html => {
            document.querySelector("tbody").innerHTML = html
            })
        }
        
        

    
    </script>

@endsection
