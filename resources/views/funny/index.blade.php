@extends('layouts.otherApp')

@section('content')
@if(count($funnyApps))
@foreach($funnyApps as $funnyApp) 
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<div class="col-xs-8">
					<h3><a href="{{ $funnyApps['url'] }}">{{ $funnyApps['name'] }}</a></h3>
				</div>
			</div>
			{{-- <div class="row">
				<div class="col-xs-4">
					<span>发表于{{ $article->published_at }}</span>
				</div>
				<div class="col-xs-8 text-right">
					tags:
					@foreach($article->tags as $tag)
					<a href='{{ url("search/tags", $tag->id) }}'><span class="label label-default">{{$tag->tag_name}}</span></a>
					@endforeach
				</div>
			</div>
			<br /> --}}
			<div class="row">
				<div class="col-xs-12 text-capitalize">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					{{ $funnyApps['description'] }}
				</div>
			</div>	
		</div>
	</div>
	<hr/>
@endforeach
@endif
@stop