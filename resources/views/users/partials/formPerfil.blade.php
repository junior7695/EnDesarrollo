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
<div class="form-group d-flex justify-content-center">
	{{ Form::submit('Editar', ['class' => 'btn btn-lg btn-primary']) }}
</div>
</div>
