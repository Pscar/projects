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
    return view('login');
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
    Route::get('reportdate', 'ViewController@reportdate');
    Route::post('reportdate', 'ViewController@reportdate');
    Route::get('reportmonth', 'ViewController@reportmonth');
    Route::post('reportmonth', 'ViewController@reportmonth');
    Route::get('reportyear', 'ViewController@reportyear');
    Route::post('reportyear', 'ViewController@reportyear');
    // ------------------------------report sales----------------------------------------------//
    // Route::get('report/salesreport/reportsales_year', 'SalesmonthController@reportsalesyear');
    // Route::get('report/salesreport/reportsales_month', 'SalesmonthController@reportsalesmonth');
    // Route::get('report/salesreport/reportsales_date', 'SalesmonthController@reportsalesdate');
    // Route::post('report/salesreport/reportsales_date', 'SalesmonthController@reportsalesdate');
    // Route::post('report/salesreport/reportsales_year', 'SalesmonthController@reportsalesyear');
    // Route::post('report/salesreport/reportsales_month', 'SalesmonthController@reportsalesmonth');
    //-----------------------------------------------------------------------------------------//
    // Route::get('report/stockps/pdf', 'StockpsController@pdf_index');
    // Route::get('report/expend/pdf', 'ExpenditureController@pdf_expenditure');
    // Route::get('report/salesreport/percost/pdf', 'SalesmonthController@pdf_percost');  
});
Route::get('/home', 'HomeController@index')->name('home');    
Route::get('/home', 'HomeController@sale');   

