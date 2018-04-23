@extends('home')

@section('principal')
<div class="container my-5">
    <h1 class="text-center text-muted">Crear Nuevo Rol </h1>
    <div class="row d-flex justify-content-center">
    	<div class="col-xs-10
                                col-sm-10                    
                                col-md-6
                                col-lg-7
                                col-xl-7
                                bg-form">
		{{   Form::open(['route' => 'roles.store']) }}

         @include('roles.partials.form')
                        
        {{   Form::close() }}
        </div>
        
        
    	
        
    
    </div>
    
</div>
@endsection