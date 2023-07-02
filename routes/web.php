<?php

use App\Http\Controllers\HistoriaClinicaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TurnoController;
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

// Rutas de autenticación de usuarios
Route::get('/register', [RegisterController::class, 'show'])->name('registro');
Route::post('/register', [RegisterController::class, 'register'])->name('validar-registro');
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('validar-login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Rutas del Paciente
Route::middleware(['auth'])->group(function () {

    Route::get('turnos-disponibles', [TurnoController::class, 'showTurnosDisponibles'])->name('turnos-disponibles');
    Route::get('historia-clinica', [HistoriaClinicaController::class, 'comprobarHC'])->name('historia-clinica');
    Route::get('mi-historia-clinica', function(){
        return view('historia_clinica.index');
    })->name('mi-historia-clinica');

    Route::get('completar-historia-clinica', function(){
        return view('historia_clinica.create');
    })->name('completar-historia-clinica');

    Route::post('completar-historia-clinica', [HistoriaClinicaController::class, 'validar_HC'])->name('validar-HC');

    Route::get('editar-perfil', function () {
        return view('paciente.edit');
    })->name('editar-perfil');
});




Route::get('/', function () {
    return view('inicio');
});







