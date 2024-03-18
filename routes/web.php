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
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//User get :.....................................................................................................
Route::get('/users/create', [UserController::class, 'create'] );

Route::get('/users/edit/{id}', [UserController::class, 'edit']);

Route::get('/users/index',[UserController::class, 'index']);
//User post :
Route::post('/users/create', [UserController::class, 'store']);

Route::post('/users/edit/{id}', [UserController::class, 'update']);
//user delete
Route::delete('/users/delete/{id}', [UserController::class,'destroy']);
//.................................................................................................................
//Product get

Route::get('/products/create', [ProductController::class, 'create']);

Route::get('/products/edit/{id}', [ProductController::class, 'edit']);

Route::get('products/index', [ProductController::class, 'index']);

//Product post
Route::post('/products/create', [ProductController::class, 'store']);

Route::post('/products/edit/{id}', [ProductController::class,'update']);
//product delete

Route::delete('/products/delete/{id}', [ProductController::class, 'destroy']);
//Order get.....................................................................

Route::get('/orders/create', [OrderController::class,'create']);

Route::get('/orders/edit/{id}', [OrderController::class,'edit']);

Route::get('/orders/index', [OrderController::class, 'index']);

//order post

Route::post('/orders/create', [OrderController::class,'store']);

Route::post('/orders/edit/{id}',[OrderController::class, 'update']);

//Order Delete

Route::delete('/orders/delete/{id}', [OrderController::class, 'destroy']);

// categories get...................................................................................
Route::get('/categories/index', [CategoriesController::class,'index']);

Route::get('/categories/create', [CategoriesController::class,'create']);

Route::get('/categories/edit/{id}', [CategoriesController::class,'edit']);
 // categories post
 Route::post('/categories/create', [CategoriesController::class, 'store']);

 Route::post('/categories/edit/{id}', [CategoriesController::class, 'update']);

 //categories delete
 Route::delete('/categories/delete/{id}', [CategoriesController::class, 'destroy']);

 // posts get.........................................................................................
Route::get("/posts/create", [PostController::class, 'create']);

Route::get('/posts/index', [PostController::class, 'index']);

Route::get('/posts/edit/{id}', [PostController::class, 'edit']);

// posts post
Route::post('/posts/create', [PostController::class, 'store']);
Route::post('/posts/edit/{id}', [PostController::class, 'update']);
// posts delete
Route::delete('/posts/delete/{id}',[PostController::class, 'destroy']);
