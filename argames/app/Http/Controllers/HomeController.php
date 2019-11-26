<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth'); COMENTO ESTA LINEA PARA QUE LOS USUARIOS PUEDAN ENTRAR A LA RUTA /HOME SIN HABERSE LOGUEADO PREVIAMENTE.
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
