@extends('errors.error')	
@yield('content')
<div class="hit-the-floor">404</div>

<div class="container d-flex justify-content-center">
	<a href="{{ url('/') }}">
		<button class="btn btn-primary btn-lg">De Regreso</button>
	</a>
</div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('assets/js/bsadmin.js') }}"></script>
</body>
</html>
