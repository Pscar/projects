<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('auth/login');
});

Auth::routes();

Route::middleware(['auth', 'role:staff,admin'])->group(function () {
    Route::resource('bills', 'BillController');
    Route::resource('categorys', 'CategoryController');
    Route::resource('sales', 'SalesController');
    Route::resource('products', 'ProductController');
    Route::resource('lots', 'LotsController');
    Route::resource('bills', 'BillsController');
    Route::get('/sales/view', function () {
        return view('view');
    });
});
Route::middleware(['auth', 'role:admin'])->group(function ()
 {
    Route::resource('user', 'UserController');
    // ------------------------------รายงานยอดชาย----------------------------------------------//
        Route::get('report/salesreport/reportdate', 'ViewController@reportdate');
        Route::post('report/salesreport/reportdate', 'ViewController@reportdate');
        Route::get('report/salesreport/reportmonth', 'ViewController@reportmonth');
        Route::post('report/salesreport/reportmonth', 'ViewController@reportmonth');
        Route::get('report/salesreport/reportyear', 'ViewController@reportyear');
        Route::post('report/salesreport/reportyear', 'ViewController@reportyear');
    //-----------------------------------------------------------------------------------------//
    //---------------------------------รายงานสั่งซื้อ------------------------------------------//
    Route::get('report/expendreport/reportexpendituremonth', 'ViewController@reportexpendituremonth');
    Route::post('report/expendreport/reportexpendituremonth', 'ViewController@reportexpendituremonth');
    //-------------------------------รายงานสต็อค-------------------------------------------------------//
    Route::get('report/stockps/pdf', 'StockpsController@pdf_index');

});

Route::get('/home', 'HomeController@index')->name('home');

