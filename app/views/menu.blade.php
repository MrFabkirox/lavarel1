<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Laravel PHP Framework</title>
		<!--{{ HTML::style('assets/css/style.css');}}-->
		<link rel="stylesheet" href="<?php echo asset('assets/css/style.css')?>" type="text/css">
		<style>
			@import url(//fonts.googleapis.com/css?family=Lato:700);

			body {
				color: #666;
			}

			h1 {
				color: #999;
			}
		</style>
	</head>
	<body>

	<ul id="menu-vertical">
		<li><a href="http://localhost:8000/">Page 1</a>
			<ul>
				<li><a href="http://localhost:8000/">Page 1</a></li>
				<li><a href="http://localhost:8000/">Page 1</a></li>
			</ul>
		</li>
		<li><a href="http://localhost:8000/p2">Page 2</a>
			<ul>
				<li><a href="http://localhost:8000/p2#h2">Page 2.2</a></li>
				<li><a href="http://localhost:8000/p2#h3">Page 2.3</a></li>
			</ul>
		</li>
		<li><a href="http://localhost:8000/p3">Page 3</a>
			<ul>
				<li><a href="http://localhost:8000/p3#h2">Page 3.2</a></li>
				<li><a href="http://localhost:8000/p3#h3">Page 3.3</a></li>
			</ul>
		</li>
	</ul>
	
		<h2>Menu</h2>

		<p id="menu-bas" style="color:red; font-family:'Lato', sans-serif;">
			Bottom Menu
		</p>

	</body>
	</html>