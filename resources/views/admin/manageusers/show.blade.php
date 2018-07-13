@extends('adminlte::page')

@section('title', 'Gym - Usuarios')

@section('content_header')
  <h1>
    Gestionar Usuarios
    <!--<small>Listado</small>-->
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('manageusers.index')}}">Usuarios</a></li>
    <li class="active">Ver</li>
  </ol>


@stop
@section('content')

<div class="box box-primary">
	<div class="box-header with-border box-default">
	   <strong> Ver Usuario </strong>
	</div>
		
	<div class="panel-body">
	    <div class="panel-body">
	        <div class="row">
				<p> <strong>Codigo:</strong> {{ $user->id }}</p>
				
				<p> <strong>Nombre:</strong> {{ $user->name }}</p>

				<p> <strong>Usuario:</strong> {{ $user->username }}</p>

				<p> <strong>Email:</strong> {{ $user->email }}</p>

				<p> <strong>Tipo Usuario:</strong> {{ trans("resource.$user->userType") }}</p>
				

				@if($user->file)
                    <div class="form-group  {{ $image }}">
						<p> <strong>Imagen:</strong></p>
	                    <img src="{{ asset($user->file) }}" height="300" width="300">
					</div>
				@endif
			</div>
		</div>
	</div>
</div>

@endsection


