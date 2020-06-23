<?php

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

Auth::routes();
Route::middleware(['auth', 'role:guest'])->group(function () {
    Route::resource('bills', 'BillController');
    Route::resource('categorys', 'CategoryController');
    Route::resource('sales', 'SalesController');
    Route::resource('products', 'ProductController');
    Route::resource('lots', 'LotsController');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('informations', 'InformationController');
});
Route::get('/home', 'HomeController@index')->name('home');


