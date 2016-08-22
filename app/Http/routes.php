<?php

Route::group(['prefix' => 'api/v1'], function() {

    Route::get('/inventories', 'InventoriesController@index');
    Route::get('/inventories/{item}', 'InventoriesController@show');
    Route::post('/inventories','InventoriesController@store');

    Route::get('/inventories/verification','InventoriesController@index');
    Route::post('/inventories/verify/{item}', 'InventoryVerificationController@store');
    

});

Route::get('/{vue?}', 'HomeController@show')->where('vue', '.*');x
