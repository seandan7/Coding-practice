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
	
/* 	$book = new Book;
	$book->writer = 'Mark Twain';
	$book->title = 'The Adventures of Tom Sawyer';
	$book->description = 'A novel about fence painting? I haven\'t read it in a while';
	$book->published = date ('Y-m-d');
	$book->save(); */
	
	$book = Book::find(1);
	//$book->in_store = 1;
	//$book->save();
	
	return $book->in_store;
	
	//return $book->id;
    //return view('welcome');
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


