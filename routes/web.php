<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
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
//     return view('homepage/index');
// });


// Route::get('/admin', function () {
//     return view('home');
// });

Route::group(['prefix'=>'users'], function(){
    Route::get('/admin',[HomeController::class,'home'])->name('home');
    Route::get('/',[usercontroller::class,'getAllUser'])->name('listuser');
    Route::get('login',[logincontroller::class,'getLogin'])->name('getLogin');
    Route::post('login',[logincontroller::class,'postLogin']);
    Route::get('register',[logincontroller::class,'getRegister']);
    Route::post('register',[logincontroller::class,'postRegister']);   
});

Route::group(['prefix' =>'category'], function(){
    Route::get('/',[CategoryController::class,'index'])->name('category.index');
    Route::get('create/',[CategoryController::class,'getCreate'])->name('category.create');
    Route::post('create/',[CategoryController::class,'postCreate']);
    Route::get('edit/{id}',[CategoryController::class,'getEditCate']);
    Route::post('edit/{id}',[CategoryController::class,'postEditCate']);
    Route::get('delete/{id}',[CategoryController::class,'delete']);
});



Route::group(['prefix' =>'listuser'], function(){
    Route::get('/',[usercontroller::class,'index'])->name('listuser.index');
    Route::get('edit/{id}',[usercontroller::class,'geteditUser']);
    Route::post('edit/{id}',[usercontroller::class,'posteditUser']);
    Route::get('delete/{id}',[usercontroller::class,'delete']);
});

Route::group(['prefix' =>'homepage'], function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
    Route::get('shoppage',[IndexController::class,'shoppage']);
    Route::get('detail/{id}',[IndexController::class,'getDetail'])->name('detail');
    Route::post('detail/{id}',[IndexController::class,'postDetail']);
});


Route::get('/product/index', [ProductController::class,'index'])->name('products.index');
Route::get('/product/create', [ProductController::class,'create'])->name('products.create');    
Route::get('/product/delete/{id}', [ProductController::class,'destroy'])->name('products.destroy');
Route::get('/product/edit/{id}', [ProductController::class,'edit'])->name('products.edit');
Route::post('/product/update/{id}', [ProductController::class,'update'])->name('products.update');
Route::get('/product/show/{id}', [ProductController::class,'show'])->name('products.show');
Route::post('/product/store', [ProductController::class,'store'])->name('products.store');


