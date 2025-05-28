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

Route::get('/category', [CategoryController::class, 'getIndex']);

Route::get('/category/show/{id}', [CategoryController::class, 'getShow']);

Route::get('/category/create', [CategoryController::class, 'getCreate']);

Route::post('/category', [CategoryController::class, 'store']);

Route::get('/category/{id}/edit', [CategoryController::class, 'getEdit']);

Route::put('/category/{id}', [CategoryController::class, 'update']);

Route::delete('/category/{id}',[CategoryController::class, 'destroy']);
