<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Laravel PHP Framework</title>
		{{ HTML::style('assets/css/style.css')}}
		<!-- <link rel="stylesheet" href="<?php echo asset('assets/css/style.css')?>" type="text/css"> -->
		<!-- {{ HTML::script('assets/js/functions.js')}} -->
		<script src="assets/js/functions.js"></script>
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

		@extends('menu')
		@section('content')
		<html stuff>
		@stop

		
	
		<h2 style="color:red; font-family:'Lato', sans-serif;">Page 3</h2>

		<h3>1. Graph </h3>
		<p>
			parag
		</p>

		<!-- <img src="assets/img/graph.png" alt="graph" id="idkirox" /> -->
		{{ HTML::image('assets/img/graph.png', 'graph', array('id' => 'idkirox')) }}

		<p id="demo"> A Paragraph.</p>

		<button type="button" onclick="myFunction()"> Write stuff </button>
		<button type="button" onclick="resetJs()"> reset stuff </button>

		<script>
		function myFunction() {
			document.getElementById("demo").innerHTML = "Paragraph changed";
		}
		</script>

		<h3 id="h2">2. MVC UML</h3>
		{{ HTML::image('assets/img/mvc.jpg', 'mvc', array('id' => 'mvc')) }}

		<h3 id="h3">3. Some Stuff</h3>

		<p>
			Des stuff !
		</p>

	</body>
	</html>