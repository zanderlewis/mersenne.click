<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/list', [ListController::class, 'index'])->name('list');
