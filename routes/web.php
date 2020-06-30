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
        Route::get('/', 'MainController@getUserInfo')->name('user');
        Route::get('/edit/{method}', 'MainController@getUserEdit')->name('user.edit');
        Route::post('/edit/{method}', 'MainController@postUserEdit')->name('user.edit');
        Route::get('/delete', 'AdminController@getUserDelete')->name('user.delete');
    });

    Route::group(['prefix' => 'car'], function() {
        Route::get('add', 'CarController@getCarAdd')->name('car.add');
        Route::post('add', 'CarController@postCarAdd')->name('car.add');
        Route::get('edit', 'CarController@getCarEdit')->name('car.edit');
        Route::post('edit', 'CarController@postCarEdit')->name('car.edit');
        Route::get('delete', 'CarController@getCarDelete')->name('car.delete');
        Route::get('{id}', 'CarController@getCar')->name('car');
    });

    Route::group(['prefix' => 'gasMileage'], function() {
        Route::get('add/{car_id}', 'GasController@getGasAdd')->name('gas.add');
        Route::post('add/{car_id}', 'GasController@postGasAdd')->name('gas.add');
        Route::get('edit', 'GasController@getGasEdit')->name('gas.edit');
        Route::post('edit', 'GasController@postGasEdit')->name('gas.edit');
        Route::get('delete', 'GasController@getGasDelete')->name('gas.delete');
        Route::get('{car_id}', 'GasController@getGas')->name('gas');
    });

    Route::group(['prefix' => 'maintenance'], function() {
        Route::get('/add', 'MaintenanceController@getMaintenanceAdd')->name('maintenance.add');
        Route::post('/add', 'MaintenanceController@postMaintenanceAdd')->name('maintenance.add');
        Route::get('/edit', "MaintController@getMaintenanceEdit")->name('maintenance.edit');
        Route::post('/edit', "MaintController@postMaintenanceEdit")->name('maintenance.edit');
        Route::get('/delete', "MaintController@getMaintenanceDelete")->name('maintenance.delete');
        Route::get('/{car_id}', "MaintController@getMaintenance")->name('maintenance');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
        Route::get('/', 'AdminController@getIndex')->name('admin');
        Route::get('/user/delete/{id}', 'AdminController@getUserDelete')->name('admin.user.delete');
        Route::get('/user/{id}', 'AdminController@getUser')->name('admin.user');
    });
});
Auth::routes();
