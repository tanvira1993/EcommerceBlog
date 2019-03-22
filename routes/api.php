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
Route::get('categoryInfo', 'categoryController@getAllCategory');
Route::get('subCategoryInfo', 'categoryController@getAllSubCategory');

Route::get('searchCategoryInfo/{id}', 'categoryController@getSearchedCategoryList');

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
	Route::post('product/update/{id}', 'addProductController@update');
	Route::post('createCategory', 'categoryController@categoryStore');
	Route::post('subCreateCategory', 'categoryController@subCategoryStore');
	Route::get('categoryList', 'categoryController@getAllCategory');
	Route::get('subCategoryList', 'categoryController@getAllSubCategory');
	Route::delete('category/delete/{id}', 'categoryController@deleteCategory');
	Route::delete('subcategory/delete/{id}', 'categoryController@deleteSubCategory');
	
	Route::get('editCategory/{id}', 'categoryController@getCategoryById');
	Route::post('editCategoryasve/{id}', 'categoryController@updateCategory');
	
	Route::get('editsubCategory/{id}', 'categoryController@getsubCategoryById');
	Route::post('editsubCategoryasve/{id}', 'categoryController@updateSubCategory');

	

	Route::get('allproductInfo/manage', 'addProductController@getFileInfo');



});

// for admin and super admin
Route::group(['middleware' => 'CommonMiddleware'], function()
{
	Route::post('other/documents/save', 'addProductController@save');
	// Route::post('product/update/{id}', 'addProductController@update');	
	Route::get('deliveryDone/{id}', 'addProductController@productdeliveryDone');
	Route::get('productdeliveryqueue/{id}', 'addProductController@productdeliveryqueue');
	Route::get('order/details', 'addProductController@getOrderInfo');
	Route::get('delivery/done', 'addProductController@getdeliveryDoneInfo');
	Route::get('productdetailById/{id}', 'addProductController@getProductInfo');
	Route::get('delivery/pending', 'addProductController@getdeliveryPendingInfo');
	Route::get('productInfo/details/manage', 'addProductController@getFileInfoForManages');	
	Route::get('subCategoryInfo/{id}', 'categoryController@getSelectedSubCategoryList');

});

//for all user
Route::group(['middleware' => 'UserCommonMiddleware'], function()
{
	
	Route::get('nameuser/{id}', 'UserController@getuserInfoByloggedIn');

});

//for user and super admin
Route::group(['middleware' => 'UserSuperAdminCommonMiddleware'], function()
{
	
	
});



