<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\MirrorsController;
use App\Http\Controllers\UsefulLinksController;
use App\Http\Controllers\JoinController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/list', [ListController::class, 'index'])->name('list');
Route::get('/software', [MirrorsController::class, 'index'])->name('mirrors');
Route::get('/links', [UsefulLinksController::class, 'index'])->name('links');
Route::get('/join', [JoinController::class, 'index'])->name('join');
