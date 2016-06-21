@extends('layout.main');

@section('books');

		@foreach ($books as $book)
			<li>{{$book->title}} By: {{$book->writer}}</li>
			<li>
		@endforeach

@stop