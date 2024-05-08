<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing-two');
});


Route::get('/', [MainController::class, 'index']);
Route::post('/', [MainController::class, 'store']);
// Route::get('/product-pdf/export', [ProductController::class, 'pdf']);
