@foreach ($players as $player)
    <tr class="wow fadeIn">
        <td width="8%" class="text-center">{{ $player->id }}</td>
        <td>
            <div class="d-flex">
            <div>
            <img src="/storage/{{ $player->img }}" alt="profile_img"/>
            </div>
            <div class="pl-1 pl-md-4">
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
    <td colspan="4">Total de jugadores: {{$_POST ? 1 :count($players)}}</td>
@else
    <td colspan="4"><span class="text-warning">NO SE ECONTRARON RESULTADOS.</span></td>
@endif
</tr>
