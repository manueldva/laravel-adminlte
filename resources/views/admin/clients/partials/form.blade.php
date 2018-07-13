<div class="col-md-6">
	<div class="form-group">
		{{ form::label('name', 'Nombre/Razon social del cliente:') }}
		{{ form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	</div>
	<div class="form-group">
		{{ form::label('address', 'Dirección:') }}
		{{ form::text('address', null, ['class' => 'form-control', 'id' => 'address']) }}
	</div>
	<div class="form-group">
		{{ form::label('cellPhone', 'Nro Celular:') }}
		{{ form::number('cellPhone', null, ['class' => 'form-control', 'id' => 'cellPhone']) }}
	</div>
	<div class="form-group">
		{{ form::label('phone', 'Nro Telefono:') }}
		{{ form::number('phone', null, ['class' => 'form-control', 'id' => 'phone']) }}
	</div>
	<div class="form-group">
		{{ form::label('email', 'Correo Electronico:') }}
		{{ form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
	</div>
</div>


