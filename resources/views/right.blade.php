<style>
	.xxx{margin:5px 5px;}
</style>

<div class="col-sm-3">
	<h4>热门文章</h4>
	<table class="table">
<!-- 	   <caption>基本的热门布局</caption> -->
	   <tbody>
	      <tr>
	         <td><a href="">免费域名注册</a></td>
	      </tr>
	      <tr>
	         <td><a href="">免费 Window 空间托管</a></td>
	      </tr>
      	  <tr>
	         <td><a href="">图像的数量</a></td>
	      </tr>
	   </tbody>
	</table>
	
	<hr />
	
	<h4>标签云</h4>
	@if(count($tagLists))
	@foreach($tagLists as $tagList)
		<a href='#' class="btn btn-default xxx">{{ $tagList->tag_name }}</a>
	@endforeach
	@endif
	<hr />
	
	<p><a href="{{ url('/backend') }}" class="btn btn-primary btn-lg">manage</a></p>
</div>