@extends('layouts.app')

@section('content')
    
      
    @if (session()->has('info'))
    <div class="container alert-success text-center text-capitalize w-50 py-4 mt-2">
        {{ session('info') }}
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
                    <i class="fas fa-lock-open   fa-3x float-right" data-toggle="tooltip" data-placement="top" title="Tu clave sera enviada por correo"></i><span class="">Ingresar al Sistema</span></h5>
                      
                  </div>
                  <div class="card-body">
                    <h5 class="card-title mt-3">Somos Venezuela</h5>
                        <form class="form-horizontal" method="POST" aaction="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="form-group my-4">
                          <label for="name">Email <i class="fas fa-envelope ml-2"></i></label>
                                <input
                                  id="email"
                                  type="email"
                                  class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                  name="email"
                                  placeholder="Indica tu Correo"
                                  value="{{ old('email') }}"
                                  required
                                  autofocus
                                >
                                <small id="nameHelp" 
                                        class="form-text text-muted">Confirma tu dirección de correo</small>

                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                                
                                <label for="name" class="my-3"> Contraseña <i class="fas fa-unlock-alt ml-2"></i></label>
                                <input
                                        id="password"
                                        type="password"
                                        placeholder="Contraseña"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password"
                                        required
                                >
                                 <small id="passwordHelp" 
                                        class="form-text text-muted">La contraseña sera valida solo 1 vez</small>

                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            
                        </div>
                          <div class="d-flex justify-content-center">
                            <div class=" mt-5 w-75">
                                <input type="submit" class="btn btn-login btn-block" value="Solicitar Clave">
                            </div>
                        </form>
                                    
                        </div>
@endsection
