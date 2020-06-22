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

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function() {
    Route::get('/home', 'MainController@getUserIndex')->name('user.home');
    
    Route::group(['prefix' => 'gasMileage'], function() {
        Route::get('/', 'GasController@getGasMileage')->name('gas');
        Route::get('/edit', 'GasController@getGasEdit')->name('gas.edit');
        Route::post('/edit', 'GasController@postGasEdit')->name('gas.edit');
        Route::post('/delete', 'GasController@postGasDelete')->name('gas.delete');
    });

    Route::group(['prefix' => 'maintenance'], function() {
        Route::get('/', "MaintController@getMaintenance")->name('maintenance');
        Route::get('/edit', "MaintController@getMaintenanceEdit")->name('maintenance');
        Route::post('/edit', "MaintController@postMaintenanceEdit")->name('maintenance');
        Route::post('/delete', "MaintController@postMaintenanceDelete")->name('maintenance');

    });

});

Auth::routes();
