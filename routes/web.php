<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\SecureurlController;
use App\Http\Controllers\CerrarSesionController;
use App\Http\Controllers\ComentarioController;
use App\Http\Controllers\imgController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\Feed;
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
//Route::get('/ustagram/{user:username}', [Feed::class, 'index'])->name("feed");

Route::get('/ustagram/{user:username}', [SecureurlController::class, 'index'])->name("accesoseguro");

Route::get('/perfil/{user:username}', [Feed::class, 'index'])->name("perfil");;

Route::post('/logout', [CerrarSesionController::class, 'store'])->name('logout');


Route::get('/publicaciones/create', [SecureurlController::class, 'create'])->name('publicaciones.create');
Route::post('publicaciones', [SecureurlController::class, 'store'])->name('publicaciones.store');
Route::get('posts/{user:username}/{post}',[SecureurlController::class, 'show'])->name('publicaciones.show');

Route::post('/comments', [ComentarioController::class, "store"])->name('comentarios.store');
Route::post('/imgs',[imgController::class, 'store'])->name('imagenes.store');

Route::delete('/comments/{id}', [ComentarioController::class, "destroy"])->name('comentarios.destroy');

Route::delete('posts/{post}', [SecureurlController::class, 'destroy'])->name('publicaciones.destroy');

Route::post('likes', [LikeController::class, 'store'])->name('likes.store');
