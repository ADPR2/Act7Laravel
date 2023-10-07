<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', homeController::class);
Route::get('/hola', homeController::class);

Route::get('/bienvenida', function () {
    return "Hola mundo";
});

Route::get('/curso', function () {
    return "Bienvenido al curso";
});


Route::get('/curso/{curso}/{categoria}', function ($curso,$categoria) {
    return "Bienvenido al curso: $curso de la categoria: $categoria";
});
