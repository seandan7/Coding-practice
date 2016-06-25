@extends('layout.master')

@section('content')

<h1>Create Blog</h1>
<br>

{!!  Form::open(['url' => 'blogs'])  !!}<!-- Open the form -->

<div class="col-md-6">

@include('errors.formerrors')

@include('partials.blogform',['submitButton' => 'Add Blog']);
</div>
{!!  Form::close()  !!}<!-- Close the form -->

@endsection