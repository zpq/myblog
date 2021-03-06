<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="baidu-site-verification" content="uPrdE5kLPY" />
    <!-- 引入 Bootstrap -->
	<link href="http://apps.bdimg.com/libs/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
    <!--[if lt IE 9]>
       <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	<script type="text/javascript" src="{{ URL::asset('js/gotoTop.js') }}"></script>

	<style>
		a.backToTop{width:60px; height:60px; background:#eaeaea url("{{ URL::asset('images/top.gif') }}") no-repeat -51px 0; text-indent:-999em}
		a.backToTop:hover{background-position:-113px 0}

	</style>

	<title>blog.sheaned</title>
</head>
<body>
<div class="container">	
	<div class="row">
		@include('nav')
		@include('left')
		@include('right')
		@include('footer')
	</div>
</div>

<script>
$(function(){
	$(".backToTop").goToTop();
		$(window).bind('scroll resize',function(){
			$(".backToTop").goToTop({
			pageWidth:$(window).width() * 0.7,
			duration:0
		});
	});
});
</script>

	
<!-- GoogleAnalytics start-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72449109-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- GoogleAnalytics end-->


<!-- baidu share start-->
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"code can change world!","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"slide":{"type":"slide","bdImg":"4","bdPos":"left","bdTop":"203.5"},"image":{"viewList":["qzone","tsina","tqq","weixin","douban","sqq"],"viewText":"分享到：","viewSize":"32"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
<!-- baidu share end-->

</body>
</html>