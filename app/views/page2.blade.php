	<!doctype html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<script src="assets/js/functions.js"></script>
		<title>Laravel PHP Framework</title>

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

			<h1>Page 2</h1>

				<p>
					*;..;*
				</p>

				<table cellspacing="2px" rules="all" style="border:solid 1px black;">
					<caption>Animalz</caption>

					<thead>
						<tr>
							<td>name</td>
							<td>age</td>
							<td>animal</td>
						</tr>
					</thead>

					<tbody>
						<tr>
							<td>doug</td>
							<td>10</td>
							<td>dog</td>
						</tr>
					</tbody>
					
					<tfoot>
						<tr>
							<td>titi</td>
							<td colspan="2">Unknown</td>
						</tr>
					</tfoot>

				</table>

				<table cellspacing="2px" rules="all" style="border:solid 1px black;">
					<caption caption-side="bottom">Second table</caption>

					<tr>
						<th>title</th>
						<td>jojo</td>
						<td>beber</td>
					</tr>

					<tr>
						<th>age</th>
						<td>27</td>
						<td rowspan="2">osfe</td>
					</tr>

					<tr>
						<th>taf</th>
						<td>brank</td>
					</tr>

				</table>

				<button type="button" onclick="Javascript:alert('alert')">alert js</button>

				<p id="demo">
					paragraph
				</p>
				<button type="button" onclick="resetJs()">reset Js</button>
				<button type="button" onclick="writeStuff()">write Js</button>


				<script type="text/javascript">function writeStuff() {
					document.getElementById("demo").innerHTML = "write stuff !";
					}
				</script>

	</body>
	</html>