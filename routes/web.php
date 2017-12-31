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
Route::get('/', 'PageController@getHome');

Route::get('/login', 'PageController@getLogin');

Route::get('/contact', 'PageController@getContact');

Route::get('/signup', 'PageController@getSignup');

Route::get('/profil', 'PageController@getProfil');

Route::get('/welcome', 'PageController@getWelcome');

Route::get('/messages', 'MessagesController@getMessages');

Route::get('/workshop', 'PageController@getWorkshop');

Route::get('/kelas', 'PageController@getKelas');

Route::get('/daftar', 'PageController@getDaftar');

Route::post('/contact/submit', 'MessagesController@submit');

Route::post('/daftar/submit', 'DaftarController@submit');

Route::resource('posts', 'PostController');

Route::resource('User', 'HomeController');


Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');
