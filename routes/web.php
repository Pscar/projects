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
    Route::get('/report', 'SalesmonthController@report');
    Route::get('/report/expend/pdf', 'ExpenditureController@pdf_expenditure');
    Route::get('/report/expandmounth/expendOct/pdf', 'ExpenditureController@pdf_expenditureOct');
    Route::get('/report/stockps/pdf', 'StockpsController@pdf_index');
    Route::get('/report/sales/pdf', 'SalesmonthController@pdf_salesmonth');
    Route::get('/report/percost/pdf', 'SalesmonthController@pdf_percost');  
    Route::get('/report/salemounth/saleJan/pdf', 'SalesmonthController@pdf_salesmouthJan');
    Route::get('/report/salemounth/saleFeb/pdf', 'SalesmonthController@pdf_salesmouthFeb');
    Route::get('/report/salemounth/saleMar/pdf', 'SalesmonthController@pdf_salesmouthMar');
    Route::get('/report/salemounth/saleApr/pdf', 'SalesmonthController@pdf_salesmouthApr');
    Route::get('/report/salemounth/saleMay/pdf', 'SalesmonthController@pdf_salesmouthMay');
    Route::get('/report/salemounth/saleJun/pdf', 'SalesmonthController@pdf_salesmouthJun');
    Route::get('/report/salemounth/saleJul/pdf', 'SalesmonthController@pdf_salesmouthJul');
    Route::get('/report/salemounth/saleAug/pdf', 'SalesmonthController@pdf_salesmouthAug');
    Route::get('/report/salemounth/saleSep/pdf', 'SalesmonthController@pdf_salesmouthSep');
    Route::get('/report/salemounth/saleOct/pdf', 'SalesmonthController@pdf_salesmouthOct');
    Route::get('/report/salemounth/saleNov/pdf', 'SalesmonthController@pdf_salesmouthNov');
    Route::get('/report/salemounth/saleDec/pdf', 'SalesmonthController@pdf_salesmouthDec');
});
Route::get('/home', 'HomeController@index')->name('home');    
Route::get('/home', 'HomeController@sale');   

