<?php

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

// Route::get('/', function () {
//     return view('productlist');
// });

Route::get('/', 'App\Http\Controllers\Product@productlist');

// Route::get('/productlist', 'App\Http\Controllers\Product@productlist');
Route::get('productdetails/{id}', 'App\Http\Controllers\Product@productdetails');
Route::post('productdetails/{id}', 'App\Http\Controllers\Product@productdetails');

Route::get('payment/{price}','App\Http\Controllers\Product@payment');
Route::post('payment/{price}','App\Http\Controllers\Product@payment');
