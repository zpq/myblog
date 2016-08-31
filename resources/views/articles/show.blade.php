@extends('app')

@section('content')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/styles/default.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.6.0/highlight.min.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<h1 class='text-center'>{{ $article->title }}</h1>
<hr />
<article>
	<div class="body">
	<?php echo $article->content ?>
	</div>
</article>


<!-- 多说评论框 start -->
{{-- <div class="ds-thread" data-thread-key="{{ $article->id }}" data-title="{{ $article->title }}" data-url="{{ $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] }}"></div> --}}
<!-- 多说评论框 end -->

@stop
