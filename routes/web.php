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

#Route::get('/', function () {
#    return view('welcome');
#});

#Route::get('/hola', function(){
#    return '¡Hola mundo!';
#});

#Route::get('/nombre', function()
#{

#    return view('hola', array('nombre' => "oscarin"));
#});



#Route::get('/login', function () {
 #   return view('auth.login');
#}); Estas rutas se redefiniran con middelware

#Route::get('/logout', function () {
 #   return 'logout usuario';
#});


Route::group(['middleware' => 'auth'], function() {
    Route::get('catalog',        'CatalogController@getIndex');
    Route::get('catalog/create', 'CatalogController@getCreate');
    Route::get('catalog/show/{id}', 'CatalogController@getShow');
    Route::get('catalog/edit/{id}', 'CatalogController@getEdit');
    // ...
});
 Auth::routes();
 Route::get('/home', 'HomeController@index')->name('home');



