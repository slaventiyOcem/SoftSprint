<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', [ProductController::class, 'index']);

Route::get('/products/{id}', [ProductController::class, 'show']);


 

