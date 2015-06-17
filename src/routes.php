<?php

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'namespace' => 'RLStudio\Admin\Controllers'], function() {
    Route::get('dashboard', ['uses' => 'AdminController@getDashboard', 'as' => 'admin.dashboard']);
    Route::get('/', ['uses' => 'AdminController@getDashboard', 'as' => 'admin.dashboard']);
    Route::controller('/', 'AuthController');
    Route::controller('/', 'AdminController');
    Route::group(['prefix' => '{model}'], function() {
        Route::resource('/', )
    });
});