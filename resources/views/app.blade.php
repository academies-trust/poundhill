<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pound Hill Infant Academy</title>

	<link href="{{url()}}/css/app.css" rel="stylesheet">

	<!-- Fonts -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="{{url()}}/html5shiv.js"></script>
		<script src="{{url()}}/respond.js"></script>
	<![endif]-->
</head>
<body>
	@include('partials.header')
	<div id="heroNav" class="container-fluid nopad">
		@include('partials.nav')
		@yield('hero')
	</div>
	
	<main id="main">
		@yield('content')
	</main>
	@include('partials.footer')

	@include('partials.scripts')
	@yield('scripts')
</body>
</html>