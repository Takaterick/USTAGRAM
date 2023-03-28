<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\SecureurlController;
use App\Http\Controllers\CerrarSesionController;
use App\Models\User;

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
    return view('home');
});

Route::get('/registro', [RegistroController::class, 'index'])->name("registrarse");
Route::post('/registro', [RegistroController::class, 'store']);

Route::get('/login', [SesionController::class, 'index'])->name("login");
Route::post('/login', [SesionController::class, 'store']);

Route::get('/{user:username}', [SecureurlController::class, 'index'])->name("accesoseguro");

Route::post('/logout', [CerrarSesionController::class, 'store'])->name('logout');

Route::get('/publicaciones/create', [SecureurlController::class, 'create'])->name('publicaciones.create');