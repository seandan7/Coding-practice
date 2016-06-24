<?php

namespace App\Http\Controllers;

use Request;

use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
    public function index(){
		$blogs = Blog::all();
		return view('blogs.index')->with('blogs',$blogs);
	}
	
	public function create(){
		return view('blogs.create');
	}
	
	public function store(){
		$input = Request::all();
		return $input;
	}
	
	public function show($id){
		$blog = Blog::findOrFail($id);
		return view('blogs.show')->with('blog',$blog);
	}
	
	public function edit($id){
		// Edit a blog
	}
	
	public function update(Request $request, $id){
		
	}
	
	public function destroy($id){
		
	}
}
