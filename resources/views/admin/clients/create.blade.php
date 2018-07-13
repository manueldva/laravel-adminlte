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
      <li class="active">Nuevo</li>
    </ol>

@stop


@section('content')

<div class="box box-primary">
  <div class="box-header with-border box-default">
    <strong>Nuevo Cliente</strong>
  </div>
    
  <div class="panel-body">
    <div class="row">

			{!! Form::open(['route' => 'clients.store']) !!}

				@include('admin.clients.partials.form')

			{!! Form::close() !!}
		</div>
	</div>
</div>


@endsection