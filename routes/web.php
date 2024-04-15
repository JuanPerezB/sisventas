<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PostController; // Importa el controlador de posts

Route::get('/', function () {
    return view('welcome');
});

// Rutas para categorias y productos
Route::resource('categorias', CategoriaController::class);
Route::resource('productos', ProductoController::class);

// Rutas para los posts
Route::resource('posts', PostController::class);
