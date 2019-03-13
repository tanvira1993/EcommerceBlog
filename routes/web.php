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
Route::get('/clear-cache', function() {
	$exitCode = Artisan::call('cache:clear');
	Artisan::call('view:clear');
	Artisan::call('config:cache');
	Artisan::call('optimize');
	return ["success"=>2];
    // return what you want
});

Route::get('/', function () {
	return view('welcome');
});

Route::get('/product', function () {
	return view('product-home');
});

Route::get('/login', function () {
	return view('login');
});

Route::get('/searchProduct', function () {
	return view('searchProduct');
});

Route::get('/userreg', function () {
	return view('userRegistration');
});

Route::get('login/logout', function () {
	return (String)view('logout_view');
});

Route::group(['middleware' => 'user'], function()
{
	
	Route::get('/userOrderList', function () {
		return view('userOrderList');
	});
	Route::get('/userDeliveryPendingList', function () {
		return view('userDeliveryPendingList');
	});
	Route::get('/userDeliveryDoneList', function () {
		return view('userDeliveryDoneList');
	});
	

});

Route::group(['middleware' => 'superAdmin'], function()
{
	
	Route::get('/adminreg', function () {
		return view('adminRegistration');
	});

	Route::get('/product/edit', function () {
		return view('edit');
	});
	
	Route::get('/categories', function () {
		return view('categories');
	});
	Route::get('/subCategories', function () {
		return view('subCategories');
	});

});

Route::group(['middleware' => 'admin'], function()
{
	

});

Route::group(['middleware' => 'UserCommonMiddleware'], function()
{
	Route::get('/order/billSlip', function () {
		return view('bill');
	});

	Route::get('/order/billSlip/{id}', 'addProductController@bill');

	
});



Route::group(['middleware' => 'CommonMiddleware'], function()
{
	Route::get('/admin', function () {
		return view('addproduct');
	});

	Route::get('/manageProduct', function () {
		return view('manageProduct');
	});

	
	Route::get('/orderlist', function () {
		return view('orderlist');
	});

	Route::get('/deliverylist', function () {
		return view('deliveryqueue');
	});

	Route::get('/deliveryDoneList', function () {
		return view('deliveryDone');
	});


});

