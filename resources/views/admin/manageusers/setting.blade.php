@extends('adminlte::page')

@section('title', 'Gym - Ajustes Usuarios')

@section('content_header')

  <h1>
    Ajustes Usuario
    <!--<small>Listado</small>-->
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Ajustes</li>
  </ol>

@stop


@section('content')
 
    <!-- left column -->
      <!-- general form elements -->
<div class="box box-primary">
	<div class="box-header with-border box-default">
	 	<strong> Editar Usuario </strong>
	</div>
		
	<div class="panel-body">
		<div class="row animated zoomIn">
			{!! Form::model($user, ['route' => ['setting', $user->id], 'method' => 'PUT', 'files' => true]) !!}
				<div class="col-md-6">

					@if($user->file)
		                <div class="form-group  {{ $image }}">
							<p> <strong>Imagen:</strong></p>
		                    <img src="{{ asset($user->file) }}" height="200" width="200" class="img-circle profile_img">
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
				</div>

			{!! Form::close() !!}
		</div>
	</div>

</div>


@endsection

