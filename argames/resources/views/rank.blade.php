@extends('layout.base')

@section('title', 'Inicio')
@section('contenido')

    <main>

     <div class="container pb-5" style="min-height:27vw;">

         <form method="post" class="pb-5">
           <div class="search-bar flex grow">
             <input type="text" name="buscar" class="search flex grow" placeholder="Buscar una persona"/>
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
            <?php if($_POST): ?>
              <tbody>
              <?php if ($jugador): ?>
                <tr>
                  <td width="8%" class="text-center">{{ $user->id }}</td>
                  <td>
                      <div class="d-flex">
                        <div class="">
                        <img src="/storage/{{ $user->img }}" alt="profile_img"/>
                        </div>
                        <div class="pl-2">
                            <span class="username">{{ $user->username }}</span> <br>
                            <small class="d-sm-block d-md-none">Junior</small>
                        </div>
                      </div>
                  </td>
                  <td class="d-none d-md-block">Junior</td>
                  <td width="8%" class="text-center">{{$user->age}}</td>
                </tr>
              <?php endif; ?>

            <?php else: ?>
              <tbody>
              <?php foreach ($jugadores as $jugador): ?>
                <tr>
                  <td width="8%" class="text-center">{{ $user->id }}</td>
                  <td>
                      <div class="d-flex">
                        <div class="">
                        <img src="/storage/{{ $user->img }}" alt="profile_img"/>
                        </div>
                        <div class="pl-2">
                        <span class="username">{{ $user->username }}</span> <br>
                            <small class="d-sm-block d-md-none">Junior</small>
                        </div>
                      </div>
                  </td>
                  <td class="d-none d-md-block">Junior</td>
                  <td width="8%" class="text-center">{{$user->age}}</td>
                </tr>
              <?php endforeach; ?>
          <?php endif; ?>
            <tr>
            <?php if ($jugador): ?>
              <td colspan="4">Total de jugadores: <?=$_POST ? 1 :count($jugadores)?></td>
            <?php else: ?>
               <td colspan="4"><span class="text-warning">NO SE ECONTRARON RESULTADOS.</span></td>
            <?php endif; ?>
          </tr>
          </tbody>
        </table>
    </div>
    </main>
@endsection
