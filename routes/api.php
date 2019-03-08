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
Route::post('createUser', 'UserController@saveUser');
Route::post('login', 'UserController@login');
Route::group(['middleware' => 'auth:api'], function(){

});

Route::get('productInfo/details', 'addProductController@getFileInfo');

Route::get('productInfo/detailsbyid/{id}', 'addProductController@getProductInfo');


//Middleware Add
Route::group(['middleware' => 'user'], function()
{
	Route::get('user/order/details', 'addProductController@getUserOrderList');
	Route::get('user/deliveryPending/details', 'addProductController@getOrderInProgressList');
	Route::get('user/deliveryDone/details', 'addProductController@getOrderHistory');
	Route::post('product/addcart', 'addProductController@savecart');

});


Route::group(['middleware' => 'admin'], function()
{

});


Route::group(['middleware' => 'superAdmin'], function()
{
	Route::post('createAdmin', 'UserController@saveAdmin');
	Route::delete('product/delete/{id}', 'addProductController@deleteFile');

	
});

// for admin and super admin
Route::group(['middleware' => 'CommonMiddleware'], function()
{
	Route::post('other/documents/save', 'addProductController@save');
	Route::post('product/update/{id}', 'addProductController@update');	
	Route::get('deliveryDone/{id}', 'addProductController@productdeliveryDone');
	Route::get('productdeliveryqueue/{id}', 'addProductController@productdeliveryqueue');
	Route::get('order/details', 'addProductController@getOrderInfo');
	Route::get('delivery/done', 'addProductController@getdeliveryDoneInfo');
	Route::get('productdetailById/{id}', 'addProductController@getProductInfo');
	Route::get('delivery/pending', 'addProductController@getdeliveryPendingInfo');
	Route::get('productInfo/details/manage', 'addProductController@getFileInfoForManages');

});

//for all user
Route::group(['middleware' => 'UserCommonMiddleware'], function()
{
	
});

//for user and super admin
Route::group(['middleware' => 'UserSuperAdminCommonMiddleware'], function()
{
	
	
});



