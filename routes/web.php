<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[IndexController::class,'home'])->name('home.route');

Route::get('/product/add',[ProductController::class,'product'])->name('add.product');
Route::get('/product/list',[ProductController::class,'product_list'])->name('product.list');
Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');
