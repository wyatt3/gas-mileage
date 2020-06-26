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
    Route::group(['prefix' => 'car'], function() {
        Route::get('/', 'CarController@getCar')->name('car');
        Route::get('/add', 'CarController@getAddCar')->name('car.add');
        Route::post('/add', 'CarController@postAddCar')->name('car.add');
        Route::get('/edit', 'CarController@getEditCar')->name('car.edit');
        Route::post('/edit', 'CarController@postEditCar')->name('car.edit');
        Route::post('/delete', 'CarController@postDeleteCar')->name('car.delete');
    });

    Route::group(['prefix' => 'gasMileage'], function() {
        Route::get('/', 'GasController@getGasMileage')->name('gas');
        Route::get('/edit', 'GasController@getGasEdit')->name('gas.edit');
        Route::post('/edit', 'GasController@postGasEdit')->name('gas.edit');
        Route::post('/delete', 'GasController@postGasDelete')->name('gas.delete');
    });

    Route::group(['prefix' => 'maintenance'], function() {
        Route::get('/', "MaintController@getMaintenance")->name('maintenance');
        Route::get('/edit', "MaintController@getMaintenanceEdit")->name('maintenance.edit');
        Route::post('/edit', "MaintController@postMaintenanceEdit")->name('maintenance.edit');
        Route::post('/delete', "MaintController@postMaintenanceDelete")->name('maintenance.delete');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function() {
        Route::get('/', 'AdminController@getIndex')->name('admin');
        Route::get('/user', 'AdminController@getUser')->name('admin.user');
        Route::post('/user/delete', 'AdminController@deleteUser')->name('admin.user.delete');
    });
});
Auth::routes();
