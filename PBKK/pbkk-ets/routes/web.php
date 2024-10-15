<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VinylController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vinyl', [App\Http\Controllers\VinylController::class, 'index'])->name('vinyl.index');
Route::get('/vinyl/create', [App\Http\Controllers\VinylController::class, 'create'])->name('vinyl.create');
Route::post('/vinyl', [App\Http\Controllers\VinylController::class, 'store'])->name('vinyl.store');
Route::get('/vinyl/{vinyl}/edit', [App\Http\Controllers\VinylController::class, 'edit'])->name('vinyl.edit');
Route::put('/vinyl/{vinyl}/update', [App\Http\Controllers\VinylController::class, 'update'])->name('vinyl.update');
Route::delete('/vinyl/{vinyl}/destroy', [App\Http\Controllers\VinylController::class, 'destroy'])->name('vinyl.destroy');

