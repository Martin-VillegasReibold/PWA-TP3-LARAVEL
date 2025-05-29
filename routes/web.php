<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
//get
//post
//put
//patch
//delete


Route::get('/', [HomeController::class, 'getHome']);


Route::get('/login', function () {
    return "Login usuario";
});

Route::get('/logout', function () {
    return "Logout usuario";
});


Route::get('category/show', [CategoryController::class, 'getIndex']);

Route::get('category/show/create', [CategoryController::class, 'getCreate']);

Route::get('category/show/{id}', [CategoryController::class, 'getShow']);

Route::post('category/show', [CategoryController::class, 'store']);

Route::get('category/show/{id}/edit', [CategoryController::class, 'getEdit']);

Route::put('category/show/{id}', [CategoryController::class, 'update']);

Route::delete('category/show/{id}', [CategoryController::class, 'destroy']);
