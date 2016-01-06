@extends('app')

@section('content')
<div id='articles_blocks'>
@foreach($articles as $article) 
	<div class="panel">
	   <div class="panel-heading">
	      <h3 class="panel-title">
	      	<a href="{{ url('articles', $article->id) }}">{{ $article->title }}</a>
	      </h3>
	   </div>
	   <div class="panel-body">
	      {{ $article->content }}
	   </div>
	</div>
	<hr />
@endforeach
</div>

<script>
	$(function(){
		var panel_color = ['panel-primary', 'panel-success', 'panel-info', 'panel-warning', 'panel-danger'];
		var panel_color_key = '';
		$('#articles_blocks .panel').each(function(index){
			panel_color_key = index % panel_color.length;
			$(this).addClass(panel_color[panel_color_key]);
		});
	})
</script>
	
@stop

