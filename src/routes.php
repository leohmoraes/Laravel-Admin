<?php

Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'namespace' => 'RLStudio\Admin\Controllers'], function() {
    Route::controller('/', 'AuthController');
    Route::controller('/', 'AdminController');
});