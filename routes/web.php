<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
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

Route::group(['prefix'=>'users'], function(){
    Route::get('login',[logincontroller::class,'getLogin']);
    Route::post('login',[logincontroller::class,'postLogin']);
    Route::get('register',[logincontroller::class,'getRegister']);
    Route::post('register',[logincontroller::class,'postRegister']);
});
