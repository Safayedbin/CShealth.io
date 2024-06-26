<?php

namespace App\Http\Middleware;

use App\Helper\JWTToken;
use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Services\Logger;

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
        $logger = new Logger(storage_path('logs/app.log'));
        $tiketexpiry = JWTToken::TimeOutCounter($token);
        if(isset($Mail) == $user->email && $tiketexpiry == 'existTicket'){
            $logger->info('This is an information message');
            return $next($request);
        }
        else{
            $logger->error('This is an error message');
            return view('ProblemDetected');
        }
        
    }
}
