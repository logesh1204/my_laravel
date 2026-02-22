<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
     return view('login');
     //return view('Dashboard');

});
Route::get('/register',function(){
    return view('register');
});
Route::post('/newRegister',[AuthController::class,'register'])->name('newUser');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/dashboard', function () {
    return view('Dashboard');

});