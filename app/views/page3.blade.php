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

		<form action="http://localhost:8000/" type="GET">
		<button type="input"> p1 </button>
	</form>
	<form action="http://localhost:8000/p2" type="GET">
		<button type="input"> p2 </button>
	</form>
	<form action="http://localhost:8000/p3" type="GET">
		<button type="input"> p3 </button>
	</form>
	
		<h2 style="color:red; font-family:'Lato', sans-serif;">Page 3</h2>

		<p>
			parag
		</p>

		<!--<img src="assets/img/graph.png" alt="graph" id="pic" />-->
		{{ HTML::image('assets/img/graph.png', 'graph', array('id' => 'idkirox')); }}

	</body>
	</html>