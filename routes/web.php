<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
//get
//post
//put
//patch
//delete


Route::get('/', [HomeController::class, 'getHome'])->name('home.getHome');


Route::get('/login', function () {
    return "Login usuario";
});

Route::get('/logout', function () {
    return "Logout usuario";
});

Route::get('/category', [CategoryController::class, 'getCat'])->name('category.getCat');

Route::get('/category/create', [CategoryController::class, 'getCreate'])->name('category.getCreate');

Route::get('/category/show', [CategoryController::class, 'getIndex'])->name('show.getIndex');

Route::get('/category/show/{id}', [CategoryController::class, 'getShow'])->name('show.getShow');

Route::post('/category/show', [CategoryController::class, 'store'])->name('show.store');

Route::get('/category/show/{id}/edit', [CategoryController::class, 'getEdit'])->name('show.getEdit');

Route::put('/category/show/{id}', [CategoryController::class, 'update'])->name('show.update');

Route::delete('/category/show/{id}', [CategoryController::class, 'destroy'])->name('show.destroy');

//Route::resource('/category/show', CategoryController::class);
