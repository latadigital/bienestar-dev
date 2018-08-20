<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//WEB
Route::get('/', function () {
    return view('web/home');
});

Route::get('/blog', 'web\BlogController@index')->name('blog');
Route::get('/contacto', 'web\ContactoController@index')->name('contacto');
Route::post('/contacto', 'web\ContactoController@store')->name('contacto.store');
Route::get('/somos', 'web\SomosController@index')->name('Somos');
Route::get('/programa-descuentos', 'web\ProgramaDescuentosController@index')->name('Programa_Descuentos');
Route::get('/faqs', 'web\FaqController@index')->name('Faqs');

Route::get('/blog/{slug}','web\BlogController@post')->name('post');


// HEAD
Route::get('/categorias/{slug}','web\BlogController@category')->name('category');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.index');
    Route::resource('/users', 'Admin\UsersController');
    Route::resource('/blog', 'Admin\BlogController');
});