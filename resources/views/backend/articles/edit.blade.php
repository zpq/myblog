@extends('backend.home') 
@section('content')
@include('editor::head')
<section class="content">
	<div class="row">
		<!-- left column -->
		<div class="col-xs-8 col-xs-offset-2">

			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">article edit</h3>
				</div>
				<!-- /.box-header -->
				<!-- form start -->
				<form role="form" method='post' action="{{ url('backend/articles/update') }}">
					{{ csrf_field() }}
					<input type="hidden" name='id' class="form-control" value="{{ $article->id or '' }}" />
					<div class="box-body">
						<div class="form-group">
							<label>title</label> 
							<input type="text" name='title' class="form-control" value="{{ $article->title or '' }}"
								placeholder="title">
						</div>
						<div class="form-group">
							<label>tags</label> 
							<input
								type="text" name='tags' class="form-control" id="tags_input"
							    value="{{ $stringTags }}"
								placeholder="tag,tag,tag,..." max='256'>
								<br/>
								<div id='exist_tags'>
									@if(count($tagsList))
									@foreach($tagsList as $tag)
										<a href='#' class="btn btn-default xxx">{{ $tag->tag_name }}</a>
									@endforeach
									@endif
								</div>		
						</div>
						<div class="form-group editor">
			                  <label>Textarea</label>
			                  <textarea id='myEditor' name='content' class="form-control" rows="10" placeholder="Enter ...">{{ $article->content or '' }}</textarea>
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

// 			delete space in tags
// 			var tags_input = $('#tags_input').val().split(",");
// 			var new_tags_input = [];
// 			for(tag in tags_input) {
// 				new_tags_input.push($.trim(tags_input[tag]));
// 			}
// 			tags_input = new_tags_input.join(',');
// 			$('#tags_input').val(new_tags_input);
// 			delete space in tags			
			
			
			$("#exist_tags a").each(function(){
				$(this).on('click',function(){
					var tags_input_value = $("#tags_input").val();
					if(tags_input_value)
						$("#tags_input").val(tags_input_value + ',' + $(this).html());
					else 
						$("#tags_input").val($(this).html());
// 					$(this).removeClass('btn-default').addClass('btn-danger');
				});
			});
		});
	</script>
	
@stop
