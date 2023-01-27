<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\IndexFrontendController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Models\Category;
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
//Frontend
Route::get('/',[IndexFrontendController::class,'home'])->name('home');


Route::get('/mens/products',[ProductController::class,'mens_products'])->name('mens.products');
Route::get('/women/products',[ProductController::class,'women_products'])->name('women.products');
Route::get('/kinds/products',[ProductController::class,'kids_products'])->name('kids.products');




//Backend

    Route::get('/show/login',[LoginController::class,'show_login'])->name('show.login');
    Route::post('/login/process',[LoginController::class,'login_process'])->name('login.process');
    Route::get('/user/registration',[LoginController::class,'registration'])->name('user.registration');
    Route::post('/registration/create',[LoginController::class,'registration_create'])->name('registration.create');


    Route::group(['middleware'=>'admin','prefix'=>'admin'], function(){


    Route::get('/',[IndexController::class,'home'])->name('home.route');
    Route::get('/dashboard',[IndexController::class,'dashboard'])->name('dashboard.route');

    Route::get('/product/add',[ProductController::class,'product'])->name('add.product');
    Route::get('/product/list',[ProductController::class,'product_list'])->name('product.list');
    Route::post('/product/store',[ProductController::class,'product_store'])->name('product.store');

    Route::get('/shop/form',[ShopController::class,'shop_form'])->name('add.shop');
    Route::post('/shop/store',[ShopController::class,'shop_store'])->name('shop.store');
    Route::get('/shop/list',[ShopController::class,'shop_list'])->name('shop.list');
    Route::get('/delete/shop/{id}',[ShopController::class,'delete_shop'])->name('delete.shop');

    Route::get('/category/add',[CategoryController::class,'category_form'])->name('add.category');
    Route::Post('/category/store',[CategoryController::class,'category_store'])->name('category.store');
    Route::get('/category/list',[CategoryController::class,'category_list'])->name('category.list');
    Route::get('/delete/Category/{id}',[CategoryController::class,'delete_category'])->name('category.delete');


});
