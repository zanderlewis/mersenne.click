<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\MirrorsController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/list', [ListController::class, 'index'])->name('list');
Route::get('/software', [MirrorsController::class, 'index'])->name('mirrors');
