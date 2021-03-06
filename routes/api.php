<?php

use Illuminate\Http\JsonResponse;
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
/**
 * One and only route provided by this service method POST /validate.
 * EmailValidationController:index handles the request.
 */
Route::post('/validate', 'EmailValidationController@validate')
    ->name('validateEmail');

/**
 * Just a welcome route
 */
Route::get('/', function () {
    return new JsonResponse('Api is up.Welcome..');
});

