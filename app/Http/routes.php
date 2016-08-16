<?php

Route::group(['prefix' => 'api/v1'], function() {

    Route::get('/inventories', 'InventoriesController@index');
    Route::get('/inventories/{item}', 'InventoriesController@show');
    Route::post('/inventories/{item}/physical-stocks', 'InventoriesController@storePhysicalStock');
    
    Route::get('/inventories/verification','InventoriesController@index');
    

});

Route::get('/{vue?}', 'HomeController@show')->where('vue', '.*');x
