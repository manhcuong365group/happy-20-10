<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Happy2010Controller;

Route::get('/', [Happy2010Controller::class, 'index']);
Route::get('/random-wish', [Happy2010Controller::class, 'getRandomWish']);
Route::get('/gallery', [Happy2010Controller::class, 'gallery']);
Route::get('/wishes', [Happy2010Controller::class, 'wishes']);
Route::get('/about', [Happy2010Controller::class, 'about']);
