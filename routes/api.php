<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/products', 'API\ProductController@index'); //ทั้งหมด
Route::post('/products/create', 'Api\ProductController@store');
//-----------------------------SALES--------------------------------//
Route::get('/sales', 'Api\SaleController@index');
Route::post('/sales/create', 'Api\SaleController@store');
