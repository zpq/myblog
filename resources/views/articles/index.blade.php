@extends('app')

@section('content')
<!-- <div id='articles_blocks'> -->
<!-- @foreach($articles as $article)  -->
<!-- 	<div class="panel"> -->
<!-- 	   <div class="panel-heading"> -->
<!-- 	      <h3 class="panel-title"> -->
<!--       		<a href="{{ url('articles', $article->id) }}"><h3>{{ $article->title }}</h3></a> -->
<!-- 	      </h3> -->
<!-- 	   </div> -->
<!-- 	   <div class="panel-body"> -->
<!-- 	      {{ $article->content }} -->
<!-- 	   </div> -->
<!-- 	   <div class="panel-footer"> -->
<!-- 	   		<div class="row"> -->
<!-- 	   			<div class="col-xs-3">发表于{{ $article->published_at }}</div> -->
<!-- 	   			<div class="col-xs-9"><span class='pull-right'>tags: 哈哈 哈哈 哈哈</span></div> -->
<!-- 	   		</div> -->
<!-- 	   </div> -->
<!-- 	</div> -->
<!-- 	<hr /> -->
<!-- @endforeach -->
<!-- </div> -->

@if(count($articles))
@foreach($articles as $article) 
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-8">
					<h3><a href="{{ url('articles', $article->id) }}">{{ $article->title }}</a></h3>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
					<span>发表于{{ $article->published_at }}</span>
				</div>
				<div class="col-xs-8 text-right">
					tags:
					@foreach($article->tags as $tag)
					<a href='{{ url("search/tags", $tag->id) }}'><span class="label label-default">{{$tag->tag_name}}</span></a>
<!-- 					<span class="label label-primary">主要标签</span> -->
<!-- 					<span class="label label-success">成功标签</span> -->
<!-- 					<span class="label label-info">信息标签</span> -->
<!-- 					<span class="label label-warning">警告标签</span> -->
<!-- 					<span class="label label-danger">危险标签</span> -->
					@endforeach
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-xs-12 text-capitalize">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					{{ strCut($article->content, 40) }}
				</div>
			</div>	
		</div>
	</div>
	<hr/>
@endforeach
@endif
{!! $articles->links() !!}
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

