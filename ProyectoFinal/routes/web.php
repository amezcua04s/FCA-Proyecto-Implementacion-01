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
//->middleware(AdminAuthenticate::class)
//Route::resource('/usuarios', UserController::class);
Route::resource('usuarios', UserController::class)
    ->middleware(AdminAuthenticate::class);

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




