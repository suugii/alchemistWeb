<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:900" rel="stylesheet">
		<style type="text/css">
			body {
				font-weight: 400;
				font-family: 'Open Sans', sans-serif;
				line-height: 1.8;
				color: rgba(0, 0, 0, 0.87);
			}
			.title {
				position: relative;
				margin-bottom: 10px;
				font-weight: 900;
				font-family: 'Source Sans Pro', sans-serif;
				color: rgba(0, 0, 0, 0.7);
			}
			.title-after {
				display: block;
				margin-bottom: 10px;
				width: 50px;
				height: 3px;
				background-color: #20A7AC;
			}
		</style>
	</head>
	<body>
		<h1 class="title">Alchemist</h1>
		<span class="title-after"></span>
		<h2>{{ $title }}</h2>
		<h3>{{ $subtitle }}</h3>
		<ul>
			@foreach ($options as $option)
				<li>{{ $option }}</li>
			@endforeach
		</ul>
		<p>Холбогдох И-мэйл хаяг: {{ $email }}</p>
	</body>
</html>