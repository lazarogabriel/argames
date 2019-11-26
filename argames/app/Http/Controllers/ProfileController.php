<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{

    public function index(){
      $user = Auth::user();

      if(!$user)return redirect('home');
      return view('profile', ['user'=>$user]);
    }


    public function edit(Request $data){

      $this->validate($data, [
          'name' => ['string','min:3', 'max:255'],
          'username' => [ 'string', 'min:6','max:255,', 'unique:users'],
          'email' => ['string', 'email', 'max:255', 'unique:users'],
          'age' => ['int'],
          'genre' => ['string'],
          'img' => ['image', 'max:2048'],
          'password' => ['string', 'min:6', 'confirmed'],
      ]);

      return view('profile');
    }
}
