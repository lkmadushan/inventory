<?php

use App\Colour;

Route::group(['prefix' => 'api/v1', 'middleware' => 'auth'], function() {

    Route::get('/current','Auth\AuthController@getCurrentUser');

    Route::get('/inventories', 'InventoriesController@index');
    Route::get('/inventories/{item}', 'InventoriesController@show');
    Route::post('/inventories','InventoriesController@store');
    Route::patch('/inventories/{item}','InventoriesController@update');

    Route::get('/verifications','InventoryVerificationController@index');
    Route::post('/verifications', 'InventoryVerificationController@store');
    Route::post('/verification-exists','InventoryVerificationController@exists');

    Route::post('/users','UsersController@store');
    Route::get('/users/{user}', 'UsersController@show');
    Route::get('/users','UsersController@index');
    Route::patch('/users/{user}','UsersController@update');

    Route::get('/material-requests', 'MaterialRequestsController@index');
    Route::get('/material-requests/{id}', 'MaterialRequestsController@show');
    Route::post('/material-requests','MaterialRequestsController@store');
    Route::delete('/material-requests/{materialrequest}', 'MaterialRequestsController@distroy');


    Route::get('/colours/{colour}', function (Colour $colour) {
        return response()->json($colour->toArray());
    });
});

Route::auth();

Route::get('/sandbox', 'OrdersController@index');

Route::get('/{vue?}', 'HomeController@show')->where('vue', '.*')->middleware('auth');
