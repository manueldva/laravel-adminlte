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
					<strong>Ver Usuario</strong>	
				</div>
		
				<div class="panel-body">
					<p> <strong>ID:</strong> {{ $user->id }}</p>
					
					<p> <strong>Nombre:</strong> {{ $user->name }}</p>

					<p> <strong>Usuario:</strong> {{ $user->username }}</p>

					<p> <strong>Tipo Usuario:</strong> {{ trans("resource.$user->userType") }}</p>
					

					@if($user->file)
					<p> <strong>Imagen:</strong></p>
                        <img src="{{ $user->file }}" class="img-responsive">
                    @endif
				</div>
			</div>
		</div>
	</div>
</div>

@endsection


