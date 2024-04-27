<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SessionTicketChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   

        $token=Session::get('JWTTOKEN');
        $user =Session::get('user');
        $Mail= JWTToken::VerifyToken($token);
        $tiketexpiry = JWTToken::TimeOutCounter($token);
        if(isset($Mail) == $user->email && $tiketexpiry == 'existTicket'){
            return $next($request);
        }
        else{
            return view('ProblemDetected');
        }
        
    }
}
