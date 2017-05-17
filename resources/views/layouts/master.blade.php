<!DOCTYPE html>
<html lang="en">
<head>
	<title>Randi Mays - Designer/Developer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Graphic designer, web designer, full-stack developer/software developer">
	<meta name="author" content="Randi Mays">
	<link href="/css/bootstrap/bootstrap.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Catamaran:400,700,500,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
	<link rel='shortcut icon' href='/rlogo_favicon.ico' type='image/x-icon'/ >
	<link href="/css/site.css" type="text/css" rel="stylesheet">
	<link href="/css/archer.css" type="text/css" rel="stylesheet">
	<link href="/css/weather.css" type="text/css" rel="stylesheet">
	<link href="/css/calculator.css" type="text/css" rel="stylesheet">
</head>
<body class="{{ $extra ? 'extra_footer_space' : ''}}">

	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" rel="home" href="{{ action('HomeController@index')}}" alt="Home">
					<img id="logo" src="/img/r_logo.png">
				</a>
				<a href="{{ action('HomeController@index') }}" alt="Home">
					<p class="headerName">randi<strong>mays</strong></p>
				</a>
			</div>
			
			<div id="navbar" class="collapse navbar-collapse navbar-responsive-collapse navbar-right">
				<ul class="nav navbar-nav">
					<li class="{{ $about ? 'active' : '' }}"><a href="{{ action('HomeController@about') }}">about</a></li>
					<li class="{{ $work ? 'active' : '' }} dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">work<b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="{{ action('HomeController@development') }}">development</a></li>
							<li><a href="{{ action('HomeController@design') }}">design</a></li>
						</ul>
					</li>
					<li class="{{ $resume ? 'active' : '' }}"><a href="{{ action('HomeController@resume') }}">resume</a></li>
					<li class="{{ $contact ? 'active' : '' }}"><a href="{{ action('HomeController@contact') }}">contact</a></li>
				</ul>
			</div>
		</div>
	</div>

@yield('content')

	<footer class="footer text-center">
		<p class="footerText">© 2016 randi mays&nbsp;&nbsp; |&nbsp;&nbsp; graphic designer&nbsp;&nbsp; |&nbsp;&nbsp; web developer&nbsp;&nbsp; |&nbsp;&nbsp;<a class="footerLink" href="mailto:randi@randimariedesigns.com?Subject=Designer/Developer">randi@randimariedesigns.com</a></p>
		<a id="linkedIn" href="https://www.linkedin.com/in/randimays" target="_blank" alt="Randi Mays LinkedIn"></a>
		<a id="facebook" href="https://www.facebook.com/randimmays" target="_blank" alt="Randi Mays Facebook"></a>
		<a id="twitter" href="https://twitter.com/randimays24" target="_blank" alt="Randi Mays Twitter"></a>
	</footer>

	<!-- JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIpqCtja5_cTG5h4K-gJeAhvb5BC1CiXs"></script>
	<script src="/js/bootstrap/bootstrap.min.js"></script>
	<script src="/js/contact-form.js"></script>
	<script src="/js/archer.js"></script>
	<script src="/js/weather.js"></script>
	<script src="/js/moment.js"></script>
	<script src="/js/calculator.js"></script>
</body>
</html>