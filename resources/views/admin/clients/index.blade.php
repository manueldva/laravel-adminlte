@extends('adminlte::page')

@section('title', 'Gym - Clientes')

@section('content_header')
  <h1>
    Gestionar Clientes
    <!--<small>Listado</small>-->
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="{{ route('clients.index')}}">Clientes</a></li>
    <li class="active">Listado</li>
  </ol>

@stop


@section('include_delete')
	@include('include.modal-delete')
@stop

@section('content')	

<div class="box box-primary">
	<div class="box-header with-border box-default">
	   <strong> Listado Clientes </strong>
	   <form class="navbar-form navbar-right" role="search">
	       {{ Form::model(Request::only('type', 'val'), array('route' => 'clients.index', 'method' => 'GET'), array('role' => 'form', 'class' => 'navbar-form pull-right')) }}
			    <div class="form-group">
			      {{ form::label('buscar', 'Tipo Busqueda:') }}
			      {{ form::select('type', config('options.clienttypes'), null, ['class' => 'form-control', 'id' => 'type'] ) }}
						&nbsp;
			      {{ form::text('val', null, ['class' => 'form-control', 'id' => 'val']) }}
			      &nbsp;
			      <button type="submit" class="form-control btn btn-sm btn-success"><span class="glyphicon glyphicon-search"></span> Buscar</button>
						&nbsp;
			      @if(Auth::user()->userType !== 'READONLY')
			      <a href="{{ route('clients.create')}}" class="form-control btn btn-sm btn-primary">
			        <span class="glyphicon glyphicon-plus"></span> Crear
			      </a>  
			      @endif
			    </div>
		    {{ Form::close() }}
      </form>
	</div>
		
	<div class="panel-body">
	    <div class="panel-body">
	        <div class="row">
	          <div class="table-responsive">
	            <table class="table table-striped table-hover" data-form="Form">
	              <thead>
	                <tr>
	                  <!--<th width="10px"> ID</th>-->
	                  <th> Nombre</th>
	                  <th> Dirección</th>
	                  <th> Nro Celular</th>
	                  <th colspan="3">&nbsp;</th>
	                </tr>
	              </thead>
	              <tbody>
	                @foreach ($clients as $client)
	                  <tr>
	                    <!--<td>{{ $client->id }}</td>-->
	                    <td>{{ $client->name }}</td>
	                    <td>{{ $client->address }}</td>
	                    <td>{{ $client->cellPhone }}</td>
	                    <td width="10px">
	                      <a href="{{ route('clients.show', $client->id) }}" class="btn btn-sm btn-default">
	                        Ver
	                      </a>
	                    </td>
	                    @if(Auth::user()->userType !== 'READONLY')
	                    <td width="10px">
	                      <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-sm btn-default">
	                        Editar
	                      </a>
	                    </td>
	                    <td width="10px">
							{!! Form::model($client, ['method' => 'delete', 'route' => ['clients.destroy', $client->id], 'class' =>'form-inline form-delete']) !!}
							{!! Form::hidden('id', $client->id) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger delete', 'name' => 'delete_modal']) !!}
							{!! Form::close() !!}

	                    </td>
	                    @endif
	                  </tr>
	                @endforeach
	              </tbody>
	            </table>
	          </div>  
	          {{ $clients->appends(Request::only(['type', 'val']))->render() }}
	        </div>
	    </div>
    </div>
</div>


@endsection





@push('js')
	
	<script src="{{ asset('js/resources/confirm-delete-general.js') }}"></script>

	<script type="text/javascript">


	$('#type').change(function(e) {

		$('#val').val('');
		$('#val').focus();

	});
		
	</script>
@endpush