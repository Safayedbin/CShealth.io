<?php 

namespace App\Helper;

use Exception;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class JWTToken{

    public static function CreateToken($useremail):string{
        $key= env('JWT_key');
        $payload=[
            'iss' => 'laravelToken',
            'iat' => time(),
            'exp' => time()+60*60,
            'useremail' => $useremail
            
        ];

        return JWT::encode($payload, $key, 'HS256');
        
    } 
     

    public static function VerifyToken($token){

        try{
            $key=env('JWT_key');
            $decode= JWT::decode($token, new Key($key, 'HS256'));
            return $decode->useremail;

        }
        catch(Exception $e){
            return response()->json([
                'message' => 'unautherised token'
            ]);
        }
        
    }
    public static function TimeOutCounter($token){

        try{
            $key=env('JWT_key');
            $decode= JWT::decode($token, new Key($key, 'HS256'));
            $expirytime = $decode->exp;
            $Currenttime = time();
            if($expirytime<$Currenttime){
                return 'Timeout';
            }
            else{
                return 'existTicket';
            }


        }
        catch(Exception $e){
            return response()->json([
                'message' => 'unautherised token'
            ]);
        }
        
    }

    public static function CreateTokenForResetPassword($useremail):string{
        $key= env('JWT_key');
        $payload=[
            'iss' => 'laravelToken',
            'iat' => time(),
            'exp' => time()+60*10,
            'useremail' => $useremail
            
        ];

        return JWT::encode($payload, $key, 'HS256');

        
    }

    function DeleteToken(){}
}