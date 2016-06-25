@extends('layout.master')

@section('content')

<h1>Edit {{ $blog->title }}</h1>


{!!  Form::model($blog, ['method' => 'PATCH', 'action' => ['BlogsController@update', $blog->id])] !!}!-- Open the form to edit -->

<div class="col-md-6">

@if($errors->any())
	<ul class="alert alert-danger">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif

	<div class="form-group">
		{!! Form::label('title', 'Blog Title') !!}
		{!! Form::text('title', null, ['class' => 'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label('body', 'Blog body') !!}
		{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
	</div>
	
	<div class="form-group">
	{!! Form::submit('Edit Blog', ['class' => 'btn btn-primary']) !!}
	</div>
</div>
{!!  Form::close()  !!}<!-- Close the form -->


@endsection