<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminAuthenticate;

use App\Http\Controllers\AnticipoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/continuar', [UserController::class, 'continuar'])->name('continuar');

//->middleware(AdminAuthenticate::class)
//Route::resource('/usuarios', UserController::class);
Route::resource('usuarios', UserController::class)
    ->middleware(AdminAuthenticate::class);
    Route::get('/usuarios/{id}/profile', [UserController::class, 'profile'])->name('usuarios.profile');


Route::resource('proveedores', ProveedorController::class)
    ->middleware('auth');

Route::resource('clientes', ClienteController::class)
    ->middleware('auth');



Route::resource('proyectos', ProyectoController::class)
    ->middleware('auth');

Route::resource('anticipos', AnticipoController::class)
    ->middleware('auth');

Route::resource('pagos', PagoController::class)
    ->middleware('auth');


Route::delete('/anticipos/{id}', [AnticipoController::class, 'destroy'])
    ->name('anticipos.destroy');
Route::delete('/clientes/{id}', [ClienteController::class, 'destroy'])
    ->name('clientes.destroy');
Route::delete('/proveedores/{id}', [ProveedorController::class, 'destroy'])
    ->name('proveedores.destroy');
Route::delete('/proyectos/{id}', [ProyectoController::class, 'destroy'])
    ->name('proyectos.destroy');
Route::delete('/pagos/{id}', [PagoController::class, 'destroy'])
    ->name('pagos.destroy');
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])
    ->name('usuarios.destroy');




