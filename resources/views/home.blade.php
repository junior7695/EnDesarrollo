@extends('layouts.app')

@section('content')

<div class="d-flex align-items-stretch">
    <div class="sidebar bg-sidebar">
        <ul class="list-unstyled text-dark">
              @can('roles.index')
              <li>
                <a href="#submenu1" data-toggle="collapse" class="py-3"><i class="fa fa-fw fa-address-card"></i> ROLES</a>
                <ul id="submenu1" class="list-unstyled collapse">
                  @can('roles.create')
                    <li><a href="{{ route('roles.create') }}"><i class="fas fa-plus"></i> Crear</a></li>
                  @endcan
                    <li><a href="{{ route('roles.index') }}"><i class="fas fa-eye"></i> Mostrar</a></li>
                </ul>
            </li>
            @endcan
            <li>
              @can('users.index')
                <a href="#submenu2" data-toggle="collapse" class="py-3"><i class="fas fa-users"></i> USUARIOS</a>
                <ul id="submenu2" class="list-unstyled collapse">
                  @can('users.create')
                    <li><a href="{{ route('users.create') }}"><i class="fas fa-plus"></i> Crear</a></li>
                  @endcan
                    <li><a href="{{ route('users.index') }}"><i class="fas fa-eye"></i> Mostrar</a></li>
                  @can('sessions.index')
                    <li><a href="{{ route('sessions.index') }}"><i class="fas fa-users"></i> Usuarios Conectados</a></li>
                  @endcan
                </ul>
            </li>
            @endcan

            <li>
                <a href="#submenu3" data-toggle="collapse" class="py-3"><i class="fas fa-street-view"></i> BENEFICIARIO</a>
                <ul id="submenu3" class="list-unstyled collapse">
                    <li><a href="{{ route('beneficiaries.index') }}">CONSULTAR</a></li>
                </ul>
            </li>
            <li>
                
            </li>
            <li><a href="{{ route('users.perfil', Auth::user()->id) }}" class="py-3"><i class="fa fa-fw fa-link"></i> PERFIL </a></li>
            <li><a href="{{ route('reports.index') }}" class="py-3"><i class="fas fa-book"></i> REPORTES </a></li>
            
            
            
        </ul>
    </div>

    <div class="container mt-2">
    <h1 class="display-5 mt-5 mb-5 text-center text-capitalize lead">Bienvenido {{ Auth::user()->name }}</h1>


  @yield('principal')
    
        

        
    </div>
</div>


    
     
@endsection

@section('footer')

  <div class="card-body bg-nav text-center bg-nav">
    <blockquote class="blockquote mb-0">
      <footer class="blockquote-footer text-white"> Compañía Anónima Nacional Teléfonos de Venezuela. RIF: J-00124134-5.- Todos los derechos reservados</footer>
    </blockquote>
  </div>

@endsection
