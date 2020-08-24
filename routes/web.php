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
Route::middleware(['auth', 'role:staff,admin'])->group(function () {
    Route::resource('bills', 'BillController');
    Route::resource('categorys', 'CategoryController');
    Route::resource('sales', 'SalesController');
    Route::resource('products', 'ProductController');
    Route::resource('lots', 'LotsController');
    Route::resource('bills', 'BillsController');
   });
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('user', 'UserController');
    Route::get('/report/expend/pdf', 'ExpenditureController@pdf_expenditure');
    Route::get('/report/sales/pdf', 'SalesmonthController@pdf_salesmonth');
    Route::get('/report/stockps/pdf', 'StockpsController@pdf_index');
});
Route::get('/home', 'HomeController@index')->name('home');    
Route::get('/home', 'HomeController@sale');   

