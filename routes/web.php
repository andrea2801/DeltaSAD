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

//home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//usuarios
Route::get('/usuarios', [App\Http\Controllers\UsuariosController::class, 'index'])->name('usuarios');
Route::get('/usuario', [App\Http\Controllers\UsuariosController::class, 'show'])->name('usuario');
Route::get('/usuario/{id}', [App\Http\Controllers\UsuariosController::class, 'show'])->name('usuario');
Route::get('/update', [App\Http\Controllers\UsuariosController::class, 'update'])->name('update');

//incidencias
Route::get('/indicendias/nueva', [App\Http\Controllers\IncidenciasController::class, 'create'])->name('crear.incidencia');
Route::get('/cerrar/{id}', [App\Http\Controllers\IncidenciasController::class, 'closeState'])->name('cerrar');
Route::get('/eliminar/{id}', [App\Http\Controllers\IncidenciasController::class, 'delete'])->name('eliminar');

//evolutivos
Route::get('/evolutivos/nuevo', [App\Http\Controllers\EvolutivosController::class, 'create'])->name('crear.evolutivo');

//trabajadoras
Route::get('/trabajadoras', [App\Http\Controllers\TrabajadorasController::class, 'index'])->name('trabajadoras.index');
Route::post('/trabajadoras/store', [App\Http\Controllers\TrabajadorasController::class, 'store'])->name('trabajadoras.store');
Route::get('/trabajadoras/busqueda', [App\Http\Controllers\TrabajadorasController::class, 'trabajadorasFiltrar'])->name('todasTrabajadoras');
Route::get('/trabajadoras/busqueda/dni', [App\Http\Controllers\TrabajadorasController::class, 'dniBuscar']);
Route::get('/trabajadoras/busqueda/zona', [App\Http\Controllers\TrabajadorasController::class, 'zonaBuscar']);
Route::get('/trabajadoras/users{id}', [App\Http\Controllers\TrabajadorasController::class, 'showTFusers'])->name('trabajadoras.users');
Route::get('/trabajadoras/eliminar/{id}', [App\Http\Controllers\TrabajadorasController::class, 'delete']);
Route::get('/trabajadoras/users', [App\Http\Controllers\TrabajadorasController::class, 'showTFusers'])->name('trabajadoras.showTFusers');

//horarios
Route::get('/horarios', [App\Http\Controllers\HorariosController::class, 'index'])->name('horarios');

//notificaciones
Route::get('/notificaciones/enviadas', [App\Http\Controllers\NotificacionesController::class, 'viewSent'])->name('notificaciones.enviadas');
Route::get('/notificaciones/nueva', [App\Http\Controllers\NotificacionesController::class, 'create'])->name('notificaciones.nueva');

//notas
Route::get('/notas/nueva', [App\Http\Controllers\NotasController::class, 'create'])->name('crear.nota');
Route::get('/notas/eliminar/{id}', [App\Http\Controllers\NotasController::class, 'delete'])->name('nota.eliminar');
