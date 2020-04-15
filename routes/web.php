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



Route::get('/', 'Controller@landpage');

Auth::routes();
Route::group(['middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/list_users', 'HomeController@list_users');
Route::get('list_users/{id}', 'HomeController@destroy');

Route::get('headers','HomeController@edit_headers');
Route::post('headers','HomeController@update_headers');

Route::get('nosotros','HomeController@edit_nosotros');
Route::post('nosotros','HomeController@update_nosotros');

Route::get('menu','HomeController@edit_menu');
Route::post('menu','HomeController@update_menu');

Route::get('ubicacion','HomeController@edit_ubicacion');
Route::post('ubicacion','HomeController@update_ubicacion');

Route::get('galeria','HomeController@edit_galeria');
Route::post('galeria','HomeController@update_galeria');

Route::get('arepa','HomeController@edit_arepa');
Route::post('arepa','HomeController@update_arepa');

Route::get('cachapa','HomeController@edit_cachapa');
Route::post('cachapa','HomeController@update_cachapa');

Route::get('desayuno','HomeController@edit_desayuno');
Route::post('desayuno','HomeController@update_desayuno');

Route::get('hamburguesa','HomeController@edit_hamburguesa');
Route::post('hamburguesa','HomeController@update_hamburguesa');

Route::get('hotdog','HomeController@edit_hotdog');
Route::post('hotdog','HomeController@update_hotdog');

Route::get('empanada','HomeController@edit_empanada');
Route::post('empanada','HomeController@update_empanada');

Route::get('pepito','HomeController@edit_pepito');
Route::post('pepito','HomeController@update_pepito');

Route::get('parrilla','HomeController@edit_parrilla');
Route::post('parrilla','HomeController@update_parrilla');

Route::get('patacon','HomeController@edit_patacon');
Route::post('patacon','HomeController@update_patacon');

Route::get('bebida','HomeController@edit_bebida');
Route::post('bebida','HomeController@update_bebida');

});
