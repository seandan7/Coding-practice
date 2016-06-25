<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello',function(){
	return view('hello');
});

Route::get('contact','PagesController@contact');

//Route::get('blogs','BlogsController@index');
//Route::get('blogs', ['as' => 'blogs.index', 'uses' => 'BlogsController1@index']);
//Route::get('blogs/{id}','BlogsController1@show');

Route::resource('blogs', 'BlogsController');



// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' =>'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register',['as'=>'register', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');