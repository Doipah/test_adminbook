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


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redirect', 'SocialAuthFacebookController@redirect');
Route::get('/callback', 'SocialAuthFacebookController@callback');



Route::resource('book', 'BooksController');
Route::resource('catebook', 'CatebooksController');


Route::get('/table_book', 'BooksController@index')->name('home');
Route::get('/cate_book', 'catebooksController@index')->name('home');
// Route::post('book.store','BooksController@store');
// Route::get('image/{filename}', 'BooksController@displayImage')->name('image.displayImage');

Route::post('/orderdata', 'BooksController@OrderData');
