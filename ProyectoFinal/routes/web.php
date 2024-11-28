<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('/usuarios', UserController::class);
Route::resource('/perfil', UserController::class);

Route::get('/usuarios', [UserController::class, 'index']);

Route::get('/create', function () {
    return view('dashboard.user.create');
});

