@extends('app')
@section('content')

<div class="col-xs-6 col-xs-offset-3">
	{!! Form::open(['url' => 'auth/register'])	!!}
		<div class="form-groups">
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name', null, ['class'=> 'form-control']) !!}
		</div>
		
		<div class="form-groups">
			{!! Form::label('email', 'Email:') !!}
			{!! Form::email('email', null, ['class'=> 'form-control']) !!}
		</div>
		
		<div class="form-groups">
			{!! Form::label('password', 'Password:') !!}
<!-- 			{!! Form::text('password', null, ['class'=> 'form-control']) !!} -->
			<input type="password" name='password' class='form-control'/>
		</div>
		
		<div class="form-groups">
			{!! Form::label('password_comfirmation', 'Password_comfirmation:') !!}
<!-- 			{!! Form::text('password_comfirmation', null, ['class'=> 'form-control']) !!} -->
			<input type="password" name='password_confirmation' class='form-control'/>
		</div>

		{!! Form::submit('register', ['class' => 'btn btn-primary form-control']) !!}
		
	{!! Form::close() !!}
	


	
</div>

@stop


