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
Route::get('/somos', 'web\SomosController@index')->name('Somos');
Route::get('/programa-descuentos', 'web\ProgramaDescuentosController@index')->name('Programa_Descuentos');

Route::get('/blog/{slug}','web\BlogController@post')->name('post');


//Route::get('/categorias/{slug}','web\BlogController@category')->name('category');
Route::get('/tags/{slug}','web\BlogController@tag')->name('tag');




//ADMIN

Route::resource('tags', 'Admin\TagController');
Route::resource('categories', 'Admin\CategoryController');
Route::resource('posts', 'Admin\PostController');





//BLOG
//Route::get('web/blog', 'web\BlogController@index')->name('blog');