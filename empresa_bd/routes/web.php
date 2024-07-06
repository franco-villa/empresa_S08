<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\ContactoController;

Route::view('/', 'home')->name('home');
Route::view('contacto', 'contacto')->name('contacto');

Route::get('personas', [PersonasController::class, 'index'])->name('personas.index');
Route::get('personas/crear', [PersonasController::class, 'create'])->name('personas.create');
Route::post('personas/store', [PersonasController::class, 'store'])->name('personas.store');

Route::get('personas/{id}', [PersonasController::class, 'show'])->name('personas.show');

Route::get('personas/{persona}/editar', [PersonasController::class, 'edit'])->name('personas.edit');
Route::patch('personas/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::delete('personas/{persona}', [PersonasController::class, 'destroy'])->name('personas.destroy');

//Route::view('contacto', 'contacto')->name('contacto');
Route::post('contacto', [ContactoController::class, 'store'])->name('contacto.store');
