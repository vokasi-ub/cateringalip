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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('auth.login');

Route::get('home', function () {
    return view('dashboard.dashboard');
});

Route::get('kategori', function () {
    return view('dashboard.kategori');
});

Route::get('order', function () {
    return view('dashboard.order');
});

Route::get('katalog', function () {
    return view('dashboard.katalog');
});

/* menampilkan halaman kategori */
Route::resource('kategori', 'HomeController');
/* crud kategori */
Route::get('editkategori/{idkategori}','HomeController@edit');
Route::post('updatekategori/{idkategori}','HomeController@update');
Route::post('tambahkategori','HomeController@store');
Route::get('tambahdata','HomeController@create');
Route::get('hapuskategori/{idkategori}','HomeController@destroy');

/* menampilkan halaman katalog */
Route::resource('katalog', 'KatalogController');
/* crud katalog */
Route::get('editkatalog/{idkatalog}','KatalogController@edit');
Route::post('updatekatalog/{idkatalog}','KatalogController@update');
Route::post('tambahkatalog','KatalogController@store');
Route::get('tambahdatakatalog','KatalogController@create');
Route::get('hapuskatalog/{idkatalog}','KatalogController@destroy');

/* menampilkan halaman order */
Route::resource('order', 'OrderController');
/* crud katalog */
Route::get('editorder/{id_order}','OrderController@edit');
Route::post('updateorder/{id_order}','OrderController@update');
Route::post('tambahorder','OrderController@store');
Route::get('tambahdataorder','OrderController@create');
Route::get('hapusorder/{id_order}','OrderController@destroy');

Route::get('table', function () {
    return view('layouts.table');
});

Route::get('kategory', function(){
    return view('category.index');
});

