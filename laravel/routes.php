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