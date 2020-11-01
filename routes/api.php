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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('credit', 'App\Http\Controllers\Api\Credit\CreditController@credit');
Route::get('credit/{id}', 'App\Http\Controllers\Api\Credit\CreditController@creditById');

Route::post('login', 'App\Http\Controllers\Api\Auth\LoginController@login');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::post('credit', 'App\Http\Controllers\Api\Credit\CreditController@creditSave');
    Route::put('credit/{id}', 'App\Http\Controllers\Api\Credit\CreditController@creditEdit');
    Route::delete('credit/{id}', 'App\Http\Controllers\Api\Credit\CreditController@creditDelete');
    Route::get('refresh', 'App\Http\Controllers\Api\Auth\LoginController@refresh');
});
