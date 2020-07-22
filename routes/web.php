<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@getIndex')->name('home');

Route::get('about', 'MainController@getAbout')->name('other.about');

Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'account'], function() {
        Route::get('/', 'UserController@getUserInfo')->name('user');
        Route::get('edit/{method}', 'UserController@getUserEdit')->name('user.edit');
        Route::post('edit/{method}', 'UserController@postUserEdit')->name('user.edit');
        Route::get('delete', 'AdminController@getUserDelete')->name('user.delete');
    });
    Route::group(['middleware' => 'car.check'], function() {
        Route::group(['prefix' => 'car'], function() {
            Route::get('add', 'CarController@getCarAdd')->name('car.add');
            Route::post('add', 'CarController@postCarAdd')->name('car.add');
            Route::get('{car_id}/edit', 'CarController@getCarEdit')->name('car.edit');
            Route::post('{car_id}/edit', 'CarController@postCarEdit')->name('car.edit');
            Route::get('{car_id}/delete', 'CarController@getCarDelete')->name('car.delete');
            Route::get('{car_id}', 'CarController@getCar')->name('car');
        });
    
        Route::group(['prefix' => 'gasMileage'], function() {
            Route::get('{car_id}/add', 'GasController@getGasAdd')->name('gas.add');
            Route::post('{car_id}/add', 'GasController@postGasAdd')->name('gas.add');
            Route::get('{id}/edit', 'GasController@getGasEdit')->name('gas.edit');
            Route::post('{id}/edit', 'GasController@postGasEdit')->name('gas.edit');
            Route::get('delete', 'GasController@getGasDelete')->name('gas.delete');
            Route::get('{car_id}', 'GasController@getGas')->name('gas');
        });
    
        Route::group(['prefix' => 'maintenance'], function() {
            Route::get('{car_id}/add', 'MaintController@getMaintenanceAdd')->name('maintenance.add');
            Route::post('{car_id}/add', 'MaintController@postMaintenanceAdd')->name('maintenance.add');
            Route::get('{id}/edit', "MaintController@getMaintenanceEdit")->name('maintenance.edit');
            Route::post('{id}/edit', "MaintController@postMaintenanceEdit")->name('maintenance.edit');
            Route::get('delete', "MaintController@getMaintenanceDelete")->name('maintenance.delete');
            Route::get('{car_id}', "MaintController@getMaintenance")->name('maintenance');
        });
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
        Route::get('/', 'AdminController@getIndex')->name('admin');
        Route::get('user/delete/{id}', 'AdminController@getUserDelete')->name('admin.user.delete');
        Route::get('user/{id}', 'AdminController@getUser')->name('admin.user');
    });
});
Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
