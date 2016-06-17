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
	/*
	Schema::create('books',function($newtable){
		$newtable->increments('id');
		// Default 255 character length
		$newtable->string('writer');
		$newtable->string('title',300);
		$newtable->text('description',500);
		$newtable->date('published');
		$newtable->integer('copies');
		$newtable->timestamps();
	});
	*/
	Schema::table('book',function($newtable){
		$newtable->boolean('in_store');
		$newtable->dropColumn('copies');
	}
    return view('welcome');
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

Route::get

