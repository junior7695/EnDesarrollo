@extends('layouts.app')

@section('content')
        @if (session()->has('status'))
    <div class="container alert-success text-center text-uppercase w-50 py-4" role="alert">
    {{ session('status') }}
    </div>
    @endif  
        <div class="container">
            <div class="row d-flex justify-content-center my-5 pt-5">
                <div class="col-12
                              col-sm-12                    
                              col-md-5
                              col-lg-5
                              col-xl-5
                              ">
          <div class="card">
          <div class="d-flex align-items-center">
                      
                    <h5 class="card-header form-header bg-login text-white py-4">
                    <i class="fas fa-unlock-alt fa-3x float-right" data-toggle="tooltip" data-placement="top" title="Tu clave sera enviada por correo"></i><span class="">Solicitar Clave</span></h5>
                      
                  </div>
          <div class="card-body">
            <h5 class="card-title mt-3">Somos Venezuela</h5>
          {{ Form::open(['route' => 'key.solicitar'],['class' => 'form-horizontal']) }}

                        <div class="form-group my-4">
                            {{ Form::label('email', 'Correo Electronico'), ['class' => 'mt-3'] }} <i class="fas fa-envelope ml-2"></i>                           
                            {{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Indique su Correo Electronico']) }}
                        </div>

                        <div class="form-group my-4">
                            <label class="form-check-label">{{ Form::radio('medio_clave', 'sms', true) }} Quiero la clave por Mensaje de Texto</label>
                            <label>{{ Form::radio('medio_clave', 'correo') }} Quiero la Clave por Correo Electronico</label>
                        </div>


                        <div class="d-flex justify-content-center">
                        <div class=" mt-5 w-75">
                            
                            {{ Form::submit('Solicitar Clave', ['class' => 'btn btn-login btn-block']) }}
                            
                        </div>
                        </div>


                    {{ Form::close() }}
          
          
                             
@endsection