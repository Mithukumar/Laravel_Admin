<?php

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('general','GeneralController');
Route::resource('menu','MenuController');
Route::resource('service','ServiceController');
Route::resource('post','PostController');
Route::resource('footer','FooterController');
Route::resource('about','AboutController');
Route::resource('logo','LogoController');
Route::resource('icon','IconController');