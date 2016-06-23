@extends('layout.master')

@section('content')
	<h1>My Latest Blogs</h1>
	
	@foreach($blogs as $blog)
	<a href="{{action('BlogsController@show', [$blog->idat]))">	<h1>{{ $blog->title }}</h1></a>
		<p>{{ $blog->body }} </p>
	@endforeach
@endsection