@extends('backend.home') 
@section('content')
@include('editor::head')
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-xs-8 col-xs-offset-2">

			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">article create</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method='post' action="{{ url('backend/articles') }}">
					{{ csrf_field() }}
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">title</label> <input
								type="text" name='title' class="form-control" id="exampleInputEmail1"
								placeholder="title">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">tags</label> 
							<input
								type="text" name='tags' class="form-control" id="tags_input"
								placeholder="tag,tag,tag,..." max='256'>
								<br/>
								<div id='exist_tags'>
									@if(count($tagsList))
									@foreach($tagsList as $tag)
										<a href='#' class="btn btn-default xxx">{{ $tag->tag_name }}</a>
	<!-- 									<a href='#' class="btn btn-default xxx">信息标哈</a> -->
	<!-- 									<a href='#' class="btn btn-default xxx">标签</a> -->
	<!-- 									<a href='#' class="btn btn-default xxx">成功警告</a> -->
									@endforeach
									@endif
								</div>		
						</div>
						<div class="form-group editor">
			                  <label>Textarea</label>
			                  <textarea id='myEditor' name='content' class="form-control" rows="10" placeholder="Enter ..."></textarea>
						</div>
					</div>
					<!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

	@if(count($errors) > 0)
		@foreach($errors->all() as $error)
			<h3>{{$error}}</h3>
		@endforeach
	@endif
	
	<script>
		$(function(){
			$("#exist_tags a").each(function(){
				$(this).one('click',function(){
					var tags_input_value = $("#tags_input").val();
					if(tags_input_value)
						$("#tags_input").val(tags_input_value + ',' + $(this).html());
					else 
						$("#tags_input").val($(this).html());
					$(this).removeClass('btn-default').addClass('btn-danger');
				});
			});
		});
	</script>
	
@stop
