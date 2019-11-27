<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\User;
use Auth;

class ProfileController extends Controller
{

    public function index(){
      $user = Auth::user();

      if(!$user)return redirect('home');
      return view('profile', ['user'=>$user]);
    }

    public function edit(Request $data){
      $user = Auth::user();

      $this->validate($data, [
          'name' => ['required','string','min:3', 'max:255'],
          'username' => ['required', 'string', 'min:6','max:255', Rule::unique('users')->ignore($user->id)],
          'email' => ['required','string', 'email', 'max:255',Rule::unique('users')->ignore($user->id)],
          'age' => ['required','int', 'min:7', 'max:100'],
          'genre' => ['required','string'],
          'img' => ['image', 'max:2048']
      ]);

      $user->username = $data->input('username');
      $user->name = $data->input('name');
      $user->email = $data->input('email');
      $user->genre = $data->input('genre');
      $user->age = $data->input('age');
      if($data["img"]){
        $ruta = $data["img"]->store('public');
        $user->img = basename($ruta);
      }

      $user->save();
      return view('profile',['user'=>$user]);
    }

    public function editPassword(Request $data){
      $user = Auth::user();

      $this->validate($data, [
        'password' => ['required', 'string', 'min:6', 'confirmed'],
        'current-password' => ['required','password']
      ]);

      $user->password = Hash::make($data['password']);

      $user->save();
      return view('profile',['user'=>$user]);
    }
}
