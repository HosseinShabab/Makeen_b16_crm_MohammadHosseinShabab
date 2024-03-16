<?php

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
    return redirect('/users/index');
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
    return redirect('users/index');
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
    return redirect('/products/index');;
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
    return redirect('/products/index');;
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
    return redirect('/orders/index');
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

// categories get
Route::get('/categories/index', function () {
    $categories = DB::table('categories')->get();
    return view('categories.index', ["categories"=> $categories]);
});

Route::get('/categories/create', function(){
    return view('categories.create');
});

Route::get('/categories/edit/{id}', function($id){
    $category = DB::table('categories')->where('id',$id)->first();
    return view('categories.edit', ["category"=>$category]);
});
 // categories post
 Route::post('/categories/create', function(Request $request){
    DB::table('categories')->insert([
        'category_name' => $request->category_name,
        'category_id' => $request->category_id,
    ]);
    return redirect('/categories/index');
 });

 Route::post('/categories/edit/{id}', function(Request $request, $id){
    DB::table("categories")->where("id",$id)->update([
        'category_name' => $request->category_name,
        'category_id' => $request->category_id,
    ]);
    return redirect('/categories/index');
 });

 //categories delete
 Route::delete('/categories/delete/{id}', function($id){
    DB::table('categories')->where('id',$id)->delete();
    return redirect('/categories/index');
 });

 // posts get
Route::get("/posts/create", function(){
    $categories_id = DB::table('categories')->select("category_id")->get();
    return view('/posts/create',["categories_id"=> $categories_id]);
});

Route::get('/posts/index', function () {
    $posts = DB::table('posts')->get();
    return view('posts.index', ['posts'=> $posts]);
});

Route::get('/posts/edit/{id}', function($id){
    $post = DB::table('posts')->where("id",$id)->first();
    $categories_id = DB::table('categories')->select("category_id")->get();
    return view('posts.edit', ['post'=>$post , 'categories_id'=>$categories_id]);
});

// posts post
Route::post('/posts/create', function(Request $request){
    DB::table('posts')->insert([
        "post_title"=> $request->post_title,
        "post_content"=> $request->post_content,
        "category_id"=> $request->category_id,
    ]);
   return redirect('/posts/index');
});
Route::post('/posts/edit/{id}', function(Request $request, $id){
    DB::table('posts')->where("id", $id)->update([
        "post_title"=> $request->post_title,
        "post_content"=> $request->post_content,
        "category_id"=> $request->category_id,
    ]);
    return redirect('/posts/index');
});
// posts delete
Route::delete('/posts/delete/{id}',function($id){
    DB::table('posts')->where('id',$id)->delete();
    return redirect('posts/index');
});
