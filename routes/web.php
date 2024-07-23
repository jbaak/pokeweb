<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'index'])->name('index');
Route::get('/detail/{id}', [ HomeController::class, 'getDetailPokemon'])->name('getDetailPokemon');
