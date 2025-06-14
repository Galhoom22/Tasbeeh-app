<?php

use App\Http\Controllers\TasbeehController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasbeehController::class, 'index'])->name('tasbeeh.index');
Route::get('/tasbeeh/create', [TasbeehController::class, 'create'])->name('tasbeeh.create');
Route::post('/tasbeeh/store', [TasbeehController::class, 'store'])->name('tasbeeh.store');
Route::post('/tasbeeh/{id}/increment', [TasbeehController::class, 'increment'])->name('tasbeeh.increment');
Route::delete('/tasbeeh/{id}', [TasbeehController::class, 'destroy'])->name('tasbeeh.destroy');