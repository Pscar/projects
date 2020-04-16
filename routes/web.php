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
Route::middleware(['auth', 'role: เภสัชกร'])->group(function () {
    Route::resource('bills', 'billsController');
    Route::resource('categorys', 'categorysController');
    Route::resource('lots', 'lotsController');
    Route::resource('sale', 'saleController');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    
});


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('informations', 'informationsController');

Route::resource('products', 'ProductsController');