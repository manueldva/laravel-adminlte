@extends('adminlte::page')

@section('title', 'Gym - Usuarios')

@section('content_header')
 <h1>
    Gestionar Usuarios
    <!--<small>Listado</small>-->
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Usuarios</a></li>
    <li class="active">Listado</li>
  </ol>

@stop


@section('include_delete')
	@include('include.modal-delete')
@stop

@section('content')	

<div class="box box-primary">
	<div class="box-header with-border box-default">
	   <strong> Listado Usuarios </strong>
	   <form class="navbar-form navbar-right" role="search">
	       {{ Form::model(Request::only('type', 'val'), array('route' => 'manageusers.index', 'method' => 'GET'), array('role' => 'form', 'class' => 'navbar-form pull-right')) }}
			    <div class="form-group">
			      {{ form::label('buscar', 'Tipo Busqueda:') }}
			      {{ form::select('type', config('options.usertypes'), null, ['class' => 'form-control', 'id' => 'type'] ) }}
			      {{ form::text('val', null, ['class' => 'form-control', 'id' => 'val']) }}
			      
			      <button type="submit" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-search"></span> Buscar</button>
			      @if(Auth::user()->userType !== 'READONLY')
			      <a href="{{ route('manageusers.create')}}" class="btn btn-sm btn-primary">
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
							<th width="10px"> Codigo</th>
							<th> Nombre</th>
							<th> Usuario</th>
							<th> Tipo Usuario</th>
							<th colspan="3">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->username }}</td>
								<td>{{ trans("resource.$user->userType") }}</td>
								<td width="10px">
									<a href="{{ route('manageusers.show', $user->id) }}" class="btn btn-sm btn-default">
										Ver
									</a>
								</td>
								<td width="10px">
									<a href="{{ route('manageusers.edit', $user->id) }}" class="btn btn-sm btn-default">
										Editar
									</a>
								</td>
								<td width="10px">
									{!! Form::model($user, ['method' => 'delete', 'route' => ['manageusers.destroy', $user->id], 'class' =>'form-inline form-delete']) !!}
        							{!! Form::hidden('id', $user->id) !!}
        							{!! Form::submit('Eliminar', ['class' => 'btn btn-sm btn-danger delete', 'name' => 'delete_modal']) !!}
        							{!! Form::close() !!}

								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			  </div>	
			{{ $users->render() }}
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




