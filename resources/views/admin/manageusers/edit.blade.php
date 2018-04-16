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
					<strong> Editar Usuario </strong>
				</div>
		
				<div class="panel-body">

					{!! Form::model($user, ['route' => ['manageusers.update', $user->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.manageusers.partials.form')

                    {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>

@endsection