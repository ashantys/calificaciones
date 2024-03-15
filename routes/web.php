<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('materias', MateriaController::class);

// Ruta para mostrar el listado de superhéroes (índice)
Route::get('/index', [MateriaController::class, 'index'])->name('materias.index');
