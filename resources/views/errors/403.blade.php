@extends('errors.error')

@section('content')

<div class="hit-the-floor">403</div>

<div class="container d-flex justify-content-center">
	<a href="{{ url('/') }}">
		<button class="btn btn-primary btn-lg">De Regreso</button>
	</a>
</div>

@endsection