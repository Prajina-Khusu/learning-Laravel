<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuth;

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

Route::get('/login',[CustomAuth::Class,'login'])->middleware('aloggedin');
Route::get('/registration',[CustomAuth::Class,'register'])->middleware('aloggedin');
Route::post('/register-user',[CustomAuth::Class,'registerUser'])->name('register-user');
Route::post('/login-user',[CustomAuth::Class,'loginUser'])->name('login-user');
Route::get('/dasboard',[CustomAuth::class,'dashboard'])->middleware('isloggedin');
Route::get('/logout',[CustomAuth::class,'logout']);

