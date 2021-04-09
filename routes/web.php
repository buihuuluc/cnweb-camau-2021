<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ProductController; //laravel 8

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

Route::get('/', 'ProductController@index'); //laravel 7
// Route::get('/', [ProductController::class,'index']); //laravel 8

Route::get('/product/{id}', 'ProductController@show');

Route::get('/product/type/{id}', 'ProductController@showProductByType');