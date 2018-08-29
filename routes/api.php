<?php


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

Route::get('/posts-category/{id}/{count}', 'Api\PostController@index');
Route::get('/make/{make}/presentation', 'Api\MakePresentationController@index');
Route::get('/make/{id}/discount/{discount}', 'Api\MakeDiscountController@show');
Route::post('/subscribes', 'Api\SubscribeController@store');