<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rutas de autenticación de usuarios
Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::post('/validar-registro', [AuthController::class, 'register'])->name('validar-registro');
Route::post('inicia-sesion',[AuthController::class, 'login'])->name('inicia-sesion');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/', function () {
    return view('inicio');
});


