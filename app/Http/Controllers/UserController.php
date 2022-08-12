<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    function signUp( Request $req){
       validator::make($req->all(),[
        'firstname'=> "required",
        'lastname'=> "required",
        'email'=> "required",
        'password'=> "required"
       ]);

       $data=User::create([
            'firstname' => $req->firstname,
            'lastname' => $req->lastname,
            'email' => $req->email,
            'password' => Hash::make($req->password),
        ]);

        $response=[
        'data' => $data,
        'message' => 'Registered succesfully',
        'status' => 'success'
       ];

       return response($response, 200);
    }
     
    public function login(Request $req){
      $login=$req->validate([
        'email' => 'required',
        'password' => 'password'
      ]);
      
      $user = User::where('email', $req->email)->where('password',$req->passsword)->first();
      if($login != $user){
        $response = [
            'message' => 'Password or Email',
            'status' => 'error'
        ];
        return response($response, 400);
      }else{
        $response = [
            'data' => $user,
            'message' => 'Login Successful',
            'status' => 'success'
        ];
        return response($response, 200);
      }

    }
}
