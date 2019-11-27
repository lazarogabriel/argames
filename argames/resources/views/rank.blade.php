@extends('layout.base')

@section('title', 'Rank')
@section('contenido')

    <main>

     <div class="container pb-5" style="min-height:27vw;">

         <form action="/rank/search" method="post" class="pb-5">
           @csrf
           <div class="search-bar flex grow">
             <input type="text" name="buscado" class="search flex grow" placeholder="Buscar un jugador"/>
           </div>
         </form>


         <table class="table table-striped table-dark wow zoomInDown">
          <thead style="border:none;">
            <tr>
              <th></th>
              <th>Usuario</th>
              <th class="d-none d-md-block">Rank</th>
              <th>Puntos</th>
            </tr>
          </thead>
              <tbody>
              @foreach ($players as $player)
                <tr>
                  <td width="8%" class="text-center">{{ $player->id }}</td>
                  <td>
                      <div class="d-flex">
                        <div class="">
                        <img src="/storage/{{ $player->img }}" alt="profile_img"/>
                        </div>
                        <div class="pl-2">
                        <span class="username">{{ $player->username }}</span> <br>
                            <small class="d-sm-block d-md-none">Junior</small>
                        </div>
                      </div>
                  </td>
                  <td class="d-none d-md-block">Junior</td>
                  <td width="8%" class="text-center">{{$player->age}}</td>
                </tr>
              @endforeach

            <tr>
            @if ($players->isNotEmpty())
              <td colspan="3">Total de jugadores: {{$_POST ? 1 :count($players)}}</td>
              <td>{{$players->links()}}</td>
            @else
               <td colspan="4"><span class="text-warning">NO SE ECONTRARON RESULTADOS.</span></td>
            @endif
          </tr>
          </tbody>
        </table>
    </div>
    </main>
    <div class="bg-white">


    </div>

@endsection
