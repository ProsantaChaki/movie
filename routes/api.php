<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/


Route::group([
    'prefix' => 'v1'
], function () {
    Route::group([
        'prefix' => 'auth'
    ], function () {
        Route::post('login', 'AuthController@login');
        Route::post('signup', 'AuthController@signup');

        Route::group([
            'middleware' => 'auth:api'
        ], function() {
            Route::get('logout', 'AuthController@logout');
            Route::get('user', 'AuthController@user');
        });
    });


    Route::group([
        'middleware' => 'auth:api'
    ], function() {
        Route::get('user', 'UserController@user');
        Route::post('movie/comment','MovieController@saveComment');
        Route::post('movie/create','MovieController@create');

    });

    Route::get('all/movie','MovieController@getAllMovie');
    Route::get('movie/{slug}','MovieController@getSingleMovie');
    Route::get('genre','MovieController@getGenre');
    Route::get('country','MovieController@getCountry');


});
