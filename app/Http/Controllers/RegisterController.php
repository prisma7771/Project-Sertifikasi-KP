<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create(){
            return view('register.index',[
                'title' => 'Register'
        ]);
    }

    // Melakukan validasi data registrasi
     public function store(Request $request){
          $validatedData = $request->validate([
                'name' => 'required|max:255',
                'username' => ['required','min:3','max:255','unique:users'],
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:5|max:255'
          ]);

          $validatedData['password'] = Hash::make($validatedData['password']);

          User::create($validatedData);

          return redirect('/login')->with('success', 'Registrasi Berhasil! Silahkan Login!!!');
    }

}
