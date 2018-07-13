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
      <li class="active">Nuevo</li>
    </ol>

@stop


@section('content')

<div class="box box-primary">
  <div class="box-header with-border box-default">
    <strong>Nuevo Usuario</strong>
  </div>
    
  <div class="panel-body">
    <div class="row">

      {!! Form::open(['route' => 'manageusers.store']) !!}

        @include('admin.manageusers.partials.form')

      {!! Form::close() !!}
    </div>
  </div>
</div>


@endsection