<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Requests\CreatOrderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Psy\Command\WhereamiCommand;

use function Laravel\Prompts\table;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" mi`ddleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'users', 'as' => 'users.'], function () {

    //User get :.....................................................................................................
    Route::get('create', [UserController::class, 'create'])->name('create');

    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');

    Route::get('index', [UserController::class, 'index'])->name('index');

    //User post :
    Route::post('create', [UserController::class, 'store'])->name('store');

    Route::post('edit/{id}', [UserController::class, 'update'])->name('update');

    //user delete
    Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('destroy');
    //.................................................................................................................
});

Route::group(['prefix' => 'products', 'as' => 'products.'], function () {

    //Product get
    Route::get('create', [ProductController::class, 'create'])->name('create');

    Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');

    Route::get('index', [ProductController::class, 'index'])->name('index');

    //Product post
    Route::post('/create', [ProductController::class, 'store'])->name('store');

    Route::post('edit/{id}', [ProductController::class, 'update'])->name('update');

    //product delete
    Route::delete('delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
});
route::group(['prefix' => 'orders', 'as' => 'orders.'], function () {

    //Order get.....................................................................
    Route::get('create', [OrderController::class, 'create'])->name('create');

    Route::get('edit/{id}', [OrderController::class, 'edit'])->name('edit');

    Route::get('index', [OrderController::class, 'index'])->name('index');

    //order post
    Route::post('create', [OrderController::class, 'store'])->name('store');

    Route::post('edit/{id}', [OrderController::class, 'update'])->name('update');

    //Order Delete
    Route::delete('delete/{id}', [OrderController::class, 'destroy'])->name('destroy');
});

Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
    // categories get...................................................................................
    Route::get('index', [CategoriesController::class, 'index'])->name('index');

    Route::get('create', [CategoriesController::class, 'create'])->name('create');

    Route::get('edit/{id}', [CategoriesController::class, 'edit'])->name('edit');
    // categories post
    Route::post('create', [CategoriesController::class, 'store'])->name('store');

    Route::post('edit/{id}', [CategoriesController::class, 'update'])->name('update');

    //categories delete
    Route::delete('delete/{id}', [CategoriesController::class, 'destroy'])->name('destory');
});

// posts get.........................................................................................
Route::get("/posts/create", [PostController::class, 'create']);

Route::get('/posts/index', [PostController::class, 'index']);

Route::get('/posts/edit/{id}', [PostController::class, 'edit']);

// posts post
Route::post('/posts/create', [PostController::class, 'store']);
Route::post('/posts/edit/{id}', [PostController::class, 'update']);
// posts delete
Route::delete('/posts/delete/{id}', [PostController::class, 'destroygi']);
