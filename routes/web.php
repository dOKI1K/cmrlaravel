<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('inicio');
Route::get('/novedades', [PostController::class, 'novedades']);
Route::get('/servicios', [PostController::class, 'servicios']);
Route::get('/contacto', [PostController::class, 'contacto']);
