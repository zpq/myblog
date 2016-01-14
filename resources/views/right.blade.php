<style>
	.xxx{margin:5px 5px;}
</style>

<div class="col-sm-3">

	<h4>热门文章</h4>
	
	<!-- 多说热评文章 start -->
	<div class="ds-top-threads" data-range="weekly" data-num-items="10"></div>
	<!-- 多说热评文章 end -->
	
	<hr />
	
	<h4>标签云</h4>
	@if(count($tagLists))
		@foreach($tagLists as $tagList)
			<a href='{{ url("search/tags", $tagList->id) }}' class="btn btn-default xxx">{{ $tagList->tag_name }}</a>
		@endforeach
	@endif
	
	<hr />
	
	<p><a href="{{ url('/backend') }}" class="btn btn-primary btn-lg">manage</a></p>
</div>