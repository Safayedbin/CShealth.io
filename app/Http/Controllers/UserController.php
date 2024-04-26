<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Hashing\Argon2IdHasher;

class UserController extends Controller
{
    public function register(Request $request){

        $salt=(string)rand(1111,9999);
        
        $password=$request->input('password');
        $concat= $salt.$password;
        $options = [
            'memory_cost' => 1<<17, // 128 MB
            'time_cost'   => 4,
            'threads'     => 2
        ];
        $hashpassowrd= password_hash($concat,PASSWORD_ARGON2ID, $options);
        $hashpassowrd;

       
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
        if( password_verify($passwordstring, $User['password']) ){ 
            
            return view('test', ['user'=> json_encode($User)]);

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
