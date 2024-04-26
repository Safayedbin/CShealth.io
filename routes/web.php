<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){return view('test');});
Route::get('/createUser', [UserController::class, 'register']);
Route::get('/Loggedin', [UserController::class, 'login']);
Route::get('/homepage', function(){return view('Homepage');});
Route::get('/register', function(){return view('Register');});
Route::get('/login', function(){return view('login');});
Route::get('/appointment', function(){return view('Appointment');});