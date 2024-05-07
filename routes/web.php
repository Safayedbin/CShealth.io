<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PaitentController;
use App\Http\Controllers\SHA256HASH;
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
Route::get('/shahtest', [SHA256HASH::class, 'test']);
Route::get('/Loggedin', [UserController::class, 'login']);
Route::get('/homepage', function(){return view('Homepage');});
Route::get('/register', function(){return view('Register');});
Route::get('/login', function(){return view('login');});
Route::get('/appointment', function(){return view('Appointment');});

Route::middleware(['SessionAuth',"PaitentCheker"
])->group(function(){
    Route::get('/test', function(){return view('test');});
    Route::get('/Dpharmacy', [DoctorController::class, 'pharmacy']);
    Route::get('/Ddasboard', [DoctorController::class, 'dashboard']);
    Route::get('/Dprofile', [DoctorController::class, 'profile']);
    Route::get('/Dappointmentlist', [DoctorController::class, 'appointmentlist']);
    Route::get('/Dhomepage', function(){return view('Homepage');});
    Route::get('/Dappointmentsales', function(){return view('Appointmentsales');});
});

Route::middleware(['SessionAuth', 'DoctorCheker'])->group(function(){
    Route::get('/test', function(){return view('test');});
    Route::get('/Ppharmacy', [PaitentController::class, 'pharmacy']);
    Route::get('/Pdasboard', [PaitentController::class, 'dashboard']);
    Route::get('/Pprofile', [PaitentController::class, 'profile']);
    Route::get('/Pappointmentlist', [PaitentController::class, 'appointmentlist']);
    Route::get('/Phomepage', function(){return view('Homepage');});
    Route::get('/Pappointmentsales', function(){return view('Appointmentsales');});

});