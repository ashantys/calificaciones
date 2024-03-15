<?php

use App\Http\Controllers\MateriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('materias', MateriaController::class);

// Ruta para mostrar el listado de materias (índice)
Route::get('/index', [MateriaController::class, 'index'])->name('materias.index');

// Ruta para mostrar el formulario de creación
Route::get('/create', [MateriaController::class, 'create'])->name('materias.create');

// Ruta para almacenar (store) los datos enviados desde el formulario de creación
Route::post('/store', [MateriaController::class, 'store'])->name('materias.store');
