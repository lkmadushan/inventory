<?php

use App\Colour;

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function() {

    Route::get('/inventories', 'InventoriesController@index');
    Route::get('/inventories/{item}', 'InventoriesController@show');
    Route::post('/inventories','InventoriesController@store');

    Route::get('/verifications','InventoryVerificationController@index');
    Route::post('/verifications', 'InventoryVerificationController@store');
    Route::post('/verification-exists','InventoryVerificationController@exists');

    Route::get('/colours/{colour}', function (Colour $colour) {
        return response()->json($colour->toArray());
    });
});

Route::auth();

Route::get('/sandbox', 'OrdersController@index');

Route::get('/{vue?}', 'HomeController@show')->where('vue', '.*')->middleware('auth');
