<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbclassController;

Route::get('/', [DbclassController::class,'index']);
Route::get('/add', [DbclassController::class,'add']);
Route::post('/add', [DbclassController::class,'create']);
Route::get('/edit', [DbclassController::class,'edit']);
Route::post('/edit', [DbclassController::class,'update']);