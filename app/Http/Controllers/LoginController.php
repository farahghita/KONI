<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use input;
use Illuminate\Support\Collection;

class LoginController extends Controller
{
    //
    public function loginn(Request $request) {
      $email = $request->input('emaill');
      $password = $request->input('pass');

      $checklogin = DB::table('users')->where(['email'=>$email, 'password'=>$password])->get();
      if(count($checklogin) > 0) {
          echo "login succesful";
      }
      else {
        echo "login failed";
      }

    }
}
