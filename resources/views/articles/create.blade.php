@extends('app')

@section('content')
	<h1>write a new article</h1>
	{!! Form::open(['url' => '/articles']) !!}
		<div class="form-groups">
			{!! Form::label('title') !!}
			{!! Form::text('title', null, ['class'=> 'form-control']) !!}
		</div>
		
		<div class="form-groups">
			{!! Form::label('content') !!}
			{!! Form::textarea('content', null, ['class'=> 'form-control']) !!}
		</div>
		
		{!! Form::submit('submit', ['class' => 'btn btn-primary form-control']) !!}
	{!! Form::close() !!}
	
@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		{{$error}}
	@endforeach
@endif

@stop