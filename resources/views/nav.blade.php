<!-- <div class="well well-lg alert alert-info"> -->

<div class="page-header">
<!-- 	<div class="col-xs-12"> -->
<!-- 		<div class="col-xs-12 col-xs-offset-4"> -->
<!-- 			<img src="images/logo7.png" alt="logo" /> -->
<!-- 		</div> -->
<!--     </div> -->
  <h1>Hello Friend!&nbsp;&nbsp;<small>Welcome to my blog!</small></h1>
</div>


<nav class="navbar navbar-inverse" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse"
			data-target="#example-navbar-collapse">
			<span class="sr-only">切换导航</span> <span class="icon-bar"></span> <span
				class="icon-bar"></span> <span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">Home</a>
	</div>
	<div class="collapse navbar-collapse" id="example-navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="active"><a href="{{ url('/articles') }}">articles</a></li>
			<li><a href="#">book list</a></li>
			<li><a href="#">funny thing</a></li>
			<li><a href="#">donate</a></li>
			<li><a href="{{ url('/about') }}">about</a></li>
			<!--          <li class="dropdown"> -->
			<!--             <a href="#" class="dropdown-toggle" data-toggle="dropdown"> -->
			<!--                Java <b class="caret"></b> -->
			<!--             </a> -->
			<!--             <ul class="dropdown-menu"> -->
			<!--                <li><a href="#">jmeter</a></li> -->
			<!--                <li><a href="#">EJB</a></li> -->
			<!--                <li><a href="#">Jasper Report</a></li> -->
			<!--                <li class="divider"></li> -->
			<!--                <li><a href="#">分离的链接</a></li> -->
			<!--                <li class="divider"></li> -->
			<!--                <li><a href="#">另一个分离的链接</a></li> -->
			<!--             </ul> -->
			<!--          </li> -->
		</ul>
		<div>
			<form class="navbar-form navbar-right" role="search">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-success">搜索</button>
			</form>
		</div>
	</div>
</nav>

<?php
// var_dump(session('current_path'));
?>

<!-- 	<ul class="nav nav-pills"> -->
<!-- 	   <li class="active"><a href="{{ url('/articles') }}">Home</a></li> -->
<!-- 	   <li><a href="#">book list</a></li> -->
<!-- 	   <li><a href="#">donate</a></li> -->
<!-- 	   <li><a href="#">funny resource</a></li> -->
<!-- 	   <li><a href="{{ url('/about') }}">about</a></li> -->
<!-- 	</ul> -->



<br />
