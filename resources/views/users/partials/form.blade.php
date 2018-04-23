<div class="container">
	<div class="form-group">
	{{ Form::label('name', 'Ingresa Nombre y Apellido') }}
	<i class="fas fa-user ml-2"></i>
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
	{{ Form::label('email', 'Correo Electronico') }}
	<i class="fas fa-at ml-2"></i>
	{{ Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) }}
</div>
<div class="form-group">
	{{ Form::label('tlf', 'Numero Telefonico, preferiblemente movilnet') }}
	<i class="fas fa-mobile ml-2"></i>
	{{ Form::text('tlf', null, ['class' => 'form-control' , 'id' => 'tlf']) }}
</div>
@can('admin')
	<div class="form-group d-sm-block table">
	{{ Form::label('entidad', 'Entidad') }}
	{{ Form::select('entidad', ['CANTV' => 'Compañía Anónima Nacional Teléfonos de Venezuela (CANTV)', 'SomosVenezuela' => 'Somos Venezuela', 'MPPS' => 'Ministerio del Poder Popular para la Salud (MPPS)', 'MVH' => 'Ministerio del Poder Popular para Hábitat y Vivienda (MVH)', 'CONAPDIS' => 'Consejo Nacional para las Personas con Discapacidad (CONAPDIS)', 'MPPA' => 'Ministerio del Poder Popular para la Alimentación (MPPA)'], 'entidad', ['class' => 'form-control custom-select table-responsive']) }}
	</div>
	

@endcan
<hr>
<h3>Lista de Roles Para el <mark>Usuario</mark></h3>
<div class="form-group">
	<ul class="list-unstyled">
		@foreach($roles as $rol)
	    <li>
	        <label>
	        {{ Form::checkbox('roles[]', $rol->id, null) }}
	        {{ $rol->name }}
	        <em>({{ $rol->description }})</em>
	        </label>
	    </li>
	    @endforeach
    </ul>
</div>
<div class="form-group d-flex justify-content-center">
	{{ Form::submit('Guardar', ['class' => 'btn btn-lg btn-primary']) }}
</div>
</div>
