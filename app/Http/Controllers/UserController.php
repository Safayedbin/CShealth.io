<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Hashing\Argon2IdHasher;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    public function register(Request $request){

        $salt=(string)rand(1111,9999);
        
        $password=$request->input('password');
        $concat= $salt.$password;
 
        $hashpassowrd= SHA256HASH::ToHash($concat);

       
        User::create([
                'Role' => $request->input('User'),
                'email' => $request->input('email'),
                'password' => $hashpassowrd,
                'salt'=> $salt
        ]);

        return view('login');

    }

    public function login(Request $request){

        $User=User::where('email','=', $request->input('email'))->first();

       if(!empty($User)){
        $passwordstring= $User->salt.$request->input('password');
        if( SHA256HASH::HashMatch($passwordstring, $User['password']) ){ 
            $token = JWTToken::CreateToken($User['email']);
            Session::put('JWTTOKEN', $token);
            Session::put('user', $User);
            return view('test', [
                'user'=> json_encode($User),
                'token'=> $token
                ]);

        }
        else{
            return view('login',[
                'status'=> 400,
                'Message' => "password not matched"
            ]);
        }
       }
       else{
            return view('login',[
                'status'=> 404,
                'Message' => "Email Address Not Found"
            ]);
       }
    }
}
