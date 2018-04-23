@extends('home')

@section('principal')
    @if (session()->has('status'))
    <div class="container alert-success text-center text-uppercase w-50 py-4" role="alert">
    {{ session('status') }}
    </div>
    @endif 
<div class="container-fluid">
    <div class="row table-responsive-sm">
        <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Entidad</th>
            <th>Acción</th>
        </tr>
        </thead>
        
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id}}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->tlf }}</td>
                <td>{{ $user->entidad }}</td>
                <td>
                    <div class="row">
                    @can('users.show')
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-primary ml-1">Ver</a>
                    @endcan
            
                    @can('users.edit')
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning ml-1">Editar</a>
                    @endcan
            
                    @can('users.destroy')
                        <form action="{{ route('users.destroy', $user->id) }}" method='POST'>

                        <input class="btn btn-outline-danger ml-1" type="submit" value="Eliminar">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        </form>
                    @endcan
                    </div>
                    
                    
                </td>
            </tr>
                
        @endforeach
    </table>
        
    
    <div class="container d-flex justify-content-center display-5">
        {{ $users->render() }}
        
    </div>
    </div>
    
</div>

@endsection