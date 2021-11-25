<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index'])->name('inicio');
Route::get('novedades', [PostController::class, 'novedades']);
Route::get('servicios', [PostController::class, 'servicios']);
Route::get('contacto', [PostController::class, 'contacto']);

Route::get('turnos', [RegisterController::class, 'turnos']);
Route::post('turnos', [RegisterController::class, 'turnosChecked']);

Route::get('register', [RegisterController::class, 'create']);
Route::post('register', [RegisterController::class, 'store']);

//pedo
//x

