@extends('adminlte::page')

@section('title', 'Gym CMS')

@section('content_header')
    
@stop

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">
					<strong>Ajustes Usuario</strong>
				</div>
		
				<div class="panel-body">
					{!! Form::model($user, ['route' => ['setting', $user->id], 'method' => 'PUT', 'files' => true]) !!}

						@if($user->file)
	                        <div class="form-group">
								<p> <strong>Imagen:</strong></p>
			                    <img src="{{ $user->file }}" height="200" width="200" class="img-circle profile_img">
							</div>
						@endif

						<div class="form-group">
							{{ Form::file('image') }}
						</div>

						<div class="form-group">
							{{ form::label('name', 'nombre:') }}
							{{ form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'disabled']) }}
						</div>

						<div class="form-group">
							{{ form::label('username', 'Usuario:') }}
							{{ form::text('username', null, ['class' => 'form-control', 'id' => 'username', 'disabled']) }}
						</div>

						<div class="form-group">
							{{ form::label('email', 'Email:') }}
							{{ form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'disabled']) }}
						</div>


						<div class="form-group">
                            <label for="userType">Tipo Usuario:</label>
                            <input id="userType" type="text" class="form-control" name="userType" value= "{{ trans("resource.$user->userType") }}" disabled>
                        </div>


                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input id="password" type="password" class="form-control" name="password">
                        </div>

                        <div class="form-group">
                            <label for="password2">Confirmar Contraseña:</label>
                            <input id="password2" type="password" class="form-control" name="password2">
                        </div>


						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
							<a href="{{ route('home') }}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
						</div>


					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts')
	<script type="text/javascript">
		$('div.alert').not('.alert-important').delay(3000).fadeOut(350) 
	</script>
@endsection