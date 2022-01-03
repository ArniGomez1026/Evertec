<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CatalogoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout', function () {
    return view('layouts.layout');
});


Route::resource('clientes', ClienteController::class);
Route::resource('catalogo', CatalogoController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

