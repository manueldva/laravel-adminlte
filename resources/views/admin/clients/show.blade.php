@extends('adminlte::page')

@section('title', 'Gym - Clientes')

@section('content_header')
  <h1>
    Gestionar Clientes
    <!--<small>Listado</small>-->
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('clients.index')}}">Clientes</a></li>
    <li class="active">Ver</li>
  </ol>


@stop
@section('content')

<div class="box box-primary">
	<div class="box-header with-border box-default">
	   <strong> Ver Cliente </strong>
	</div>
		
	<div class="panel-body">
	    <div class="panel-body">
	        <div class="row">
				<p> <strong>Nombre:</strong> {{ $client->name }}</p>

				<p> <strong>Dirección:</strong> {{ $client->address }}</p>

				<p> <strong>Nro Celular:</strong> {{ $client->cellPhone }}</p>
			</div>
		</div>
	</div>
</div>

@endsection
