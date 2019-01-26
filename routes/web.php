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

Route::get('/product', function () {
	return view('product-home');
});

Route::get('/admin', function () {
	return view('addproduct');
});

Route::get('/manageProduct', function () {
	return view('manageProduct');
});

Route::get('/product/edit', function () {
	return view('edit');
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

Route::get('/order/billSlip', function () {
	return view('bill');
});

Route::get('/login', function () {
	return view('login');
});

Route::get('/order/billSlip/{id}', 'addProductController@bill');