@extends('app')

@section('content')
<h1 class='text-center'>{{ $article->title }}</h1>
<hr />
<article>
	<div class="body">
	<?php echo $article->content ?>
	</div>
</article>


<!-- <div id="disqus_thread"></div>
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
     */
    /*
    var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    */
    (function() {  // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        
        s.src = '//sheaned.disqus.com/embed.js';
        
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

</script> -->


<!-- 多说评论框 start -->
<div class="ds-thread" data-thread-key="{{ $article->id }}" data-title="{{ $article->title }}" data-url="{{ $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] }}"></div>
<!-- 多说评论框 end -->

@stop