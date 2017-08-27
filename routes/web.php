<?php

Route::get('login','LoginController@index');
Route::post('login','LoginController@formSubmit');

Route::get('register',"RegisterController@index");
Route::post('register',"RegisterController@formSubmit");

Route::get('/',function (){
    return view ('index');
});
Route::resource('book','BookController');

Route::resource('image','ImageController');

//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin','AdminController@index')->middleware('admin');
