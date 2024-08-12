<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\webController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [webController::class, 'home']);
