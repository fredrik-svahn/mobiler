<?php
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
Route::group(['namespace' => 'API'], function() {

    Route::group(['namespace' => 'Customer'], function() {
        Route::resource('customers', 'CustomerController');
        Route::resource('customers.addresses', 'AddressController');
        Route::resource('customers.orders', 'OrderController');
    });

    Route::resource('conditions', 'ConditionController');
});
