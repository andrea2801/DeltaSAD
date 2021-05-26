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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');

Route::get('/usuario', [App\Http\Controllers\UsuariosController::class, 'show'])->name('usuario');

Route::get('/usuario/{id}', [App\Http\Controllers\UsuariosController::class, 'show'])->name('usuario');

Route::get('/trabajadoras', [App\Http\Controllers\TrabajadorasController::class, 'index'])->name('trabajadoras.index');

Route::post('/trabajadoras/store', [App\Http\Controllers\TrabajadorasController::class, 'store'])->name('trabajadoras.store');

Route::get('/trabajadoras/busqueda', [App\Http\Controllers\TrabajadorasController::class, 'buscar'])->name('todas_trabajadoras');

Route::get('/trabajadoras/users{id}', [App\Http\Controllers\TrabajadorasController::class, 'showTFusers'])->name('trabajadoras.users');

Route::get('/horarios', [App\Http\Controllers\HorariosController::class, 'index'])->name('horarios');

Route::get('/home', function (){
    return view('home');
})->name('home');
