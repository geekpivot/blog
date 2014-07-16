<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	{{HTML::style('css/bootstrap.css')}}
	<style>
	body{
		padding-top: 50px;
	}
	</style>
</head>
<body>
	@section('header')
	<div class="navbar navbar-default navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Polyglot</a>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li>{{ link_to('/posts/', 'Home')}}</li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div>
	@show

	<div class="container">
		@yield('content')
	</div>
</body>
</html>