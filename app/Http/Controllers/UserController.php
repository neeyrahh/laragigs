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

        $token=$data->createToken('myapptoken')->plainTextToken;

        $response=[
        'data' => $data,
        'message' => 'Registered succesfully',
        'token' => $token,
        'status' => 'success'
       ];

       return response($response, 200);
    }


     
    public function login(Request $req){

      $login=$req->validate([
        'email' => 'required',
        'password' => 'password'
      ]);
      
      if(!Auth::attempt($login)){
        $response = [
            'message' => 'Password or Email not correct',
            'status' => 'error'
        ];

        return response($response, 400);
      }

        $data=User::where('email', $req->email)->first();

        $token=$data->createToken('myapptoken')->plainTextToken;

        $response = [
            'data' => $data,
            'token' => $token,
            'message' => 'Login Successful',
            'status' => 'success'
        ];

        return response($response, 200);
      

    }
}
