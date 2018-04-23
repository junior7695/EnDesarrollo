@extends('home')

@section('principal')

    <!-- Mensajes -->
    
    <div class="container d-flex justify-content-center justify-content-around">
      <div class="row">
        <div class="col-md-4">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> tu nombre es: {{ Auth::user()->name }}</strong> .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div></div>
        <div class="col-md-4">
           <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> tu email es: {{ Auth::user()->email }}</strong> .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        </div>
        <div class="col-md-4">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> tu numero de telefono es: {{ Auth::user()->tlf }}</strong> .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        </div>
      </div>
      </div>
    <div class="container text-center alert alert-warning alert-dismissible fade show w-50" role="alert">
        <strong>Si deseas modificar algunos de tus datos completa el formulario de abajo</strong> .
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>

      <!-- Formulario de cambio -->  

      <div class="container my-5">
    <h1 class="text-center text-muted">Editar Pefil</h1>
    <div class="row d-flex justify-content-center">
      <div class="col-12
                  col-sm-12                    
                  col-md-6
                  col-lg-7
                  col-xl-7
                  bg-form">
                  
{{ Form::model(Auth::user(),['route' => ['users.updatePerfil', Auth::user()->id],'method' => 'PUT']) }}

          @include('users.partials.formPerfil')
                        
        {{   Form::close() }}
        
        </div>
      </div>
    </div>
    

@endsection