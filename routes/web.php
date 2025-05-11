<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/products",[productController::class,"index"]);
Route::get("/products/create",[productController::class,"create"])->name("create");
Route::post("/products/create",[productController::class,"store"])->name("store");