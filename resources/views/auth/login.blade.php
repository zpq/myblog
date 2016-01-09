@extends('app')
@section('content')

<div class="col-xs-6 col-xs-offset-3">
	{!! Form::open(['url' => 'auth/login'])	!!}
		<div class="form-groups">
			{!! Form::label('email', 'Email:') !!}
			{!! Form::email('email', null, ['class'=> 'form-control']) !!}
		</div>
		
		<div class="form-groups">
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password', null, ['class'=> 'form-control']) !!}
		</div>
		
		{!! Form::submit('login', ['class' => 'btn btn-primary form-control']) !!}
	{!! Form::close() !!}
</div>

@stop