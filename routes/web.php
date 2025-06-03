<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
//get
//post
//put
//patch
//delete


Route::get('/', [HomeController::class, 'getHome'])->name('home.getHome');

/* 
Route::get('/login', function () {
    return "Login usuario";
});

Route::get('/logout', function () {
    return "Logout usuario";
});
 */
Route::get('/category', [CategoryController::class, 'getCat'])->name('category.getCat');

Route::get('/category/create', [CategoryController::class, 'getCreate'])->name('category.getCreate');

Route::get('/category/show', [CategoryController::class, 'getIndex'])->name('show.getIndex');

Route::get('/category/show/{id}', [CategoryController::class, 'getShow'])->name('show.getShow');

Route::post('/category/show', [CategoryController::class, 'store'])->name('show.store');

Route::get('/category/show/{id}/edit', [CategoryController::class, 'getEdit'])->name('show.getEdit');

Route::put('/category/show/{id}', [CategoryController::class, 'update'])->name('show.update');

Route::delete('/category/show/{id}', [CategoryController::class, 'destroy'])->name('show.destroy');

//Route::resource('/category/show', CategoryController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
