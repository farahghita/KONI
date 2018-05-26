<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller

{
    //

    public function store(Request $request){
      User :: Create([
      'name'=> $request->input('name'),
      'email'=> $request->input('email'),
      'password'=> $request->input('password')
    ]);

    return redirect('/');
    }

}
