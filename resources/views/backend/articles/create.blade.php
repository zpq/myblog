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
							<label for="exampleInputPassword1">tags</label> <input
								type="text" name='tags' class="form-control" id="exampleInputPassword1"
								placeholder="tags">
						</div>
						<div class="form-group editor">
			                  <label>Textarea</label>
			                  <textarea id='myEditor' name='content' class="form-control" rows="10" placeholder="Enter ..."></textarea>
						</div>
<!-- 						<div class="checkbox"> -->
<!-- 							<label> <input type="checkbox"> Check me out -->
<!-- 							</label> -->
<!-- 						</div> -->
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
@stop
