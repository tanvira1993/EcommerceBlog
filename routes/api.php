<?php

use Illuminate\Http\Request;

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


Route::post('other/documents/save', 'addProductController@save');
Route::get('productInfo/details', 'addProductController@getFileInfo');

Route::delete('product/delete/{id}', 'addProductController@deleteFile');
Route::post('product/update/{id}', 'addProductController@update');
Route::get('productdetailById/{id}', 'addProductController@getProductInfo');
Route::get('order/details', 'addProductController@getOrderInfo');






