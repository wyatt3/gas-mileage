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
        Route::get('/edit', 'MainController@getUserEdit')->name('user.edit');
        Route::post('/edit', 'MainController@postUserEdit')->name('user.edit');
        Route::get('/delete', 'AdminController@getUserDelete')->name('user.delete');
    });

    Route::group(['prefix' => 'car'], function() {
        Route::get('/', 'CarController@getCar')->name('car');
        Route::get('/add', 'CarController@getCarAdd')->name('car.add');
        Route::post('/add', 'CarController@postCarAdd')->name('car.add');
        Route::get('/edit', 'CarController@getCarEdit')->name('car.edit');
        Route::post('/edit', 'CarController@postCarEdit')->name('car.edit');
        Route::get('/delete', 'CarController@getCarDelete')->name('car.delete');
    });

    Route::group(['prefix' => 'gasMileage'], function() {
        Route::get('/', 'GasController@getGas')->name('gas');
        Route::get('/add', 'GasController@getGasAdd')->name('gas.add');
        Route::post('/add', 'GasController@postGasAdd')->name('gas.add');
        Route::get('/edit', 'GasController@getGasEdit')->name('gas.edit');
        Route::post('/edit', 'GasController@postGasEdit')->name('gas.edit');
        Route::get('/delete', 'GasController@getGasDelete')->name('gas.delete');
    });

    Route::group(['prefix' => 'maintenance'], function() {
        Route::get('/', "MaintController@getMaintenance")->name('maintenance');
        Route::get('/add', 'MaintenanceController@getMaintenanceAdd')->name('maintenance.add');
        Route::post('/add', 'MaintenanceController@postMaintenanceAdd')->name('maintenance.add');
        Route::get('/edit', "MaintController@getMaintenanceEdit")->name('maintenance.edit');
        Route::post('/edit', "MaintController@postMaintenanceEdit")->name('maintenance.edit');
        Route::get('/delete', "MaintController@getMaintenanceDelete")->name('maintenance.delete');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
        Route::get('/', 'AdminController@getIndex')->name('admin');
        Route::get('/user', 'AdminController@getUser')->name('admin.user');
        Route::get('/user/delete', 'AdminController@getUserDelete')->name('admin.user.delete');
    });
});
Auth::routes();
