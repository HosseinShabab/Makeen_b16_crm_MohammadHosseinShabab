<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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
//User get :
Route::get('/users/create', function () {
    return view('users.create');
});

Route::get('/users/edit/{id}', function ($id) {
    $user = DB::table('users')->where('id', $id)->first();
    return view('users.edit', ["user" => $user]);
});

Route::get('/users/index', function () {
    $users = DB::table('users')->get();
    return view('users.index', ["users" => $users]);
});
//User post :
Route::post('/users/create', function (Request $request) {
    DB::table('users')->insert([
        "first_name" => $request->first_name,
        "last_name" => $request->last_name,
        "gmail" => $request->gmail,
        "password" => $request->password,
        "age" => $request->age,
        "jender" => $request->jender,
        "address" => $request->address,
        "birth_day" => $request->birth_day,
        "country" => $request->country,
    ]);
    return "User added successfully";
});

Route::post('/users/edit/{id}', function (Request $request, $id) {
    DB::table('users')->where('id', $id)->update([
        "first_name" => $request->first_name,
        "last_name" => $request->last_name,
        "gmail" => $request->gmail,
        "password" => $request->password,
        "age" => $request->age,
        "jender" => $request->jender,
        "address" => $request->address,
        "birth_day" => $request->birth_day,
        "country" => $request->country,
    ]);
    return "User updated successfully";
});
//user delete
Route::delete('/users/delete/{id}', function ($id) {
    DB::table('users')->where("id", $id)->delete();
    return redirect("/users/index");
});
//Product get

Route::get('/products/create', function () {
    return view('/products.create');
});

Route::get('/products/edit/{id}', function ($id) {
    $product = DB::table('products')->where('id', $id)->first();
    return view('/products.edit', ['product' => $product]);
});

Route::get('products/index', function () {
    $products = DB::table('products')->get();
    return view('/products.index', ["products" => $products]);
});

//Product post
Route::post('/products/create', function (Request $request) {
    DB::table('products')->insert([
        "product_name" => $request->product_name,
        "color" => $request->color,
        "manufactorer" => $request->manufactorer,
        "amount" => $request->amount,
        "price" => $request->price,
        "warranty" => $request->warranty,
        "warranty_manufactorer" => $request->warranty_manufactorer,
        "date_of_supply" => $request->date_of_supply,
    ]);
    return "product added successfully";
});

Route::post('/products/edit/{id}', function (Request $request, $id) {
    DB::table("products")->where('id', $id)->update([
        "product_name" => $request->product_name,
        "color" => $request->color,
        "manufactorer" => $request->manufactorer,
        "amount" => $request->amount,
        "price" => $request->price,
        "warranty" => $request->warranty,
        "warranty_manufactorer" => $request->warranty_manufactorer,
        "date_of_supply" => $request->date_of_supply,
    ]);
    return "product updated successfully";
});
//product delete

Route::delete('/products/delete/{id}', function ($id) {
    DB::table('products')->where('id', $id)->delete();
    return redirect('/products/index');
});
//Order get

Route::get('/orders/create', function () {
    return view('orders.create');
});

Route::get('/orders/edit/{id}', function ($id) {
    $order = DB::table("orders")->where('id', $id)->first();
    return view('orders.edit', ['order'=>$order]);
});

Route::get('/orders/index', function () {
    $orders = DB::table('orders')->get();
    return view('orders.index', ['orders'=>$orders]);
});

//order post

Route::post('/orders/create', function (Request $request) {
    DB::table('orders')->insert([
        "buyer_first_name" => $request->buyer_first_name,
        "buyer_last_name" => $request->buyer_last_name,
        "buyer_gmail" => $request->buyer_gmail,
        "product_name" => $request->product_name,
        "color" => $request->color,
        "payment_method" => $request->payment_method,
        "address" => $request->address,
    ]);
    return "order added successfully ";
});

Route::post('/orders/edit/{id}',function(Request $request, $id){
    DB::table('orders')->where('id', $id)->update([
        "buyer_first_name" => $request->buyer_first_name,
        "buyer_last_name" => $request->buyer_last_name,
        "buyer_gmail" => $request->buyer_gmail,
        "product_name" => $request->product_name,
        "color" => $request->color,
        "payment_method" => $request->payment_method,
        "address" => $request->address,
    ]);
    return redirect('/orders/index');
});

//Order Delete

Route::delete('/orders/delete/{id}', function($id){
    DB::table('orders')->where("id",$id)->delete();
    return redirect('/orders/index');
});
