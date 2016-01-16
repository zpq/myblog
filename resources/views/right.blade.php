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
	
	<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
	<script type="text/javascript">
	var duoshuoQuery = {short_name:"sheaned"};
	    (function() {
	        var ds = document.createElement('script');
	        ds.type = 'text/javascript';ds.async = true;
	        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
	        ds.charset = 'UTF-8';
	        (document.getElementsByTagName('head')[0] 
	         || document.getElementsByTagName('body')[0]).appendChild(ds);
	    })();
	</script>
	<!-- 多说公共JS代码 end -->
</div>