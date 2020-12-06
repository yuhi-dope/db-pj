<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbclassController;

Route::get('/', [DbclassController::class,'index']);
