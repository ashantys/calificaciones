<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('materias', MateriaController::class);

// Ruta para mostrar el listado de materias (índice)
Route::get('/index', [MateriaController::class, 'index'])->name('materias.index');

// Ruta para registrar una materia (índice)
Route::get('/create', [MateriaController::class, 'create'])->name('materias.create');

