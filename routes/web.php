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
Route::get('/',function(){
	return view('auth.login');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kelurahan', 'KelurahansController@index')->name('kelurahan');
Route::get('/kelurahan/create', 'KelurahansController@create')->name('kelurahan/create');
Route::post('/kelurahan/store', 'KelurahansController@store')->name('kelurahan/store');
Route::get('/kelurahan/show/{id}', 'KelurahansController@show')->name('kelurahan/show/{id}');
Route::post('/kelurahan/update', 'KelurahansController@update')->name('kelurahan/update');
Route::get('/kelurahan/delete/{id}', 'KelurahansController@delete')->name('kelurahan/delete/{id}');




Route::get('/pasien', 'PasiensController@index')->name('pasien');
Route::get('/pasien/create', 'PasiensController@create')->name('pasien/create');
Route::post('/pasien/store', 'PasiensController@store')->name('pasien/store');
Route::get('/pasien/show/{id}', 'PasiensController@show')->name('pasien/show/{id}');
Route::post('/pasien/update', 'PasiensController@update')->name('pasien/update');