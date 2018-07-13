<div class="col-md-6">
	
	<div class="form-group">
		{{ form::label('name', 'Nombre:') }}
		{{ form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
	</div>

	<div class="form-group">
		{{ form::label('username', ' Usuario:') }}
		{{ form::text('username', null, ['class' => 'form-control', 'id' => 'username']) }}
		
	</div>

	<div class="form-group">
		{{ form::label('email', 'Email:') }}
		{{ form::email('email', null, ['class' => 'form-control', 'id' => 'email']) }}
	</div>



	<div class="form-group">
		{{ form::label('userType', 'Tipo Usuario:') }}
		<label>
			{{ Form::radio('userType','ADMINISTRATOR')}} Administrador
		</label>
		<label>
			{{ Form::radio('userType','MANAGMENT')}} Gestiòn
		</label>
		<label>
			{{ Form::radio('userType','READONLY')}} Solo Lectura
		</label>
	</div>

	<div id="resetpass" class="form-group " style="display:none">

			{{ form::label('resetpass', 'Resetear Contraseña:') }}
			<label>
				{{ Form::checkbox('resetpass','on')}} 
			</label>	
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
	</div>


</div>



@push('js')
	<script type="text/javascript">



	</script>
@endpush