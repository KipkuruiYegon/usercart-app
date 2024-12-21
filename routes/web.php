<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TemplateController::class, 'index']);
