@extends('app')

@section('content')
<h1 class='text-center'>{{ $article->title }}</h1>
<hr />
<article>
	<div class="body">
	<?php echo $article->content ?>
	</div>
</article>


<!-- 多说评论框 start -->
<div class="ds-thread" data-thread-key="{{ $article->id }}" data-title="{{ $article->title }}" data-url="{{ $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] }}"></div>
<!-- 多说评论框 end -->

@stop