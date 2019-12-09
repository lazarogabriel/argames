<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RankController extends Controller
{
    public function index(){
      $players = User::paginate(5); //CLARAMENTE ESTO NO ES CORRECTO. NO SERIA UN RANK.
                                    //TENDRIAMOS QUE PRIMERO TENER LAS VARIABLES DE PUNTUACION
                                    //ETC PARA PDOER ORDENAR POR PUNTOS A LOS JUGADORES. MAS ADELANTE LO IMPLEMENTAREMOS....
      return view('rank', ['players'=> $players]);
    }

    public function searching(Request $req){
      $players = User::where('username', 'LIKE',$req->buscador . '%')->paginate(5);

      return view('layout.players', ['players'=> $players]);
    }
}
