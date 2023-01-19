<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
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

Route::get('/shop/form',[ShopController::class,'shop_form'])->name('add.shop');
Route::post('/shop/store',[ShopController::class,'shop_store'])->name('shop.store');
Route::get('/shop/list',[ShopController::class,'shop_list'])->name('shop.list');

Route::get('/category/add',[CategoryController::class,'category_form'])->name('add.category');
Route::Post('/category/store',[CategoryController::class,'category_store'])->name('category.store');
