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
        @yield('content')
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

</body>
</html>