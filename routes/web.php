<?php

use App\Http\Controllers\TasbeehController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TasbeehController::class, 'index'])->name('tasbeeh.index');
