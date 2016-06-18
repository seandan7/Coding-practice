<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

	$cities = array('Los Angeles', 'San Francisco', 'New York', 'Miami');
    return view('hello', array('location'=>'California', 'cities' =>$cities));
});

Route::get('category', function() {
	return "Category Page Content";
});

Route::get('category/sf', function() {
	return "Science Fiction";
});

Route::get('category/{parameter}', function($parameter) {
	return "{$parameter} page content";
});


