@extends('layout.master')

@section('content')

	@forelse($people as $person)
	{{ $person }}
	@empty
		No one in list
	@endforelse
 
	
@endsection