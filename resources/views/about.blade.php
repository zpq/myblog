@extends('app')


@section('content')
<!-- <h1>About me</h1> -->
<!-- <ul> -->
<!-- 	<li>name   : {{ $name }}</li> -->
<!-- 	<li>email  : {{ $email }}</li> -->
<!-- 	<li>github : <a target='_blank' href="{{ $github}}">{{ $github }}</a></li> -->
<!-- </ul> -->


<ul class="list-group">
   <li class="list-group-item">Me : {{ $name }}</li>
   <li class="list-group-item">Description : {{ $description }}</li>
   <li class="list-group-item"><span class="badge"></span>Email : {{ $email }}</li>
   <li class="list-group-item">Github : <a target='_blank' href="{{ $github}}">{{ $github }}</a></li>
</ul>


@stop

