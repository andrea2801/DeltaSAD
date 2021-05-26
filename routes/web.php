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

Route::get('/usuario/{id}', [App\Http\Controllers\UsuariosController::class, 'show'])->name('usuario');

Route::get('/usuario/eliminar/{id}', [App\Http\Controllers\UsuariosController::class, 'delete'])->name('eliminar');

Route::get('/cerrar/{id}', [App\Http\Controllers\IncidenciasController::class, 'closeState'])->name('cerrar');

Route::get('/eliminar/{id}', [App\Http\Controllers\IncidenciasController::class, 'delete'])->name('eliminar');

Route::get('/update', [App\Http\Controllers\UsuariosController::class, 'update'])->name('update');

Route::get('/indicendias/nueva', [App\Http\Controllers\IncidenciasController::class, 'create'])->name('crear.incidencia');

Route::get('/evolutivos/nuevo', [App\Http\Controllers\EvolutivosController::class, 'create'])->name('crear.evolutivo');

Route::get('/trabajadoras', [App\Http\Controllers\UsersController::class, 'index'])->name('trabajadoras');

Route::get('/trabajadoras', [App\Http\Controllers\TrabajadorasController::class, 'index'])->name('trabajadoras.index');

Route::post('/trabajadoras/store', [App\Http\Controllers\TrabajadorasController::class, 'store'])->name('trabajadoras.store');

Route::get('/horarios', [App\Http\Controllers\HorariosController::class, 'index'])->name('horarios');

Route::get('/home', function (){
    return view('home');
})->name('home');

Route::get('/sended', function (){
    return view('front/enviadas');
})->name('enviadas');
