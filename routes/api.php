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
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
	Route::post('details', 'UserController@details');
});


Route::post('other/documents/save', 'addProductController@save');
Route::get('productInfo/details', 'addProductController@getFileInfo');
Route::get('productInfo/detailsbyid/{id}', 'addProductController@getProductInfo');


Route::delete('product/delete/{id}', 'addProductController@deleteFile');
Route::post('product/update/{id}', 'addProductController@update');
Route::get('productdetailById/{id}', 'addProductController@getProductInfo');
Route::get('order/details', 'addProductController@getOrderInfo');
Route::post('product/addcart', 'addProductController@savecart');
Route::get('delivery/pending', 'addProductController@getdeliveryPendingInfo');
Route::get('delivery/done', 'addProductController@getdeliveryDoneInfo');
Route::get('productdeliveryqueue/{id}', 'addProductController@productdeliveryqueue');
Route::get('deliveryDone/{id}', 'addProductController@productdeliveryDone');














