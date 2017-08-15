<?php

Route::get('/',function (){
    return view ('welcome');
});
Route::resource('book','BookController');

Route::resource('image','ImageController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin','AdminController@index')->middleware('admin');
