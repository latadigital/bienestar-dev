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
    \Carbon\Carbon::setLocale('es');
    $posts = \App\Post::query()
        ->where('primary', 1)
        ->where('status', 1)
        ->get();
    return view('web/home', compact('posts'));
});

Route::get('/temas-de-interes/', 'web\BlogController@index')->name('interes');
Route::get('/contacto', 'web\ContactoController@index')->name('contacto');
Route::post('/contacto', 'web\ContactoController@store')->name('contacto.store');
Route::get('/somos', 'web\SomosController@index')->name('Somos');
Route::get('/programa-descuentos', 'web\ProgramaDescuentosController@index')->name('Programa_Descuentos');
Route::get('/faqs', 'web\FaqController@index')->name('Faqs');
Route::get('/terminos-de-uso', 'web\TerminosController@index')->name('Terminos');
Route::get('/politicas', 'web\PoliticasController@index')->name('Politicas');



Route::get('/blog/{slug}','web\BlogController@post')->name('post');


// HEAD
Route::get('/categorias/{slug}','web\BlogController@category')->name('category');
Route::get('/generate/discount/{id}', 'PdfCouponController@index')->name('pdf.show');
Route::get('/download/discount/{id}', 'PdfCouponController@download')->name('pdf.download');
Route::get('/print/discount/{id}', 'PdfCouponController@print')->name('pdf.print');

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'Auth\LoginController@login');
    Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::group(['middleware' => ['auth', 'role']], function () {
        Route::get('/', 'Admin\AdminController@index')->name('admin.index');
        Route::resource('/users', 'Admin\UsersController');
        Route::resource('/blog', 'Admin\BlogController');
        Route::resource('/make', 'Admin\MakeController');
        Route::resource('/discount', 'Admin\DiscountController');
        Route::resource('/subscribes', 'Admin\SubscribeController');
    });
});