<?php

use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminAuthenticate;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProyectoController;

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


Route::resource('clientes', ClienteController::class)
    ->middleware(ClienteController::class);

    
Route::resource('proyectos', ProyectoController::class)
->middleware(ProyectoController::class);




