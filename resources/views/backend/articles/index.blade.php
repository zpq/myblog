@extends('backend.home')
@section('content')

@if(count($articles))
	<table class="table table-striped table-bordered">
	<!--    <caption>条纹表格布局</caption> -->
	   <thead>
	      <tr>
	         <th>id</th>
	         <th>title</th>
	         <th>content</th>
	         <th>published_at</th>
	         <th>action</th>
	      </tr>
	   </thead>
	   <tbody>
	   @foreach($articles as $article) 
	      <tr>
	         <td>{{ $article->id }}</td>
	         <td>{{ $article->title }}</td>
	         <td>{{ str_limit($article->content, 20) }}</td>
	         <td>{{ $article->published_at }}</td>
	         <td><a href="{{ url('backend/articles/edit', $article->id) }}">edit</a></td>
	      </tr>
	   </tbody>
	   @endforeach
	</table>
@endif

@stop

