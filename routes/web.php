<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\CategoryController;
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
    return view('home');
});

Route::group(['prefix'=>'users'], function(){
    Route::get('login',[logincontroller::class,'getLogin']);
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

// Route::get('/listuser', 'App\Http\Controllers\usercontroller@getAllUser');
// Route::get('/delete{userid}', 'App\Http\Controllers\usercontroller@delete');
// Route::get('/edituser/{userid}', 'App\Http\Controllers\usercontroller@geteditUser');
// Route::post('/edituser', 'App\Http\Controllers\usercontroller@posteditUser');


