@extends('home')

@section('principal')
<div class="container my-5">
    <h1 class="text-center text-muted">Crear Nuevo Rol </h1>
    <div class="row d-flex justify-content-center">
      <div class="col-12 
                  col-md-7
                  col-lg-7
                  col-xl-7
                  bg-form the_form" id="Booking_form">
    {{   Form::open(['route' => 'users.store']) }}

         @include('users.partials.form')
                        
        {{   Form::close() }}
        </div>
        
        
      
        
    
    </div>
    
</div>
@endsection