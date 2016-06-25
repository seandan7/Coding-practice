<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests\BlogRequest;
use App\Blog;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogsController extends Controller
{
	
	public function __construct(){
		//$this->middleware('auth', ['only' => ['create', 'store']]);
		$this->middleware('auth', ['except' => ['index', 'show' ]])
	}
	
	
    public function index(){
		$blogs = Blog::latest()->get();
		return view('blogs.index')->with('blogs',$blogs);
	}
	
	public function create(){
		return view('blogs.create');
	}
	
	public function store(BlogRequest $request){
		$input = Request::all();
		Blog::create($input);
		
		return redirect('blogs');
		}
	
	public function show($id){
		$blog = Blog::findOrFail($id);
		return view('blogs.show')->with('blog',$blog);
	}
	
	public function edit($id){
		
	}
	
	public function update(Request $request, $id){
		
	}
	
	public function destroy($id){
		
	}
}
