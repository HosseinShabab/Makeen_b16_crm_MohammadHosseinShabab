<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(['prefix' => 'users', 'as' => 'users.'], function () {

    Route::get('index/{id?}', [UserController::class, 'index'])->name('index');
    Route::put('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('create', [UserController::class, 'store'])->name('store');
    Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('destroy');
    //.................................................................................................................
});

Route::group(['prefix' => 'products', 'as' => 'products.'], function () {

    Route::get('index{id?}', [ProductController::class, 'index'])->name('index');
    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
    Route::post('/create', [ProductController::class, 'store'])->name('store');
    Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
});
route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {


    Route::get('index/{id?}', [OrderController::class, 'index'])->name('index');
    Route::get('edit/{id}', [OrderController::class, 'edit'])->name('edit');
    Route::post('create', [OrderController::class, 'store'])->name('store');
    Route::delete('delete/{id}', [OrderController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {

    Route::get('index/{id?}', [CategoriesController::class, 'index'])->name('index');
    Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('edit');
    Route::post('create', [CategoriesController::class, 'store'])->name('store');
    Route::delete('delete/{id}', [CategoriesController::class, 'destroy'])->name('destory');
});

Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {

    Route::get('index{id?}', [PostController::class, 'index'])->name('index');
    Route::get('edit/{id}', [PostController::class, 'edit'])->name('edit');
    Route::post('create', [PostController::class, 'store'])->name('store');
    Route::delete('delete/{id}', [PostController::class, 'destroy'])->name('destory');
});

