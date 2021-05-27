<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(["prefix" => "latihan"], function(){
    Route::get("/kategori/all", [CategoryController::class, "index"]);
    Route::get("/kategori/search", [CategoryController::class, "search"]);
    Route::get("/kategori/{id}/delete", [CategoryController::class, "delete"]);
    Route::get("/kategori/{id}/restore", [CategoryController::class, "restore"]);
    Route::get("/kategori/{id}/permanent-delete", [CategoryController::class, "permanentDelete"]);
    Route::view("layouts", "child");
});

Route::get("/hello", [WelcomeController::class, 'beriSalam']);

Route::get('/product/display', [ProductController::class, 'showAll']);

Route::post('/product/save', [ProductController::class, 'saveNew']);

Route::get("/pintu-masuk", [TestController::class, 'pintuMasuk']);

Route::get("products/{id}", "ProductController@show");

Route::get("/product/{product_id}", [ProductController::class, 'show']);



