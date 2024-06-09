<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
// route::get("/new/{id}", [productController::class , "about"]);
// route::get("/task", [productController::class , "task"])->name("shehram");
// route::get("/task", [productController::class , "task"]);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/addpro', [ProductController::class, 'index'])->name('add');
Route::get('/showpro', [ProductController::class, 'create'])->name('show');
Route::post('/senddata',[ProductController::class,"store"])->name("send");
Route::get('/delete/{id}',[ProductController::class,"destroy"])->name("des");
Route::get('/edit/{id}',[ProductController::class,"edit"])->name("edi");
Route::post('/update/{id}',[ProductController::class,"update"])->name("up");
Route::get('/status/{id}',[ProductController::class,"show"])->name("stat");
Route::post('/cart/{id}',[ProductController::class,"cart"])->name("cart");
Route::get('/viewcart',[ProductController::class,"viewcart"])->name("viewcart");